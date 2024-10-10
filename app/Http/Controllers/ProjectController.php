<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function show($id)
    {
        return Project::findOrFail($id);
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json($project, 201);
    }

    public function update(Request $request)
    {
        $project = Project::findOrFail($request->id);
        $project->update($request->all());
        return response()->json($project, 200);
    }

    public function destroy(Request $request)
    {
        Project::destroy($request->id);
        return response()->json(['message' => 'Project deleted'], 204);
    }
}
