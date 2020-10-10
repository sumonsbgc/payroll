<?php
    // Payroll Section
    Route::get('/hrm/payroll', 'PayrollController@index');
    Route::post('/hrm/payroll/go', 'PayrollController@go');
    Route::get('/hrm/payroll/manage-salary/{id}', 'PayrollController@create');
    Route::post('/hrm/payroll/store', 'PayrollController@store');
    Route::get('/hrm/payroll/salary-list', 'PayrollController@list');
    Route::get('/hrm/payroll/details/{id}', 'PayrollController@show');
    Route::post('/hrm/payroll/update/{id}', 'PayrollController@update');

    //Increment//
    Route::get('/hrm/payroll/increment/search', 'IncrementController@newIncrementSearch');
    Route::post('/hrm/payroll/increment/store', 'IncrementController@newIncrementStore')->name('increment.store');
    Route::get('/hrm/payroll/increment/list', 'IncrementController@incrementList');

    //Salary Statement//
    Route::get('/hrm/salary/statement/search', 'IncrementController@salaryStatementSearch');
    Route::get('/hrm/salary/statement/view', 'IncrementController@salaryStatementView');
    Route::get('/hrm/salary/statement/preview', 'IncrementController@salaryStatementPreview');
    Route::get('/hrm/salary/statement/pdf', 'IncrementController@salaryStatementPdf');

    // Bonus Section //
    Route::get('/hrm/bonuses', 'BonusController@index');
    Route::get('/hrm/bonuses/create', 'BonusController@create');
    Route::post('/hrm/bonuses/store', 'BonusController@store');
    Route::get('/hrm/bonuses/details/{id}', 'BonusController@show');
    Route::get('/hrm/bonuses/edit/{id}', 'BonusController@edit');
    Route::post('/hrm/bonuses/update/{id}', 'BonusController@update');
    Route::get('/hrm/bonuses/delete/{id}', 'BonusController@destroy');

    // Deduction Section //
    Route::get('/hrm/deductions', 'DeductionController@index');
    Route::get('/hrm/deductions/create', 'DeductionController@create');
    Route::post('/hrm/deductions/store', 'DeductionController@store');
    Route::get('/hrm/deductions/details/{id}', 'DeductionController@show');
    Route::get('/hrm/deductions/edit/{id}', 'DeductionController@edit');
    Route::post('/hrm/deductions/update/{id}', 'DeductionController@update');
    Route::get('/hrm/deductions/delete/{id}', 'DeductionController@destroy');

    // Loan Section //
    Route::get('/hrm/loans', 'LoanController@index');
    Route::get('/hrm/loans/create', 'LoanController@create');
    Route::post('/hrm/loans/store', 'LoanController@store');
    Route::get('/hrm/loans/details/{id}', 'LoanController@show');
    Route::get('/hrm/loans/edit/{id}', 'LoanController@edit');
    Route::post('/hrm/loans/update/{id}', 'LoanController@update');
    Route::get('/hrm/loans/delete/{id}', 'LoanController@destroy');

    // Payment Section
    // Route::get('/hrm/employee-salary-details', 'SalaryPaymentController@index')->name('employee.salary.details');
    Route::get('/hrm/salary-payments', 'SalaryPaymentController@show');
    Route::post('/hrm/salary-payments/go', 'SalaryPaymentController@go');
    Route::get('/hrm/salary-payments/manage-salary/{id}/{salary_month}', 'SalaryPaymentController@create')->name('employee.salary.details');
    Route::get('/hrm/salary-payments/pdf/{id}/{salary_month}', 'SalaryPaymentController@pdf');
    Route::post('/hrm/salary-payments/store', 'SalaryPaymentController@store');
    // Generate Payslip
    Route::get('/hrm/generate-payslips/', 'SalaryPaymentController@show');
    Route::post('/hrm/generate-payslips/', 'SalaryPaymentController@generate');
    Route::get('/hrm/generate-payslips/salary-list/{salary_month}', 'SalaryPaymentController@list')->name('employee.salary.list');
    Route::get('/hrm/generate-payslips/pdf/employee_salary_lists/{salary_month}', 'SalaryPaymentController@salary_list_pdf')->name("empl_salary_list");
    //
    Route::get('/hrm/provident-funds/', 'SalaryPaymentController@provident_fund');