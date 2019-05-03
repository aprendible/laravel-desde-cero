<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show($id)
    {
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }
}
