<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class PagesController extends Controller
{
    //
    public function index ()
    {
        $notices = Notice::orderBy('created_at','desc')->take(6)->get();
        return view('pages.index')->with('notices', $notices);
    }
}
