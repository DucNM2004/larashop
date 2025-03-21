<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
//se Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = 'loaisanpham';
    protected $fillable = ['tenloai', 'slug']; // Các cột được phép thêm/sửa
   
    public function SanPham(): HasMany
    {
        return $this->hasMany(SanPham::class, 'loaisanpham_id', 'id');
    }
}
