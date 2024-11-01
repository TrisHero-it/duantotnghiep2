<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function danhGias()
    {
        return $this->hasMany(DanhGia::class);
=======
    public $fillable = [
        "anh",
        "thong_tin",
        "so_gio_duoc_thue",
        "so_nguoi_theo_doi",
        "gia_tien",
        "trang_thai_player",
        "tai_khoan_id",
        "so_tai_khoan",
        "so_lan_duoc_thue",
    ];

    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'tai_khoan_id');
    }

    public function lichSuThue()
    {
        return $this->hasMany(LichSuThuePlayer::class, 'player_id');
    }

    public function theoDoiPlayer()
    {
        return $this->hasOne(TheoDoiPlayer::class, 'player_id');
>>>>>>> f5cce01946cc9845bd8f82804407435e36440fef
    }
}
