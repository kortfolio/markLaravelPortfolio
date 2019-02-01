<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getContactPage()
    {
        return view('contact');
    }
}


