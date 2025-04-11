<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Annonce;
use Illuminate\Contracts\Database\Eloquent\Builder;

class PagesController extends Controller
{
    public function index(): View
    {
        return view('pages.index');
    }
    public function annonce(Request $request): View
    {
        $annonces = Annonce::query();
        if($recherche = $request->recherche){
            $annonces->where(function($query) use ($recherche) {
                $query->where('titre', 'like', "%{$recherche}%")
                      ->orWhere('contenu', 'like', "%{$recherche}%");
            });
        }
        $annonces = $annonces->with('categorie')->orderBy('created_at', 'desc')->paginate(5);
        return view('pages.Annonce', [
            'annonces' => $annonces
        ]);
     }

    public function show(Annonce $annonce): View
    {
        return view('pages.show', [
            'annonce' => $annonce,
        ]);
    }

    public function about(): View
    {
        return view('pages.apropos');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
