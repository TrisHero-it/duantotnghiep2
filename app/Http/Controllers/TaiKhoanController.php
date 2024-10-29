<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    public function index(Request $request)
    {
        $taikhoans = TaiKhoan::all();
        return view('admin.taikhoans.index', compact('taikhoans'));
    }
    public function create()
    {

        return view("admin.taikhoans.create");
    }
}
