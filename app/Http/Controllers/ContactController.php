<?php

namespace App\http\Controllers;

use App\http\Controllers\Controller;
use Illuminate\http\request;

class ContactController extends Controller
{
public function index()
{
    return view('contact.index');
}
public function confirm(Request $REQUEST)
{
    $validated=$REQUEST->validate([
    'company'=>'required|string|max:20',
     'name'=>'required|string|max:20',
     'phone'=>'required|regex:/^[0-9-]+$/',
     'mail'=>'required|email',
     'birthday'=>'required',
     'sex'=>'required',
     'job'=>'required',
     'contact'=>'required|string',
    ]);
    return view('contact.confirm',compact('validated'));
}
public function send()
{
    return view('contact.send');
}    //
}
