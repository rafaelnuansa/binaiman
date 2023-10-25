<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('web.programs.index', compact('programs'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)->first();
        if(!$program){
            return redirect()->back();
        }
        $programs = Program::latest()->get();
        return view('web.programs.show', compact('program', 'programs'));
    }
}
