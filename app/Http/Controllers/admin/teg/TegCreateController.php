<?php

namespace App\Http\Controllers\admin\teg;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TegCreateController extends Controller
{
    public function index(): View
    {
        $teg = Teg::all();
        return view('admin.teg.teg-create',[
            'teg' => $teg
        ]);
    }

    public function store(Request $request)
    {
        $request -> validate([
            'teg_name' => ['required','string'],
        ]);
        $teg = Teg::create([
            'teg_name' => $request ->teg_name
        ]);
        return redirect()->route('teg-create');
    }
}
