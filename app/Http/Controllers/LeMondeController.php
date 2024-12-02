<?php

namespace App\Http\Controllers;

use App\Services\LeMondeService;
use Illuminate\Http\Request;

class LeMondeController extends Controller
{
    protected $leMondeService;

    public function __construct(LeMondeService $leMondeService)
    {
        $this->leMondeService = $leMondeService;
    }

    public function index()
    {
        $date = now()->toDateString(); // Date du jour
        $articles = $this->leMondeService->getArticles($date);

        return view('lemonde.index', compact('articles'));
    }
}
