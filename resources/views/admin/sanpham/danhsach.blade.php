@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Sản phẩm</div>
    <div class="card-body table-responsive">
        <p>
            <a href="{{ route('admin.sanpham.them') }}" class="btn btn-info"><i class="fa-light fa-plus"></i> Thêm mới</a>
            <a href="#nhap" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fa-light fa-upload"></i> Nhập từ Excel</a>
            <a href="{{ route('admin.sanpham.xuat') }}" class="btn btn-success"><i class="fa-light fa-download"></i> Xuất ra Excel</a>
        </p>
        {{$sanpham->links()}}
        <table class="table table-bordered table-hover table-sm mb-3">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="10%">Hình ảnh</th>
                    <th width="15%">Loại sản phẩm</th>
                    <th width="10%">HSX</th>
                    <th width="35%">Tên sản phẩm</th>
                    <th width="5%">SL</th>
                    <th width="10%">Đơn giá</th>
                    <th width="5%">Sửa</th>
                    <th width="5%">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sanpham as $value)
                <tr>
                    <!-- đếm stt phân trang https://laravel.com/docs/11.x/pagination#adjusting-the-pagination-link-window index start =0-->
                    <td>{{ $loop->index + $sanpham->firstItem()}}</td>
                    <td class="text-center"><img src="{{ asset('storage/app/private/'. $value->hinhanh) }}" width="80" class="img-thumbnail" /></td>
                    <td>{{ $value->LoaiSanPham->tenloai }}</td>
                    <td>{{ $value->HangSanXuat->tenhang }}</td>
                    <td>{{ $value->tensanpham }}</td>
                    <td class="text-end">{{ $value->soluong }}</td>
                    <td class="text-end">{{ number_format($value->dongia) }}</td>
                    <td class="text-center"><a href="{{ route('admin.sanpham.sua', ['id' => $value->id]) }}"><i class="fa-light fa-edit"></i></a></td>
                    <td class="text-center"><a href="{{ route('admin.sanpham.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa sản phẩm {{ $value->tensanpham }} không?')"><i class="fa-light fa-trash-alt text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$sanpham->links()}}
    </div>
</div>
<form action="{{ route('admin.sanpham.nhap') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Nhập từ Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-0">
                        <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                        <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-light fa-times"></i> Hủy bỏ</button>
                    <button type="submit" class="btn btn-danger"><i class="fa-light fa-upload"></i> Nhập dữ liệu</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection