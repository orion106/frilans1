<?php

namespace App\Http\Controllers\admin\teg;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TegUpdateController extends Controller
{
    public function index($id): View
    {
        $teg = Teg::find($id);
        return view('admin.teg.teg-update',[
            'teg' => $teg
        ]);
    }
    public function store(Request $request)
    {
        $request -> validate([
            'teg_name' => ['required','string'],
        ]);
        $teg = Teg::where('id', $request->id)->update([
            'teg_name' => $request->teg_name,
        ]);
        return redirect()->route('teg-create');
    }

}
