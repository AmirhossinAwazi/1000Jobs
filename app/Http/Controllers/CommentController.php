<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Job;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function reply(Request $request, Category $category, Comment $comment)
    {
        $request->validate([
            'reply' => 'required|string',
            'lastname' => 'nullable|string',
        ]);

        $reply = new Comment();
        $reply->body = $request->input('reply');
        $reply->lastname = $request->input('lastname');
        $reply->parent_id = $comment->id;
        $reply->category_id = $category->id;
        $reply->save();

        return redirect()->back()->with('success', 'Reply posted successfully!');
    }

    public function index(Job $job, User $user, Category $category): View
    {
        $comments = $category->comments()->whereNull('parent_id')->get();
        return view('job.view', [
            'job' => $job,
            'user' => $user,
            'category' => $category
        ])->with('comments', $comments);
    }

    public function create(Category $category): View
    {
        return view('job.view', ['categoryId' => $category->id]);
    }

    public function store(StoreCommentRequest $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $validatedData = $request->validated();
        $validatedData['category_id'] = $category->id;
        $category->comments()->create($validatedData);

        return redirect()->route('view', ['Category' => $category->id]);
    }

    public function show(Job $job, User $user,Category $category): View
    {
        // $comments = $category->comments()->whereNull('parent_id')->get();
        $comments = $category->comments()->with('replies')->whereNull('parent_id')->get();
        return view('job.view', [
            'job' => $job,
            'user' => $user,
            'category' => $category
        ])->with('comments', $comments);
    }
}
