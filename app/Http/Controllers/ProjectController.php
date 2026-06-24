<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('projects.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all();

        $newProject = New Project();

        $newProject->type_id = $data['type_id'];
        $newProject->name = $data['name'];
        $newProject->completed = $data['completed'];
        $newProject->client = $data['client'];
        $newProject->description = $data['description'];
        $newProject->url_img = $data['url_img'];
        $newProject->url_git = $data['url_git'];

        $newProject->save();

        return redirect()->route('projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
          $types = Type::all();
        return view('projects.edit', compact('project', 'types') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data= $request->all();

        $project->name = $data['name'];
        $project->type_id = $data['type_id'];
        $project->completed = $data['completed'];
        $project->client = $data['client'];
        $project->description = $data['description'];
        $project->url_img = $data['url_img'];
        $project->url_git = $data['url_git'];

        $project->update();

        return redirect()->route('projects.show', $project);
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    
    {
        $project->delete();
        return redirect()->route('projects.index');
        
    }
}
