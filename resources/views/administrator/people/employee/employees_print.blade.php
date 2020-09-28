<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ __('Job Report') }}</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/print.css?ver='.time()) }}" media="print">
</head>

<body onload="window.print();">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center py-5">
                @php(get_compnay_name())
                @php(ucwords(get_compnay_address()))
            </div>
        </div>
    </div>

    <div id="printable_area" class="col-md-12 table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('SL#') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Designation') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Contact No') }}</th>
                    <th>{{ __('Join Date') }}</th>
                </tr>
            </thead>
            <tbody>
                @php($sl = 1)
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $employee['name'] }}</td>
                    <td>{{ $employee['designation'] }}</td>
                    <td>{{ $employee['email'] }}</td>
                    <td>{{ $employee['contact_no_one'] }}</td>
                    <td>{{ date("d F Y", strtotime($employee['created_at'])) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>