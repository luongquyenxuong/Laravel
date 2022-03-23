<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, SoftDeletes;

    protected $guarded = [];

    public function binhluan()
    {
        return $this->hasMany(BinhLuan::class);
    }
    public function hoadon()
    {
        return $this->hasMany(ChiTietHoaDon::class);
    }
    public function diachi()
    {
        return $this->hasMany(DiaChi::class);
    }
}
