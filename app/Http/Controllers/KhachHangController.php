<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use App\Models\SanPham;
use App\Models\TinhTrang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{
    public function getHome()
    {
        if (Auth::check()) {
            $nguoidung = NguoiDung::find(Auth::user()->id);
            return view('user.home', compact('nguoidung'));
        } else
            return redirect()->route('user.dangnhap');
    }
    public function getDatHang()
    {
        if (Auth::check())
            return view('user.dathang');
        else
            return redirect()->route('user.dangnhap');
    }
    public function postDatHang(Request $request)
{
    if (Cart::count() == 0) {
        return back()->withErrors(['message' => 'Giỏ hàng của bạn đang trống!']);
    }

    $request->validate([
        'diachigiaohang' => ['required', 'string', 'max:255'],
        'dienthoaigiaohang' => ['required', 'string', 'max:255'],
    ]);

    DB::beginTransaction();

    try {
        // Lấy tình trạng mặc định
        $tinhTrangMacDinh = TinhTrang::where('is_default', true)->first();

        if (!$tinhTrangMacDinh) {
            return back()->withErrors(['message' => 'Không tìm thấy tình trạng mặc định!']);
        }

        // Tạo đơn hàng mới
        $dh = new DonHang();
        $dh->nguoidung_id = Auth::id();
        $dh->tinhtrang_id = $tinhTrangMacDinh->id; // Gán tình trạng mặc định
        $dh->diachigiaohang = $request->diachigiaohang;
        $dh->dienthoaigiaohang = $request->dienthoaigiaohang;
        $dh->save();

        foreach (Cart::content() as $value) {
            $sanpham = SanPham::find($value->id);
            if (!$sanpham || $sanpham->soluong < $value->qty) {
                DB::rollBack();
                return back()->withErrors(['message' => "Sản phẩm {$sanpham->tensanpham} không đủ số lượng tồn kho!"]);
            }

            DonHang_ChiTiet::create([
                'donhang_id' => $dh->id,
                'sanpham_id' => $sanpham->id,
                'soluongban' => $value->qty,
                'dongiaban' => $value->price,
            ]);

            $sanpham->decrement('soluong', $value->qty);
        }

        Cart::destroy();
        DB::commit();

        return redirect()->route('user.dathangthanhcong')->with('success', 'Đặt hàng thành công!');
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->withErrors(['message' => 'Đã xảy ra lỗi khi đặt hàng, vui lòng thử lại!']);
    }
}


    // public function postDatHang(Request $request)
    // {
    //     // Kiểm tra
    //     $this->validate($request, [
    //         'diachigiaohang' => ['required', 'string', 'max:255'],
    //         'dienthoaigiaohang' => ['required', 'string', 'max:255'],
    //     ]);

    //     // Lưu vào đơn hàng
    //     $dh = new DonHang();
    //     $dh->nguoidung_id = Auth::user()->id;
    //     $dh->tinhtrang_id = 1; // Đơn hàng mới
    //     $dh->diachigiaohang = $request->diachigiaohang;
    //     $dh->dienthoaigiaohang = $request->dienthoaigiaohang;
    //     $dh->save();

    //     // Lưu vào đơn hàng chi tiết
    //     foreach (Cart::content() as $value) {
    //         $ct = new DonHang_ChiTiet();
    //         $ct->donhang_id = $dh->id;
    //         $ct->sanpham_id = $value->id;
    //         $ct->soluongban = $value->qty;
    //         $ct->dongiaban = $value->price;
    //         $ct->save();
    //     }

    //     return redirect()->route('user.dathangthanhcong');
    // }

    public function getDatHangThanhCong()
    {
        // Xóa giỏ hàng khi hoàn tất đặt hàng?
        Cart::destroy();

        return view('user.dathangthanhcong');
    }

    public function getDonHang($id = '')
    {
        // Bổ sung code tại đây
        return view('user.donhang');
    }

    public function postDonHang(Request $request, $id)
    {
        // Bổ sung code tại đây
    }

    public function getHoSoCaNhan()
    {
        return redirect()->route('user.home');
    }

    public function postHoSoCaNhan(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung,email,' . $id],
            'password' => ['confirmed'],
        ]);

        $orm = NguoiDung::find($id);
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        if (!empty($request->password)) $orm->password = Hash::make($request->password);
        $orm->save();

        return redirect()->route('user.home')->with('success', 'Đã cập nhật thông tin thành công.');
    }

    public function postDangXuat(Request $request)
    {
        // Bổ sung code tại đây
        return redirect()->route('frontend.home');
    }
}
