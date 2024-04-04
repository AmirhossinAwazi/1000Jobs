<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Job;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function reply(Request $request, Job $job, Comment $comment)
    {
        $request->validate([
            'reply' => 'required|string',
            'lastname' => 'nullable|string',
        ]);
        $reply = new Comment();
        $reply->body = $request->input('reply');
        $reply->lastname = $request->input('lastname');
        $reply->parent_id = $comment->id;
        $reply->job_id = $job->id;
        $reply->save();

        return redirect()->back()->with('success', 'Reply posted successfully!');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Job $job, User $user): View
    {
        // $comments = Comment::all();
        $comments = $job->comments()->whereNull('parent_id')->get();
        return view('job.view', [
            'job'=>$job,
            'user'=>$user
            ])->with('comments', $comments);
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
    public function store(StoreCommentRequest $request, Job $job)
    {
        $job->comments()->create($request->validated());

        return to_route('view', ['job'=>$job]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): View
    {
        // Fetch only root comments (comments without a parent_id)
        $comments = $job->comments()->whereNull('parent_id')->get();
        return view('job.view', [
            'job' => $job,
            'comments' => $comments
        ]);
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
