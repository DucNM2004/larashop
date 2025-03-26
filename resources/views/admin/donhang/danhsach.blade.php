@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        Đơn hàng
        <form action="{{ route('admin.donhang') }}" method="GET" class="d-flex">
            <input type="text" name="dienthoai" class="form-control me-2" placeholder="Nhập số điện thoại..." value="{{ request('dienthoai') }}">
            <select name="tinhtrang_id" class="form-control me-2">
                <option value="">-- Tất cả trạng thái --</option>
                @foreach($tinhtrangs as $tinhtrang)
                    <option value="{{ $tinhtrang->id }}" {{ request('tinhtrang_id') == $tinhtrang->id ? 'selected' : '' }}>
                        {{ $tinhtrang->tinhtrang }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="15%">Khách hàng</th>
                    <th width="45%">Thông tin giao hàng</th>
                    <th width="15%">Ngày đặt</th>
                    <th width="10%">Tình trạng</th>
                    <th width="5%">Sửa</th>
                    <th width="5%">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donhang as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->Nguoidung->name }}</td>
                    <td>
                        <span class="d-block">Điện thoại: <strong>{{ $value->dienthoaigiaohang }}</strong></span>
                        <span class="d-block">Địa chỉ: <strong>{{ $value->diachigiaohang }}</strong></span>
                    </td>
                    <td>{{ $value->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $value->TinhTrang->tinhtrang }}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#orderDetailModal" onclick="loadOrderDetail({{ $value->id }})">
                            <i class="fa-light fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.donhang.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')">
                            <i class="fa-light fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal hiển thị chi tiết đơn hàng -->
<div class="modal fade" id="orderDetailModal" tabindex="-1" aria-labelledby="orderDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderDetailModalLabel">Chi tiết đơn hàng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="orderDetailContent">Đang tải...</div>
            </div>
        </div>
    </div>
</div>

<!-- AJAX để tải chi tiết đơn hàng -->
<script>
    function loadOrderDetail(orderId) {
        let url = "{{ route('admin.donhang.chitiet', ':id') }}".replace(':id', orderId);
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.getElementById('orderDetailContent').innerHTML = data;
            })
            .catch(error => console.error('Lỗi khi tải chi tiết đơn hàng:', error));
    }
</script>

@endsection
