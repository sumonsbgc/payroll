{{-- Allowances --}}
<div class="col-md-6">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">{{ __('Allowances') }}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group{{ $errors->has('house_rent_allowance') ? ' has-error' : '' }}">
          <label for="house_rent_allowance">{{ __('House Rent Allowance') }}</label>
          <input type="number" name="house_rent_allowance" value="{{ old('house_rent_allowance') }}" class="form-control" id="house_rent_allowance" placeholder="{{ __('Enter house rent allowance..') }}">
          @if ($errors->has('house_rent_allowance'))
          <span class="help-block">
            <strong>{{ $errors->first('house_rent_allowance') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('medical_allowance') ? ' has-error' : '' }}">
          <label for="medical_allowance">{{ __('Medical Allowance') }}</label>
          <input type="number" name="medical_allowance" value="{{ old('medical_allowance') }}" class="form-control" id="medical_allowance" placeholder="{{ __('Enter medical allowance..') }}">
          @if ($errors->has('medical_allowance'))
          <span class="help-block">
            <strong>{{ $errors->first('medical_allowance') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('special_allowance') ? ' has-error' : '' }}">
          <label for="special_allowance">{{ __('Special Allowance') }}</label>
          <input type="number" name="special_allowance" value="{{ old('special_allowance') }}" class="form-control" id="special_allowance" placeholder="{{ __('Enter special allowance..') }}">
          @if ($errors->has('special_allowance'))
          <span class="help-block">
            <strong>{{ $errors->first('special_allowance') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('provident_fund_contribution') ? ' has-error' : '' }}">
          <label for="provident_fund_contribution">{{ __('Provident Fund Contribution') }}</label>
          <input type="number" name="provident_fund_contribution" value="{{ old('provident_fund_contribution') }}" class="form-control" id="provident_fund_contribution" placeholder="{{ __('Enter provident fund contribution..') }}">
          @if ($errors->has('provident_fund_contribution'))
          <span class="help-block">
            <strong>{{ $errors->first('provident_fund_contribution') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('other_allowance') ? ' has-error' : '' }}">
          <label for="other_allowance">{{ __('Other Allowance') }}</label>
          <input type="number" name="other_allowance" value="{{ old('other_allowance') }}" class="form-control" id="other_allowance" placeholder="{{ __('Enter other allowance..') }}">
          @if ($errors->has('other_allowance'))
          <span class="help-block">
            <strong>{{ $errors->first('other_allowance') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.end.col -->