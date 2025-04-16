<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Annonce;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('commentaire');
    }

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
       $annonce->load(['commentaires' => function($query){
        $query->orderBy('created_at', 'desc');
       } ]);
        return view('pages.show', [
            'annonce' => $annonce,
        ]);
    }

    public function commentaire(Annonce $annonce,  Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'contenu' => 'required|string|max:255',
        ]);
        $annonce->commentaires()->create([
            'contenu' => $validated['contenu'],
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('annonce.show', $annonce)->with('success', 'Esimbi !! Dans le bon 😉');

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
