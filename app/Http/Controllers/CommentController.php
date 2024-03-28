<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $comments = Comment::all();
        return view('job.view')->with('comments', $comments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('job.view');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request, Job $job): RedirectResponse
    {
        $job->comments()->create($request->validated());

        return redirect(route('comment.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): View
    {
        $comments = $job->comments;
        return view('job.view', ['job' => $job, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $Comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $Comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $Comment)
    {
        //
    }
}
