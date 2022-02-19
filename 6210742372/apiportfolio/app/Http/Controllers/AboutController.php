<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutme;

class AboutController extends Controller
{
    public function index() {
        $aboutme = Aboutme::all();
        return response()->json([
            'status'=> 200,
            'aboutme'=>$aboutme
        ]);
    }

    public function update(Request $request) {
        $aboutme = Aboutme::find(1);
        $aboutme->desc = $request->input('data');
        $aboutme->update();

        return response()->json([
            'status'=>200,
            'message'=>'Success'
        ]);
    }
}
