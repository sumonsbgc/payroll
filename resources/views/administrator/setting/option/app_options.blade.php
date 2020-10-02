@extends('administrator.master')
@section('title', __('Application Options'))

@section('main_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ __('Application Options') }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
                <li><a>{{ __('Setting') }}</a></li>
                <li><a href="{{ route('setting.option.index') }}">{{ __('Options') }}</a></li>
                <li class="active">{{ __('Add App Options') }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- SELECT2 EXAMPLE -->
            <div class="box box-default bt-none">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('Add New App Options') }}</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <form action="{{ route('setting.option.store') }}" method="post" name="option_type_form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <!-- Notification Box -->
                            <div class="col-md-12">
                                @if (!empty(Session::get('message')))
                                    <div class="alert alert-success alert-dismissible" id="notification_box">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                                    </div>
                                @elseif (!empty(Session::get('exception')))
                                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                                    </div>
                                @endif
                            </div>
                            <!-- /.Notification Box -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="logo">{{ __('Upload Logo') }} <span class="text-danger">*</span></label>
                                        <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }} has-feedback">
                                            <input type="file" name="logo" id="logo" class="form-control">
                                            <input type="hidden" name="hidden_logo" value="{{ old('logo', $options['logo']) }}">
                                            @if ($errors->has('logo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('logo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('public/storage/'.$options['logo']) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="site-title">{{ __('Application Title') }} <span
                                        class="text-danger">*</span></label>
                                <div class="form-group{{ $errors->has('site-title') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" name="site-title" id="site-title" class="form-control"
                                        placeholder="Application Title" value="{{ old('site-title', $options['site-title']) }}">
                                    @if ($errors->has('site-title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('site-title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- /.col -->
                            <div class="col-md-6">

                                <label for="office_address">
                                    {{ __('Office Address') }} <span class="text-danger">*</span>
                                </label>

                                <div class="form-group{{ $errors->has('office_address') ? ' has-error' : '' }} has-feedback">
                                    <textarea class="textarea text-description" name="office_address" id="office_address" placeholder="{{ __('Office Address..') }}" style="height: 90px;">{{ old('office_address', $options['office_address']) }}</textarea>
                                    @if ($errors->has('office_address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('office_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!-- /.col -->
                            <div class="col-md-6">
                                <label for="company-name">
                                    {{ __('Company Name (For Invoice)') }} <span class="text-danger">*</span>
                                </label>
                                <div class="form-group{{ $errors->has('company-name') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" name="company-name" id="company-name" class="form-control" placeholder="Company Name" value="{{ old('company-name', $options['company-name']) }}">
                                    @if ($errors->has('company-name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('company-name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="mobile">{{ __('Mobile Number') }} <span class="text-danger">*</span></label>
                                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        placeholder="Mobile Number" value="{{ old('mobile', $options['mobile']) }}">
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="late-count-status">{{ __('Late Count Status') }} <span class="text-danger">*</span></label>
                                <div class="form-group {{ $errors->has('late-count-status' ? ' has-error' : '') }} has-feedback">

                                    <input type="radio" class="custom-control-input late-count-status" name="late-count-status" value="1" {{ $options['late-count-status'] != 0 ? 'checked' : '' }}> Yes <br>
                                    <input type="radio" class="custom-control-input late-count-status" name="late-count-status" value="0" {{ $options['late-count-status'] != 1 ? 'checked' : '' }}> No <br>

                                    @if ($errors->has('late-count-status'))
                                        <span>
                                            <strong>{{ $errors->first('late-count-status') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="overtime-count-status">
                                    {{ __('Overtime Count Status') }}
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group {{ $errors->has('overtime-count-status' ? ' has-error' : '') }} has-feedback">
                                    <input type="radio" class="custom-control-input overtime-count-status" name="overtime-count-status" value="1" {{ $options['overtime-count-status'] != 0 ? 'checked' : '' }}> Yes <br>
                                    <input type="radio" class="custom-control-input overtime-count-status" name="overtime-count-status" value="0" {{ $options['overtime-count-status'] != 1 ? 'checked' : '' }}> No <br>

                                    @if ($errors->has('overtime-count-status'))
                                        <span>
                                            <strong>{{ $errors->first('overtime-count-status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 entry-time">
                                <label for="entry-time">{{ __('Exact Entry Time (AM)') }} <span
                                        class="text-danger">*</span></label>
                                <div class="form-group{{ $errors->has('entry-time') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" name="entry-time" id="entry-time" class="form-control" placeholder="e.g. 9:00" value="{{ old('entry-time', $options['entry-time']) }}">
                                    @if ($errors->has('entry-time'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('entry-time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 late-day-count">
                                <label for="late-day-count">{{ __('Late Day Count Number') }} <span
                                        class="text-danger">*</span></label>
                                <div
                                    class="form-group{{ $errors->has('late-day-count') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" name="late-day-count" id="late-day-count" class="form-control"
                                        placeholder="e.g. 3" value="{{ old('late-day-count', $options['late-day-count']) }}">
                                    @if ($errors->has('late-day-count'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('late-day-count') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6 late-count-start-titme">
                                <label for="late-count-start-titme">{{ __('Late count Start Time (AM)') }} <span
                                        class="text-danger">*</span></label>
                                <div
                                    class="form-group{{ $errors->has('late-count-start-titme') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" name="late-count-start-titme" id="late-count-start-titme"
                                        class="form-control" placeholder="e.g. 9:15" value="{{ old('late-count-start-titme', $options['late-count-start-titme']) }}">
                                    @if ($errors->has('late-count-start-titme'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('late-count-start-titme') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6 overtime-count-time">
                                <label for="overtime-count-time">{{ __('Overtime Count time') }} <span
                                        class="text-danger">*</span></label>
                                <div
                                    class="form-group{{ $errors->has('overtime-count-time') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" name="overtime-count-time" id="overtime-count-time" class="form-control" placeholder="Overtime Count time" value="{{ old('overtime-count-time', $options['overtime-count-time']) }}">
                                    @if ($errors->has('overtime-count-time'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('overtime-count-time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('setting.option.index') }}" class="btn btn-danger btn-flat">
                            <i class="icon fa fa-close"></i> {{ __('Cancel') }}
                        </a>
                        <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i>
                            {{ __('Add App Options') }}</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->


        </section>
        <!-- /.content -->
    </div>

@endsection
