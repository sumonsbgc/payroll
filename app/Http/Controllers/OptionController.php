<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OptionController extends Controller
{
    //
    public function index()
    {
        $options = Option::all()->toArray();
        $options = array_column($options, 'option_value', 'option_key');
        return view('administrator.setting.option.app_options', ['options' => $options]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'logo' => 'nullable|image|mimes:jpeg,bmp,png',
            'site-title' => 'nullable|string',
            'office_address' => 'nullable',
            'company-name' => 'nullable|string',
            'mobile' => 'nullable',
            'late-count-status' => 'nullable|numeric',
            'overtime-count-status' => 'nullable|numeric',
            'entry-time' => 'nullable',
            'late-day-count' => 'nullable',
            'late-count-start-time' => 'nullable',
            'overtime-count-time' => 'nullable',
        ]);

        if ($valid->fails()) {
            return back()->withErrors($valid)->withInput();
        }

        $hasRow = Option::all()->count();

        if (0 === $hasRow) {

            if ($request->hasFile('logo')) {

                $extension = $request->file('logo')->extension();
                $logo = time() . rand(100000, 10000000) . '.' . $extension;
                $request->file('logo')->storeAs('public', $logo);

            }

            foreach ($request->except('_token') as $key => $value) {
                $option = new Option;
                if ($key == 'logo') {
                    $option->option_key = $key;
                    $option->option_value = $logo;
                } else {
                    $option->option_key = $key;
                    $option->option_value = $value;
                }
                $option->save();
            }

            return back()->with('message', 'Options Created Successfully.');
        } else {

            if ($request->hasFile('logo')) {

                $extension = $request->file('logo')->extension();
                $logo = time() . rand(100000, 10000000) . '.' . $extension;
                $request->file('logo')->storeAs('public', $logo);

            } else {
                $logo = $request['hidden_logo'];
            }

            foreach ($request->except(['_token', 'hidden_logo']) as $key => $value) {
                $options = Option::where('option_key', $key)->first();

                if ($key == 'logo') {
                    $options->option_key = $key;
                    $options->option_value = $logo;
                } else {
                    $options->option_key = $key;
                    $options->option_value = $value;
                }

                $options->save();
            }

            return back()->with('message', 'Options Updated Successfully.');
        }
    }

    public function edit($id)
    {
    }
    public function update()
    {
    }
}
