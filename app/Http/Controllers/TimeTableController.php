<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BackgroundImage;

class TimeTableController extends Controller
{
	public function index()
	{
    $background = BackgroundImage::first()->picture;
    return view('timetable', compact('background'));
	}
}
