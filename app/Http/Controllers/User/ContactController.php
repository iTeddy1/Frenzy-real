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
    $validated = $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ], $messages);

    // Process the form submission
    // You can send an email, save to database, etc.
    Mail::to('22521579@gm.uit.edu.vn')->send(new ContactMail($validated));

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Thank you for your message!');
  }
}