<?php

namespace App\View\Components;

use App\Models\Village;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeVillage extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $villages = Village::all();
        return view('components.home-village', [
            'villages' => $villages,
        ]);
    }
}
