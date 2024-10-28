<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToCao;

class ToCaoController extends Controller
{
    //
    public function index()
    {
        $complaints = ToCao::with(['user', 'player'])->get();
        return view('admin.tocaos.index', compact('complaints'));
    }
}
