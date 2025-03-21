<?php

namespace App\Http\Controllers;

use App\Models\DonHang_ChiTiet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DonHang_ChiTietController extends Controller
{
    public function getDanhSach()
    {
        $donhang_chitiet = DonHang_ChiTiet::all();
        return view('user.donhang_chitiet.danhsach', compact('donhang_chitiet'));
    }

    public function getThem()
    {
        return view('user.donhang_chitiet.them');
    }

    public function postThem(Request $request)
    {
        $orm = new DonHang_ChiTiet();
        $orm->tenloai = $request->tenloai;
        $orm->tenloai_slug = Str::slug($request->tenloai, '-');
        $orm->save();

        return redirect()->route('user.donhang_chitiet');
    }

    public function getSua($id)
    {
        $donhang_chitiet = DonHang_ChiTiet::find($id);
        return view('user.donhang_chitiet.sua', compact('donhang_chitiet'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = DonHang_ChiTiet::find($id);
        $orm->tenloai = $request->tenloai;
        $orm->tenloai_slug = Str::slug($request->tenloai, '-');
        $orm->save();

        return redirect()->route('user.donhang_chitiet');
    }

    public function getXoa($id)
    {
        $orm = DonHang_ChiTiet::find($id);
        $orm->delete();

        return redirect()->route('user.donhang_chitiet');
    }
}
