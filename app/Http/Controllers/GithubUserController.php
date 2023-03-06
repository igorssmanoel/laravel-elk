<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGithubUserRequest;
use App\Http\Requests\UpdateGithubUserRequest;
use App\Models\GithubUser;

class GithubUserController extends Controller
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
    public function store(StoreGithubUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GithubUser $githubUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GithubUser $githubUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGithubUserRequest $request, GithubUser $githubUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GithubUser $githubUser)
    {
        //
    }
}
