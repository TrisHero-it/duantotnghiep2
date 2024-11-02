<?php

namespace App\Http\Controllers;

use App\Models\LichSuThuePlayer;
use App\Models\Player;
use App\Models\TheoDoiPlayer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with(['taiKhoan', 'taiKhoan.phanQuyen'])->get();
        return view('admin.players.index', compact('players'));
    }

    public function create()
    {
        return view('admin.players.create');
    }

    public function store(Request $request)
    {
    
        return redirect()->route('players.index');
    }

    public function show($id)
    {
        // Lấy thông tin player
        $player = Player::findOrFail($id);

        // Số lượng đơn thuê thành công của player
        $soDonThue = LichSuThuePlayer::where('player_id', $id)
            ->where('trang_thai_thue', 'success') // Kiểm tra trạng thái thuê
            ->count();

        // Tổng số giờ thuê (cũng cần kiểm tra trạng thái)
        $tongGioThue = LichSuThuePlayer::where('player_id', $id)
            ->where('trang_thai_thue', 'success') // Kiểm tra trạng thái thuê
            ->sum('gio_thue');

        // Tổng số người theo dõi (cũng cần kiểm tra trạng thái)
        $soNguoiTheoDoi = TheoDoiPlayer::where('player_id', $id)
        ->count('tai_khoan_id');

        // Thống kê số người thuê duy nhất
        // $soNguoiThue = LichSuThuePlayer::where('player_id', $id)
        //     ->where('trang_thai_thue', 'Success') // Kiểm tra trạng thái thuê
        //     ->distinct('tai_khoan_id') // Lấy những người thuê duy nhất
        //     ->count('tai_khoan_id'); // Đếm số lượng người thuê duy nhất

        // Tổng doanh thu từ việc thuê player
        // $tongDoanhThu = LichSuThuePlayer::where('player_id', $id)
        //     ->where('trang_thai_thue', 'Success') // Kiểm tra trạng thái thuê
        //     ->sum('gia_player');

        // Thống kê các đơn thuê trong tháng này (có kiểm tra trạng thái)
        // $startOfMonth = Carbon::now()->startOfMonth();
        // $soDonThueThangNay = LichSuThuePlayer::where('player_id', $id)
        //     ->where('trang_thai_thue', 'Success') // Kiểm tra trạng thái thuê
        //     ->whereBetween('created_at', [$startOfMonth, Carbon::now()])
        //     ->count();

        return view('admin.players.show', compact('player', 'soDonThue', 'tongGioThue', 'soNguoiTheoDoi'));
    }
}
