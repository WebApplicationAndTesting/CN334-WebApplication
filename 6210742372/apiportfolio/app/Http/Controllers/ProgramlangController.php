<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programlang;

class ProgramlangController extends Controller
{
    public function index() {
        $programlang = Programlang::all();
        return response()->json([
            'status'=> 200,
            'programlang'=>$programlang
        ]);
    }

    public function store(Request $request) {
        $programlang = new Programlang;
        $programlang->lang = $request->input('data');
        $programlang->save();

        return response()->json([
            'status'=>200,
            'message'=>'Success'
        ]);
    }
}
