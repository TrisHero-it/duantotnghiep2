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
        return view('admin.to-caos.index', compact('complaints'));
    }

    public function create()
    {
        $players = TaiKhoan::where('phan_quyen_id', 2)->get();

        return view('admin.to-caos.add', compact('players'));
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


    public function updateStatus(ToCao $complaint, Request $request)
    {
        $request->validate([
            'trang_thai' => 'required|in:Chờ xử lí,Đang xử lí,Thành công,Thất bại',
        ]);

        $complaint->update([
            'trang_thai' => $request->trang_thai,
        ]);

        $user = TaiKhoan::find($complaint->id_player);
        if ($user) {
            switch ($request->trang_thai) {
                case 'Thành công':
                    $user->update(['bi_cam' => 2]);
                    break;
                case 'Chờ xử lí':
                case 'Đang xử lí':
                case 'Thất bại':
                    $user->update(['bi_cam' => 1]);
                    break;
            }
        }

        return redirect()->back()->with('success', 'Complaint status updated successfully.');
    }


    public function destroy(ToCao $complaint)
    {
        $complaint->delete();

        return redirect()->back()->with('success', 'Complaint deleted successfully.');
    }
}
