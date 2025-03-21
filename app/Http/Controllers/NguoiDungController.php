<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NguoiDungController extends Controller
{

    public function datHang(Request $request)
{
    $validated = $request->validate([
        'dienthoaigiaohang' => 'required|string|max:15',
        'diachigiaohang' => 'required|string|max:255',
        'thanhpho' => 'required|string|max:255',
        'quanhuyen' => 'required|string|max:255',
        'phuongxa' => 'required|string|max:255',
        'tenduong' => 'required|string|max:255',
        'sonha' => 'required|string|max:255',
        'ghichu' => 'nullable|string|max:500',
    ]);

    $order = new Order();
    $order->user_id = Auth::id();
    $order->dienthoaigiaohang = $request->dienthoaigiaohang;
    $order->diachigiaohang = $request->diachigiaohang;
    $order->thanhpho = $request->thanhpho;
    $order->quanhuyen = $request->quanhuyen;
    $order->phuongxa = $request->phuongxa;
    $order->tenduong = $request->tenduong;
    $order->sonha = $request->sonha;
    $order->ghichu = $request->ghichu;
    $order->tongtien = Cart::total();
    $order->save();

    Cart::destroy();
    return redirect()->route('frontend.hoanTat')->with('success', 'Đặt hàng thành công!');
}


    public function getDanhSach()
    {
        $nguoidung = NguoiDung::all();
        return view('admin.nguoidung.danhsach', compact('nguoidung'));
    }

    public function getThem()
    {
        return view('admin.nguoidung.them');
    }

    public function postThem(Request $request)
    {
        // Kiểm tra
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung'],
            'role' => ['required'],
            'password' => ['required', 'min:4', 'confirmed'],
        ]);

        $orm = new NguoiDung();
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->password = Hash::make($request->password);
        $orm->role = $request->role;
        $orm->save();

        // Sau khi thêm thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.nguoidung');
    }

    public function getSua($id)
    {
        $nguoidung = NguoiDung::find($id);
        return view('admin.nguoidung.sua', compact('nguoidung'));
    }

    public function postSua(Request $request, $id)
    {
        // Kiểm tra
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung,email,' . $id],
            'role' => ['required'],
            'password' => ['confirmed'],
        ]);

        $orm = NguoiDung::find($request->id);
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->role = $request->role;
        if (!empty($request->password)) $orm->password = Hash::make($request->password);
        $orm->save();

        // Sau khi sửa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.nguoidung');
    }

    public function getXoa($id)
    {
        $orm = NguoiDung::find($id);
        $orm->delete();

        // Sau khi xóa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.nguoidung');
    }
}
