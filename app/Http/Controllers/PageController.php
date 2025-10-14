<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        // Récupère les projets de la base
        $projects = Project::latest()->get();
        return view('portfolio', compact('projects'));
    }
}
