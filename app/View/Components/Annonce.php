<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Annonce extends Component
{
    /**
     * Create a new component instance.
     */

    public $annonces;

    public function __construct(iterable $annonces)
    {
        //
        $this->annonces = $annonces;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.annonce');
    }
}
