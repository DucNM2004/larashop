@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Thêm Tình trạng </div>
    <div class="card-body">
        <form action="{{ route('admin.tinhtrang.luutru') }}" method="post">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="tinhtrang">Tình trạng</label>
                <input type="text" class="form-control @error('tinhtrang') is-invalid @enderror" id="tinhtrang" name="tinhtrang" value="{{ old('tinhtrang') }}" required />
                @error('tinhtrang')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_default" name="is_default" value="1" {{ old('is_default') ? 'checked' : '' }}>
                <label class="form-check-label" for="is_default">Đặt làm mặc định</label>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Thêm vào CSDL</button>
            <a href="{{route('admin.tinhtrang')}}"><button type="button" class="btn btn-warning">Quay lại</button></a>
        </form>
    </div>
</div>
@endsection
