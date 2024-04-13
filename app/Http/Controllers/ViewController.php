<?php

namespace App\Http\Controllers;

use App\Models\AtGlance;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(string $id)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job, Category $category, User $user)
    {
        // $comments = $job->comments()->with('replies')->get();
        // $atGlancesData = AtGlance::all();
        $atGlances = AtGlance::all();
        $comments = $job->comments()->with('user', 'replies.user')->get();
        return view('job.view', [
            'job' => $job,
            'category' => $category,
            'comments' => $comments,
            'user' =>$user,
            'atGlances' => $atGlances,
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
