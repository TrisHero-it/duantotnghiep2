<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Sử dụng lớp Authenticatable
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaiKhoan extends Authenticatable // Kế thừa từ Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable; // Thêm Notifiable để sử dụng thông báo
=======
    use HasFactory;
>>>>>>> 4f163ff99cc6fe1973914636ef419a1fb4ff2e47

    protected $table = 'tai_khoans';

    protected $fillable = [
        'ten',
        'ngay_sinh',
        'biet_danh',
        'gioi_tinh',
        'email',
        'sdt',
        'cccd',
        'mat_khau',
        'so_du',
        'anh_dai_dien',
        'bi_cam',
        'phan_quyen_id',
    ];
<<<<<<< HEAD

    protected $hidden = [
        'mat_khau', // Ẩn mật khẩu trong kết quả truy vấn
    ];

=======
>>>>>>> 4f163ff99cc6fe1973914636ef419a1fb4ff2e47
    public function player()
    {
        return $this->hasOne(Player::class, 'tai_khoan_id');
    }

    public function phanQuyen()
    {
        return $this->belongsTo(PhanQuyen::class, 'phan_quyen_id');
    }
<<<<<<< HEAD
=======

    public function lichSuThue()
    {
        return $this->hasMany(LichSuThuePlayer::class, 'tai_khoan_id');
    }

    public function theoDoiPlayer()
    {
        return $this->hasOne(TheoDoiPlayer::class, 'tai_khoan_id');
    }
>>>>>>> 4f163ff99cc6fe1973914636ef419a1fb4ff2e47
}
