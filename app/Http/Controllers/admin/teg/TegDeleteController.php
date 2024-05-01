<?php

namespace App\Http\Controllers\admin\teg;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;

class TegDeleteController extends Controller
{
    public function index($id){
        $tegDelete = Teg::destroy($id);
        return redirect()->route('teg-create');
    }
}
