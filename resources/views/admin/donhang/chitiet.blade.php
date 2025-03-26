<table class="table table-bordered table-sm">
    <tr>
        <th>Khách hàng:</th>
        <td>{{ $donhang->Nguoidung->name }}</td>
    </tr>
    <tr>
        <th>Điện thoại:</th>
        <td>{{ $donhang->dienthoaigiaohang }}</td>
    </tr>
    <tr>
        <th>Địa chỉ giao hàng:</th>
        <td>{{ $donhang->diachigiaohang }}</td>
    </tr>
    <tr>
        <th>Ngày đặt hàng:</th>
        <td>{{ $donhang->created_at->format('d/m/Y H:i:s') }}</td>
    </tr>
    <tr>
        <th>Tình trạng:</th>
        <td>{{ $donhang->TinhTrang->tinhtrang }}</td>
    </tr>
</table>

<h5 class="mt-3">Sản phẩm trong đơn hàng</h5>
<table class="table table-bordered table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>Sản phẩm</th>
            <th>SL</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        @php $tongtien = 0; @endphp
        @foreach($donhang->DonHang_ChiTiet as $chitiet)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $chitiet->SanPham->tensanpham }}</td>
            <td>{{ $chitiet->soluongban }}</td>
            <td class="text-end">{{ number_format($chitiet->dongiaban) }}<sup><u>đ</u></sup></td>
            <td class="text-end">{{ number_format($chitiet->soluongban * $chitiet->dongiaban) }}<sup><u>đ</u></sup></td>
        </tr>
        @php $tongtien += $chitiet->soluongban * $chitiet->dongiaban; @endphp
        @endforeach
        <tr>
            <td colspan="4" class="text-end"><strong>Tổng tiền:</strong></td>
            <td class="text-end"><strong>{{ number_format($tongtien) }}<sup><u>đ</u></sup></strong></td>
        </tr>
    </tbody>
</table>
