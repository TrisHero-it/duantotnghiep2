<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use App\Models\Player;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    public function index()
    {
        $binhluans = BinhLuan::all();
        $taikhoan = TaiKhoan::all();
        $player = Player::all();

        return view('admin.binh-luans.index', compact('binhluans', 'taikhoan', 'player'));
    }
}
