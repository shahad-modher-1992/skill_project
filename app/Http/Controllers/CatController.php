<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    //

    //  public function index() {
    //     $cats = Cat::get();
    //     return view('web.index', compact('cats'));
    //  }

   

    public function show($id) {
        $cat = Cat::findOrFail($id);
        $all =Cat::get();
        $skill = $cat->skills;
        return view('web.cat', compact('cat','all', 'skill'));
    }
}
