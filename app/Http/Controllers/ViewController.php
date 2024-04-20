<?php

namespace App\Http\Controllers;

use App\Models\AtGlance;
use App\Models\Category;
use App\Models\Job;
use App\Models\User;

class ViewController extends Controller
{
    public function show(Job $job, User $user, $categoryId, Category $category)
    {
        $comments = $category->comments()->with('user', 'replies.user')->get();
        $category = Category::findOrFail($categoryId);
        $categories = Category::all();
        $user = User::all();
        $job = Job::all();
        $atGlances = AtGlance::where('category_id', $categoryId)->get();
        return view('job.view', compact('atGlances', 'job', 'user', 'comments', 'category', 'categories'));
    }
}
