@extends('admin.layouts.app')
<title>@yield('title' , 'Đây là thêm mới')</title>
@section('content')
<div class="container">
    <h1>Thêm tài khoản</h1>
    <form action="{{ route('admin.phanquyen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="ten" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="trang_thai">Trạng thái</label>
            <input type="text" name="trang_thai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Thêm tài khoản</button>
    </form>
</div>
@endsection