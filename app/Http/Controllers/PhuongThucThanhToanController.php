<?php

namespace App\Http\Controllers;

use App\Models\PhuongThucThanhToan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhuongThucThanhToanController extends Controller
{
    const PATH_UPLOAD = "public/logo";
    public function index()
    {
        $phuongthucthanhtoans = PhuongThucThanhToan::all();
        return view("admin.phuong-thuc-thanh-toans.index", compact('phuongthucthanhtoans'));
    }

    public function create()
    {
        return view('admin.phuong-thuc-thanh-toans.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('logo');

        if($request->hasFile('logo')){
            $data['logo'] = Storage::put(self::PATH_UPLOAD,$request->file('logo'));
        }
        PhuongThucThanhToan::create($data);

        return redirect()->route('admin.phuongthucthanhtoans.index');
    }

    public function destroy($id)
    {
        $phuongthucthanhtoan = PhuongThucThanhToan::findOrFail($id);
        $phuongthucthanhtoan->delete();
        return redirect()->route('admin.phuongthucthanhtoans.index');
    }
}
