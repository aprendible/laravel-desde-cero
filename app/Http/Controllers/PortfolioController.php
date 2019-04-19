<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', [
            'projects' => Project::latest()->paginate()
        ]);
    }
}
