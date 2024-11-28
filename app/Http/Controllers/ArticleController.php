<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article; 

class ArticleController extends Controller
{
    public function index()
    {
        // Récupérer tous les articles depuis la base de données
        $articles = Article::all();

        // Retourner une vue avec les articles
        return view('articles.index', compact('articles'));
    }

//     public function index()
// {
//     $articles = [];
//     return view('articles.index', compact('articles'));
// }
}

