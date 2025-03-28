<?php

use Illuminate\Support\Facades\Route;
use Webkul\Company\Http\Controllers\Admin\CompanyController;

Route::prefix('admin')->group(function () {
    Route::resource('companies', CompanyController::class);
});