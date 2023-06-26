<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\src\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('web.pages.contact.index');
    }
    public function store(Request $request)
    {
    }
}
