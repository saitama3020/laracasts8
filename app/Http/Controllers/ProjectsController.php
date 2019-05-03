<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {

        $projects = \App\Project::all();
        // return $projects;
        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $project = new \App\Project();

        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }

    public function show() {
        
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
