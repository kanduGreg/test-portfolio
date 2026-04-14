<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'titre' => "Gestionnaire d'articles (AppBoutique)",
                'description' => "Application desktop en JavaFX avec MySQL pour la gestion de stock et des ventes.",
                'image' => "app_boutique.jpg"
            ],
            [
                'titre' => "Paiement des frais académiques",
                'description' => "Plateforme PHP/Laravel permettant aux étudiants de l'U.P.L de payer en ligne avec reçu PDF.",
                'image' => "paiement.jpg"
            ],
            [
                'titre' => "Détection de Fake News",
                'description' => "Extension Chrome utilisant une API pour vérifier la véracité des informations en ligne.",
                'image' => "chrome_ext.jpg"
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
