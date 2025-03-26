<?php

namespace App\Http\Controllers;

use App\Models\TinhTrang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TinhTrangController extends Controller
{
    public function getDanhSach()
    {
        $tinhtrang = TinhTrang::all();
        return view('admin.tinhtrang.danhsach', compact('tinhtrang'));
    }

    public function getThem()
    {
        return view('admin.tinhtrang.them');
    }

    public function postThem(Request $request)
    {
        $request->validate([
            'tinhtrang' => ['required', 'string', 'max:255', 'unique:tinhtrang'],
        ]);

        // Nếu chọn is_default, tìm bản ghi hiện tại có is_default = true và cập nhật thành false
        if ($request->has('is_default')) {
            TinhTrang::where('is_default', true)->update(['is_default' => false]);
        }

        $orm = new TinhTrang();
        $orm->tinhtrang = $request->tinhtrang;
        $orm->is_default = $request->has('is_default') ? true : false;
        $orm->save();

        return redirect()->route('admin.tinhtrang')->with('success', 'Thêm tình trạng thành công!');
    }

    public function updateDefault(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:tinhtrang,id',
            'is_default' => 'required|boolean'
        ]);

        TinhTrang::where('is_default', true)->update(['is_default' => false]);
        $tinhtrang = TinhTrang::find($request->id);
        $tinhtrang->is_default = $request->is_default;
        $tinhtrang->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công!']);
    }


    public function getSua($id)
    {
        $tinhtrang = TinhTrang::find($id);
        return view('admin.tinhtrang.sua', compact('tinhtrang'));
    }

    public function postSua(Request $request, $id)
    {
        // Kiểm tra
        $request->validate([
            'tinhtrang' => ['required', 'string', 'max:255', 'unique:tinhtrang,tinhtrang,' . $id],
        ]);
        $orm = TinhTrang::find($id);
        $orm->tinhtrang = $request->tinhtrang;
        $orm->save();

        return redirect()->route('admin.tinhtrang');
    }

    public function getXoa($id)
    {
        $orm = TinhTrang::find($id);
        $orm->delete();

        return redirect()->route('admin.tinhtrang')->with('success', 'Xoa tình trạng thành công!');
    }
}
