<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Inquiry;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function contactSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'business_email' => ['required', 'regex:/^.+@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', 'string', 'email', 'max:255'],
            'budget' => ['required', 'string'],
            'message' => ['required'],
        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->business_email = $request->business_email;
        $inquiry->budget = $request->budget;
        $inquiry->message = $request->message;
        $inquiry->save();

        // mail to admin
        // Mail::to("yasirarafat.dev@gmail.com")->send(new ContactMail($request));
        Mail::to("support@softburgh.com")->send(new ContactMail($request));

        return back()->withSuccess('Inquiry Submitted Successfully!');
    }
    public function submitNewsletter(Request $request)
    {

        $this->validate($request, [
            "email" => ['required', 'unique:news_letters', 'regex:/^.+@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', 'string', 'email', 'max:255'],
        ]);

        $newsletter = new NewsLetter();
        $newsletter->email = $request->email;
        $newsletter->save();

        return 'success';
    }
}
