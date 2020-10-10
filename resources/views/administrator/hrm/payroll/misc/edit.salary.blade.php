        <!-- /.end.col -->
        <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">{{ __('Allowances') }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group{{ $errors->has('house_rent_allowance') ? ' has-error' : '' }}">
                  <label for="house_rent_allowance">{{ __('House Rent Allowance') }}</label>
                  <input type="number" name="house_rent_allowance" value="{{ $salary['house_rent_allowance'] }}"
                    class="form-control" id="house_rent_allowance" placeholder="{{ __('Enter house rent allowance..') }}">
                  @if ($errors->has('house_rent_allowance'))
                  <span class="help-block">
                    <strong>{{ $errors->first('house_rent_allowance') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('medical_allowance') ? ' has-error' : '' }}">
                  <label for="medical_allowance">{{ __('Medical Allowance') }}</label>
                  <input type="number" name="medical_allowance" value="{{ $salary['medical_allowance'] }}"
                    class="form-control" id="medical_allowance" placeholder="{{ __('Enter medical allowance..') }}">
                  @if ($errors->has('medical_allowance'))
                  <span class="help-block">
                    <strong>{{ $errors->first('medical_allowance') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('special_allowance') ? ' has-error' : '' }}">
                  <label for="special_allowance">{{ __('Special Allowance') }}</label>
                  <input type="number" name="special_allowance" value="{{ $salary['special_allowance'] }}"
                    class="form-control" id="special_allowance" placeholder="{{ __('Enter special allowance..') }}">
                  @if ($errors->has('special_allowance'))
                  <span class="help-block">
                    <strong>{{ $errors->first('special_allowance') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('provident_fund_contribution') ? ' has-error' : '' }}">
                  <label for="provident_fund_contribution">{{ __('Provident Fund Contribution') }}</label>
                  <input type="number" name="provident_fund_contribution"
                    value="{{ $salary['provident_fund_contribution'] }}" class="form-control"
                    id="provident_fund_contribution" placeholder="{{ __('Enter special allowance..') }}">
                  @if ($errors->has('provident_fund_contribution'))
                  <span class="help-block">
                    <strong>{{ $errors->first('provident_fund_contribution') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('other_allowance') ? ' has-error' : '' }}">
                  <label for="other_allowance">{{ __('Other Allowance') }}</label>
                  <input type="number" name="other_allowance" value="{{ $salary['other_allowance'] }}"
                    class="form-control" id="other_allowance" placeholder="{{ __('Enter other allowance..') }}">
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
          <div class="col-md-6">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">{{ __('Deductions') }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group{{ $errors->has('tax_deduction') ? ' has-error' : '' }}">
                  <label for="tax_deduction">{{ __('Tax Deduction') }}</label>
                  <input type="number" name="tax_deduction" value="{{ $salary['tax_deduction'] }}" class="form-control"
                    id="tax_deduction" placeholder="{{ __('Enter tax deduction..') }}">
                  @if ($errors->has('tax_deduction'))
                  <span class="help-block">
                    <strong>{{ $errors->first('tax_deduction') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('provident_fund_deduction') ? ' has-error' : '' }}">
                  <label for="provident_fund_deduction">{{ __('Provident Fund Deduction') }}</label>
                  <input type="number" name="provident_fund_deduction" value="{{ $salary['provident_fund_deduction'] }}"
                    class="form-control" id="provident_fund_deduction" placeholder="{{ __('Enter tax deduction..') }}">
                  @if ($errors->has('provident_fund_deduction'))
                  <span class="help-block">
                    <strong>{{ $errors->first('provident_fund_deduction') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('other_deduction') ? ' has-error' : '' }}">
                  <label for="other_deduction">{{ __('Other Deduction') }}</label>
                  <input type="number" name="other_deduction" value="{{ $salary['other_deduction'] }}"
                    class="form-control" id="other_deduction" placeholder="{{ __('Enter other deduction..') }}">
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
  
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">{{ __('Provident Fund') }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label for="total_provident_fund">{{ __('Total Provident Fund') }}</label>
                  <input type="number" class="form-control" id="total_provident_fund" readonly>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.end.col -->
  
          <div class="col-md-offset-6 col-md-6">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">{{ __('Total Salary Details') }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label for="gross_salary">{{ __('Gross Salary') }}</label>
                  <input type="number" disabled class="form-control" id="gross_salary">
                </div>
                <div class="form-group{{ $errors->has('total_deduction') ? ' has-error' : '' }}">
                  <label for="total_deduction">{{ __('Total Deduction') }}</label>
                  <input type="number" disabled class="form-control" id="total_deduction">
                </div>
                <div class="form-group">
                  <label for="net_salary">{{ __('Net Salary') }}</label>
                  <input type="number" disabled class="form-control" id="net_salary">
                </div>
              </div>
              <!-- /.box-body -->
  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-edit"></i>
                  {{ __('Update Details') }}</button>
              </div>
            </div>
          </div>
          <!-- /.end.col -->