<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\StoreTestRequest;
use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class JobController extends Controller
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

        return view('job.Short-answer', ['categories' => Category::get()]);
    }


    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreJobRequest $request)
    {
        $user = User::create($request->validated());
        $job = $user->job()->create([
            ...$request->validated(),
            'revenue_model' => implode(',', $request->input('revenue_model')),
        ]);
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $job->addMedia($photo)->toMediaCollection('images');
            }
        }

        return redirect()->route('home');
    }


    // public function store(StoreJobRequest $request)
    // {
    //     $user = User::Create($request->validated());
    //     // $user = User::firstOrCreate($request->validated(), ['phone_number', 'category_id']);
    //     $job = $user->job()->create(
    //         [
    //             ...$request->validated(),
    //             'revenue_model' => implode(',', $request->input('revenue_model')),
    //         ]
    //     );
    //     $job->addMediaFromRequest('photo')->toMediaCollection('images');
    //     // $job->addMediaFromRequest('voice')->toMediaCollection('voice');
    //     return to_route('home');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
