<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use App\Models\TinhTrang;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    public function getDanhSach(Request $request)
    {
        $query = DonHang::query();

        if ($request->filled('dienthoai')) {
            $query->where('dienthoaigiaohang', 'like', '%' . $request->dienthoai . '%');
        }

        if ($request->filled('tinhtrang_id')) {
            $query->where('tinhtrang_id', $request->tinhtrang_id);
        }

        $donhang = $query->orderBy('created_at', 'desc')->get();
        $tinhtrangs = TinhTrang::all(); // Lấy danh sách tình trạng đơn hàng để hiển thị trong ô chọn

        return view('admin.donhang.danhsach', compact('donhang', 'tinhtrangs'));
    }

    public function getChiTiet($id)
    {
        $donhang = DonHang::findOrFail($id);
        return view('admin.donhang.chitiet', compact('donhang'));
    }

    public function getThem()
    {
        // Đặt hàng bên Front-end
    }

    public function postThem(Request $request)
    {
        // Xử lý đặt hàng bên Front-end
    }

    public function getSua($id)
    {
        $donhang = DonHang::find($id);
        $tinhtrang = TinhTrang::all();
        return view('admin.donhang.sua', compact('donhang', 'tinhtrang'));
    }

    public function postSua(Request $request, $id)
    {
        // Kiểm tra
        $request->validate([
            'tinhtrang_id' => ['required'],
            'dienthoaigiaohang' => ['required', 'string', 'max:20'],
            'diachigiaohang' => ['required', 'string', 'max:255'],
        ]);

        $orm = DonHang::find($id);
        $orm->tinhtrang_id = $request->tinhtrang_id;
        $orm->dienthoaigiaohang = $request->dienthoaigiaohang;
        $orm->diachigiaohang = $request->diachigiaohang;
        $orm->save();

        // Sau khi sửa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.donhang');
    }

    public function getXoa($id)
    {
        // Xóa đơn hàng chi tiết
        DonHang_ChiTiet::where('donhang_id', $id)->delete();

        $orm = DonHang::find($id);
        $orm->delete();

        // Sau khi xóa thành công thì tự động chuyển về trang danh sách
        return redirect()->route('admin.donhang');
    }
}
