<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact( 'contact'));
    }

    public function show($id)
    {
        $contact = Contact::where('id', $id)->first();
        return view('admin.contact.show', compact('contact'));
    }
}
