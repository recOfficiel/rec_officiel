<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        return view('pages.index');
    }
    public function annonce(): View
    {
        return view('pages.Annonce');
    }
}
