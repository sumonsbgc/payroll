<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Option;

class OptionController extends Controller
{
    //
    public function index(){
        return view('administrator.setting.option.app_options');
    }

    public function create(){}
    
    public function store(Request $request){
        
        $hasRow = Option::all()->count();
        if(0 === $hasRow){
            $option = new Option;
        }else{
            $option = Option;
        }
        dd($option);
    }

    public function edit($id){}
    public function update(){}

}
