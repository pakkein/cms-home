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
public function confirm()
{
    return view('contact.confirm');
}
public function send()
{
    return view('contact.send');
}    //
}
