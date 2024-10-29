@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Thêm tài khoản</h1>
    <form action="{{ route('admin.taikhoans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="ten" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ngay_sinh">Ngày sinh</label>
            <input type="date" name="ngay_sinh" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="biet_danh">Biệt danh</label>
            <input type="text" name="biet_danh" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gioi_tinh">Giới tính</label>
            <select name="gioi_tinh" class="form-control">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sdt">Số điện thoại</label>
            <input type="number" name="sdt" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cccd">Căn cước công dân</label>
            <input type="number" name="cccd" class="form-control" style="width: 100px;" required>
            <img id="cccd-preview" src="#" alt="CCCD Preview" style="display:none; margin-top:10px; width:100px; height:auto;">
        </div>
        <div class="form-group">
            <label for="mat_khau">Password</label>
            <input type="password" name="mat_khau" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="so_du">Số dư</label>
            <input type="number" name="so_du" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="anh_dai_dien">Ảnh đại diện</label>
            <input type="file" name="anh_dai_dien" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="bi_cam">Bị cấm</label>
            <select name="bi_cam" class="form-control">
                <option value="1">Có</option>
                <option value="2">Không</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Thêm tài khoản</button>
    </form>
</div>
@endsection