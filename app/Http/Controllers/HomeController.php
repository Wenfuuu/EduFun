<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = Subject::with(['user', 'category'])
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();

        $categories = Category::all();

        return view('home', compact('subjects', 'categories'));
    }
}
