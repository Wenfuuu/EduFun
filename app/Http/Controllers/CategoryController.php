<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subject;

class CategoryController extends Controller
{
    public function show($id)
    {
        // Get the category
        $category = Category::findOrFail($id);
        
        // Get all subjects for this category
        $subjects = Subject::with(['user', 'category'])
            ->where('category_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();
        
        // Get all categories for navbar dropdown
        $categories = Category::all();
        
        return view('category.detail', compact('category', 'subjects', 'categories'));
    }
}
