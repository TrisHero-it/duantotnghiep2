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


    public function store(Request $request)
    {
        $request->validate([
            'id_player' => 'required|exists:tai_khoans,id',
            'noi_dung_to_cao' => 'required|string|max:5000',
        ]);

        $fakeUserId = 1;

        ToCao::create([
            'id_nguoi_dung' => $fakeUserId,
            'id_player' => $request->id_player,
            'noi_dung_to_cao' => $request->noi_dung_to_cao,
            'trang_thai' => 'Chờ xử lí',
        ]);

        return redirect()->route('tocao.index')->with('success', 'Complaint filed successfully.');
    }
}
