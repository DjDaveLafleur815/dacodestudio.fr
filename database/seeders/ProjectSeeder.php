<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Pilotage d’éclairage connecté',
            'description' => 'Interface Web + API mobile pour gérer l’éclairage domotique.',
            'image' => '/images/project1.jpg',
            'link' => '#',
        ]);

        Project::create([
            'title' => 'Surveillance énergétique',
            'description' => 'Dashboard temps réel (Laravel + Chart.js) pour suivre la conso.',
            'image' => '/images/project2.jpg',
            'link' => '#',
        ]);

        Project::create([
            'title' => 'Application mobile maintenance',
            'description' => 'Application Flutter pour interventions terrain.',
            'image' => '/images/project3.jpg',
            'link' => '#',
        ]);
    }
}
