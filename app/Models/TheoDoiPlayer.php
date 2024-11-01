<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheoDoiPlayer extends Model
{
    use HasFactory;

    public function taiKhoan()
    {
        return $this->hasOne(TaiKhoan::class, 'id');
    }

    public function player()
    {
        return $this->hasOne(Player::class, 'id');
    }
}
