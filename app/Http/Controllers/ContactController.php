<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BackgroundImage;

class ContactController extends Controller
{
  public function index()
  {
    $background = BackgroundImage::first()->picture;
    return view('contact', compact('background'));
  }
}
