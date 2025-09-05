<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::post('/contactenquirystore', [HomeController::class, 'ContactEnquiryStore'])->name('contact.enquiry.store');