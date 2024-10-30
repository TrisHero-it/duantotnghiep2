<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DangTin extends Model
{
    use HasFactory;

    protected $fillable = [
        "tai_khoan_id",
        "video",
        "noi_dung",
        "trang_thai"
    ];

    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class);
    }

    public function getTrangThaiAttribute()
    {
        $createdTime = $this->created_at;
        $currentTime = Carbon::now();

        return ($currentTime->diffInHours($createdTime) >= 24) ? false : true;
    }
}
