<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Job;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('photo')->get();
        $categories = Category::get();
        return view('welcome', [
            'jobs' => $jobs,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $categories = Category::get();
        // return view('welcome', [
        //     'categories' => $categories,
        // ]);
        $categories = [
            [
                'id' => 1,
                'title' => 'برنامه‌نویس',
                'image' => 'developer.jpg',
                'text' => 'بین ۷ تا ۴۵ میلیون تومان ماهانه',
            ],

            [
                'id' => 2,
                'title' => 'وکیل',
                'image' => 'lawyer.jpg',
                'text' => 'بین ۲۰ تا ۴۰۰ میلیون ماهانه',
            ],

            [
                'id' => 3,
                'title' => 'معلم',
                'image' => 'teacher.jpg',
                'text' => 'بین ۶ تا ۲۵ میلیون ماهانه',
            ],

            [
                'id' => 4,
                'title' => 'فروشنده',
                'image' => 'seller.jpg',
                'text' => 'بین ۴ تا ۵۰ میلیون ماهانه',
            ],

            [
                'id' => 5,
                'title' => 'مترجم',
                'image' => 'translator.jpg',
                'text' => 'بین ۷ تا ۲۰ میلیون ماهانه',
            ],
        ];
        return view('welcome', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
