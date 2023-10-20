<?php

namespace App\View\Components;

use App\Models\Tour;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeTour extends Component 
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
        
        $tours = Tour::take('8')->get();
        return view('components.home-tour', [
            'tours' => $tours
        ]);
    }
}
