<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::post('/careerenquirystore', [HomeController::class, 'CareerEnquiryStore'])->name('career.enquiry.store');

Route::post('/contactenquirystore', [HomeController::class, 'ContactEnquiryStore'])->name('contact.enquiry.store');