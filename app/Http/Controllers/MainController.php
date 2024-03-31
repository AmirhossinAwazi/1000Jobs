<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $jobs = Job::with('photo')->get();
        $categories = Category::query()
            ->with('jobs')
            ->get();

        return view('home', compact('jobs', 'categories'));
    }
}
