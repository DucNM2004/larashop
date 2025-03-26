@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Tình trạng</div>
    @if (session('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif
    @if (session('error'))
        <div class="alert alert-danger mb-3">
            {{ session('error') }}
        </div>
        @endif
    <div class="card-body table-responsive">
        <p><a href="{{ route('admin.tinhtrang.them') }}" class="btn btn-info"><i class="fa-light fa-plus"></i> Thêm mới</a></p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead class="text-center">
                <tr>
                    <th width="5%">#</th>
                    <th width="45%">Tình trạng </th>
                    <th width="15%">Mặc định</th>
                    <th width="5%">Sửa</th>
                    <th width="5%">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tinhtrang as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->tinhtrang }}</td>
                    <td class="text-center">
                        <input type="checkbox" class="toggle-default" data-id="{{ $value->id }}" {{ $value->is_default ? 'checked' : '' }}>
                    </td>
                    <td class="text-center"><a href="{{ route('admin.tinhtrang.sua', ['id' => $value->id]) }}"><i class="fa-light fa-edit"></i></a></td>
                    <td class="text-center"><a href="{{ route('admin.tinhtrang.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa tình trạng {{ $value->tinhtrang }} không?')"><i class="fa-light fa-trash-alt text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.toggle-default').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                let id = this.getAttribute('data-id');
                let isChecked = this.checked;

                fetch('{{ route('admin.tinhtrang.update-default') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ id: id, is_default: isChecked })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload(); // Cập nhật lại danh sách để đảm bảo chỉ có một mặc định
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
@endsection


