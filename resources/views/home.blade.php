@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ __('Dashboard') }}</div>
                    {{-- {{ dd($users) }} --}}
                    <div class="panel-body">
                        <table class="table table-bordered">
                            @php
                            asort($start);
                            asort($end);

                                echo "<pre>";
                                    print_r($start);
                                    print_r($end);
                                echo "</pre>";
                                
                            @endphp
                            {{-- @foreach ($logs as $log)
                                {{ dd($log) }}
                            @endforeach --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
