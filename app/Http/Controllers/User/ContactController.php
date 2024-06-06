<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  /**
   * Show the contact form.
   *
   * @return \Illuminate\View\View
   */
  public function showForm()
  {
    return view('user.contact');
  }

  /**
   * Handle the contact form submission.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function submitForm(Request $request)
  {
    $messages = [
      'name.required' => 'We need to know your name!',
      'email.required' => "Don't forget your email address!",
      'email.email' => 'Please provide a valid email address.',
      'message.required' => 'A message is required to submit the form.',
    ];

    // Validate the form data
    $details = $request->validate([
      'name' => 'required|max:255',
      'email' => 'required|email',
      'message' => 'required|max:255',
    ], $messages);

    Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($details));

    return redirect()->back()->with('success', 'Thank you for your message!');
  }
}