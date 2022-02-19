<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tools;

class ToolController extends Controller
{
    public function index() {
        $tools = Tools::all();
        return response()->json([
            'status'=> 200,
            'tools'=>$tools
        ]);
    }
}
