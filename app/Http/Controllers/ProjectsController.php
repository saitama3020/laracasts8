<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Services\Twitter;
use App\Mail\ProjectCreated;

class ProjectsController extends Controller
{   

    public function __construct() {

        $this->middleware('auth');

    }

    public function index() {
        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    public function create() {

        return view('projects.create');
    
    }

    public function store() {

        $attributes = $this->validateProject();
        
        $attributes += ['owner_id' => auth()->id()];

        $project = Project::create($attributes);

        \Mail::to('piyushgoel3020@gmail.com')->send(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    
    }

    public function show(Project $project) {

        $this->authorize('update', $project);

        return view('projects.show', compact('project'));
        
    }

    public function edit(Project $project) {

        return view('projects.edit', compact('project'));
        
    }

    public function update(Project $project) {

        $project->update($this->validateProject());

        return redirect('/projects');

    }

    public function destroy(Project $project) {

        $this->authorize('update', $project);

        $project->delete();

        return redirect('/projects');

    }

    protected function validateProject() {

        return request()->validate([

            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        
        ]);

    }
}
