<?php

namespace App\View\Components;

use App\Models\Program;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProgramSection extends Component
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
        $programs = Program::latest()->take(6)->get();
        return view('components.program-section', compact('programs'));
    }
}
