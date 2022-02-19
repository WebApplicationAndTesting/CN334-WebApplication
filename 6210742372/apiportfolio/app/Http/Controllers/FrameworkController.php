<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Framework;

class FrameworkController extends Controller
{
    public function index() {
        $framework = Framework::all();
        return response()->json([
            'status'=> 200,
            'framework'=>$framework
        ]);
    }

    public function store(Request $request) {
        $framework = new Framework;
        $framework->framework = $request->input('data');
        $framework->save();

        return response()->json([
            'status'=>200,
            'message'=>'Success'
        ]);
    }
}
