<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
//use Illuminate\Database\Eloquent\Model;

class HangSanXuat extends Model
{
    protected $table = 'hangsanxuat';
    protected $fillable = [
        'tenhang',
        'tenhang_slug',
        'hinhanh',
    ];
    public function SanPham(): HasMany
    {
        return $this->hasMany(SanPham::class, 'hangsanxuat_id', 'id');
    }
}
