<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store()
    {
        // Validate

        // Persist
        Project::create(request(['title', 'description']));

        // Redirect
        return redirect('/projects');
    }

    // Route::post('/projects', function () {
    //     App\Project::create(request(['title', 'description']));
    // });

    // Route::get('/projects', function () {
    //     $projects = App\Project::all();

    //     return view('projects.index', compact('projects'));
    // });

}
