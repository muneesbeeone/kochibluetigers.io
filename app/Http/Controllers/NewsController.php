<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.blog');
    }

    public function show(Request $request, $slug)
    {
        return view('pages.blog-details', compact('slug'));
    }
}
