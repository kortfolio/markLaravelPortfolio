<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getAboutPage()
    {
        return view('about');
    }
}


