<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        // Get all users who have written articles
        $writers = User::has('subjects')->withCount('subjects')->get();
        $categories = Category::all();
        
        return view('writers.index', compact('writers', 'categories'));
    }

    public function show($id)
    {
        // Get the writer with their subjects
        $writer = User::with(['subjects.category'])->findOrFail($id);
        $categories = Category::all();
        
        return view('writers.detail', compact('writer', 'categories'));
    }
}
