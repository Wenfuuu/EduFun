<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Category;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function index()
    {
        $subjects = Subject::with(['user', 'category'])
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        $categories = Category::all();

        return view('popular', compact('subjects', 'categories'));
    }
}
