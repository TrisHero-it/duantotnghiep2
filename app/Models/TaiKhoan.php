<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Sử dụng lớp Authenticatable
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaiKhoan extends Authenticatable // Kế thừa từ Authenticatable
{
    use HasFactory, Notifiable; // Thêm Notifiable để sử dụng thông báo

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

    protected $hidden = [
        'mat_khau', // Ẩn mật khẩu trong kết quả truy vấn
    ];

    public function player()
    {
        return $this->hasOne(Player::class, 'tai_khoan_id');
    }

    public function phanQuyen()
    {
        return $this->belongsTo(PhanQuyen::class, 'phan_quyen_id');
    }
}
