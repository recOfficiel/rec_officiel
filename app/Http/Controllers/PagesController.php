<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Annonce;

class PagesController extends Controller
{
    public function index(): View
    {
        return view('pages.index');
    }
    public function annonce(): View
    {
        $annonces = Annonce::with('categorie')->orderby('created_at', 'desc')->paginate(5);

        return view('pages.Annonce', [
            'annonces' => $annonces,
        ]);

    }

    public function show(Annonce $annonce): View
    {
        return view('pages.show', [
            'annonce' => $annonce,
        ]);
    }
}
