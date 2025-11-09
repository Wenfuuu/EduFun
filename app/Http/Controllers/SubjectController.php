<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Category;

class SubjectController extends Controller
{
    public function show($id)
    {
        // Get the subject with user and category
        $subject = Subject::with(['user', 'category'])->findOrFail($id);
        
        // Get all categories for navbar dropdown
        $categories = Category::all();
        
        return view('subject.detail', compact('subject', 'categories'));
    }
}
