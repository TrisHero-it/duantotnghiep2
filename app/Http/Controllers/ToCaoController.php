<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToCao;
use App\Models\TaiKhoan;

class ToCaoController extends Controller
{
    //
    public function index()
    {
        $complaints = ToCao::with(['user', 'player'])->get();
        return view('admin.tocaos.index', compact('complaints'));
    }

    public function create()
    {
        $players = TaiKhoan::where('phan_quyen_id', 2)->get();

        return view('admin.tocaos.add', compact('players'));
    }
}
