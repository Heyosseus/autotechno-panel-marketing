<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Links;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index() : View
    {
        $news = News::paginate(2);
        $links = Links::limit(6)->get();
        return view('news', compact('news', 'links'));
    }

    public function show(News $news) : View
    {
        return view('news-show', compact('news'));
    }
}
