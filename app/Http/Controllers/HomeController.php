<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\BackgroundImage;

class HomeController extends Controller
{
	public function index()
	{
    $gallery    = Gallery::get();
    $background = BackgroundImage::first()->picture;
    return view('home', compact('gallery', 'background'));
	}
}
