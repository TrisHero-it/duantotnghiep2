<?php

namespace App\Http\Controllers;

use App\Models\PhanQuyen;
use Illuminate\Http\Request;

class PhanQuyenController extends Controller
{
    const path_upload = "public/uploads/phan_quyens";

    public function index(Request $request)
    {
        $phanquyens = PhanQuyen::all();
        return view('admin.phan-quyens.index', compact('phanquyens'));
    }

    function create(){
        return view("admin.phan-quyens.create");
}


}
