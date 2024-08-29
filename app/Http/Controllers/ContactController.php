<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $attributes = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
            'text' => 'required|string',
        ]);

        $data = array_merge($attributes, ['ip' => $request->ip()]);
        Contact::create($data);

        return redirect()->back()->with(['success' => 'Contact form submitted!'], 201);
    }
}
