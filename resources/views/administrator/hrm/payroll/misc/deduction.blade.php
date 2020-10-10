<div class="col-md-6">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">{{ __('Deductions') }}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group{{ $errors->has('tax_deduction') ? ' has-error' : '' }}">
          <label for="tax_deduction">{{ __('Tax Deduction') }}</label>
          <input type="number" name="tax_deduction" value="{{ old('tax_deduction') }}" class="form-control" id="tax_deduction" placeholder="{{ __('Enter tax deduction..') }}">
          @if ($errors->has('tax_deduction'))
          <span class="help-block">
            <strong>{{ $errors->first('tax_deduction') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('provident_fund_deduction') ? ' has-error' : '' }}">
          <label for="provident_fund_deduction">{{ __('Provident Fund Deduction') }}</label>
          <input type="number" name="provident_fund_deduction" value="{{ old('provident_fund_deduction') }}" class="form-control" id="provident_fund_deduction" placeholder="{{ __('Enter provident fund deduction..') }}">
          @if ($errors->has('provident_fund_deduction'))
          <span class="help-block">
            <strong>{{ $errors->first('provident_fund_deduction') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('other_deduction') ? ' has-error' : '' }}">
          <label for="other_deduction">{{ __('Other Deduction') }}</label>
          <input type="number" name="other_deduction" value="{{ old('other_deduction') }}" class="form-control" id="other_deduction" placeholder="{{ __('Enter other deduction..') }}">
          @if ($errors->has('other_deduction'))
          <span class="help-block">
            <strong>{{ $errors->first('other_deduction') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.end.col -->