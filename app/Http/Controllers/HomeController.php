<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featuredClubs = Club::with(['services', 'targetGroups'])
            ->take(6)
            ->get();

        return view('home', compact('featuredClubs'));
    }
}