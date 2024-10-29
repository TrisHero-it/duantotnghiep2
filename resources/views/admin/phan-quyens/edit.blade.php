@extends('admin.layouts.app')
<title>@yield('title' , 'Đây là chỉnh sửa')</title>
@section('content')
<div class="container">
    <h1>Sửa tài khoản</h1>
    <form action="{{ route('admin.phanquyen.update' , $phanquyens->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="ten" class="form-control" value="{{$phanquyens->ten}}" required>
        </div>
        <div class="form-group">
            <label for="name">Trạng thái</label>
            <input type="text" name="ngay_sinh" class="form-control" value="{{$phanquyens->trang_thai}}" required>
        </div>
      
       
        <button type="submit" class="btn btn-success">Sửa tài khoản</button>
    </form>
</div>
@endsection