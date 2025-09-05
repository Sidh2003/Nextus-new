<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Mail\Thankyou;
use App\Models\Career;
use App\Models\Enquiry;
use App\Mail\ContactMail;
use App\Models\BlogEnquiry;
use App\Models\BlogVisitor;
use App\Rules\CustomCaptcha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function ContactEnquiryStore(Request $request)
    {
        // Validation rules
        $rules = [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|digits_between:10,15',
            'function' => 'required|string|max:100',
            'portfolio_link' => 'nullable|url|max:255',
            'location' => 'required|string|max:255',
            'message' => 'nullable|string|max:2000',
            'upload_resume' => 'required|file|mimes:pdf,doc,docx|max:2048',   // 2MB
            'upload_portfolio' => 'nullable|file|mimes:pdf,doc,docx,zip,rar|max:5120', // optional, 5MB
        ];

        $messages = [
            'full_name.required' => 'Your Full Name is required',
            'full_name.string' => 'Full Name must be a valid text',
            'full_name.max' => 'Full Name should not exceed 255 characters',

            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'email.max' => 'Email should not exceed 255 characters',

            'mobile.required' => 'Mobile Number is required',
            'mobile.digits_between' => 'Mobile Number must be between 10 to 15 digits',

            'function.required' => 'Please select a Function',
            'function.string' => 'Invalid Function selected',

            'portfolio_link.url' => 'Portfolio link must be a valid URL',
            'portfolio_link.max' => 'Portfolio link should not exceed 255 characters',

            'location.required' => 'Your Location is required',
            'location.string' => 'Location must be valid text',
            'location.max' => 'Location should not exceed 255 characters',

            'message.string' => 'Message must be valid text',
            'message.max' => 'Message cannot exceed 2000 characters',

            'upload_resume.required' => 'Resume upload is required',
            'upload_resume.file' => 'Resume must be a valid file',
            'upload_resume.mimes' => 'Resume must be a file of type: pdf, doc, docx',
            'upload_resume.max' => 'Resume size cannot exceed 2MB',

            'upload_portfolio.file' => 'Portfolio must be a valid file',
            'upload_portfolio.mimes' => 'Portfolio must be a file of type: pdf, doc, docx, zip, rar',
            'upload_portfolio.max' => 'Portfolio size cannot exceed 5MB',
        ];

        $request->validate($rules, $messages);

        $enquiry = new Career();
        $enquiry->full_name = $request->full_name;
        $enquiry->email = $request->email;
        $enquiry->mobile = $request->mobile;
        $enquiry->function = $request->function;
        $enquiry->portfolio_link = $request->portfolio_link;
        $enquiry->location = $request->location;
        $enquiry->message = $request->message;

        // ✅ Store Resume
        if ($request->hasFile('upload_resume')) {
            $enquiry->upload_resume = $request->file('upload_resume')->store('resumes', 'public');
        }

        // ✅ Store Portfolio
        if ($request->hasFile('upload_portfolio')) {
            $enquiry->upload_portfolio = $request->file('upload_portfolio')->store('portfolios', 'public');
        }

        $enquiry->save();

        // Send mail
        Mail::to('siddhesh.technicul@gmail.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));

        return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    }



}
