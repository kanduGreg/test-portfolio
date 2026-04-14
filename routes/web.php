<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route pour afficher la page d'accueil (ton portfolio)
Route::get('/', function () {
    $projects = Project::all(); // Récupère tous les projets de la base

    return view('welcome');
});

// Route pour gérer l'envoi du formulaire (remplace contact.php)
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/', function () {
    $projects = Project::all(); // Récupère tous les projets de la base
    return view('welcome', compact('projects'));
});
