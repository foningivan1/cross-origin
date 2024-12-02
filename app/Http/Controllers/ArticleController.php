<?php

namespace App\Http\Controllers;

use App\Services\LeMondeService;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    protected $leMondeService;

    public function __construct(LeMondeService $leMondeService)
    {
        $this->leMondeService = $leMondeService;
    }

    // public function index()
    // {
    //     $date = date('Y-m-d'); // Format de date '2024-10-22'

    //     $articles = $this->leMondeService->getArticles($date);

    //     return view('articles.index', compact('articles'));
    // }

    public function index()
{
    // Récupérer la date actuelle
    $date = date('Y-m-d'); // Exemple de date formatée : '2024-10-22'

    // Appeler le service pour récupérer les articles
    $articles = $this->leMondeService->getArticles($date);

    // Affichage pour déboguer (afficher le contenu de $articles)
    dd($articles);
    Log::info($articles);

    // Retourner la vue avec les articles
    return view('articles.index', compact('articles'));
}
}

