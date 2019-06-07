<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BackgroundImage;

class AboutController extends Controller
{
  public function index()
  {
    $background = BackgroundImage::first()->picture;
    return view('about', compact('background'));
  }
}
