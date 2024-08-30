<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\News;

class HomeController extends Controller
{
    public function home() : View
    {
        $blogs = News::limit(3)->latest()->get();
        return view('home', compact('blogs'));
    }
}
