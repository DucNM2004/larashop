@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Thêm don hang </div>
    <div class="card-body">
        <form action="{{ route('admin.donhang.them') }}" method="post">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="donhang">Don hang</label>
                <input type="text" class="form-control @error('donhang') is-invalid @enderror" id="donhang" name="donhang" value="{{ old('donhang') }}" required />
                @error('donhang')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Thêm vào CSDL</button>
        </form>
    </div>
</div>
@endsection