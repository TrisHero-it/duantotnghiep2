@extends('admin.layouts.app')
<title>@yield('title' , 'Đây là trang chi tiết')</title>
@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('admin.taikhoans.index') }}" class="btn btn-secondary mb-3">Quay lại danh sách</a>

        <div class="card">
            <div class="card-header">
                <h5>Chi tiết tài khoản: {{ $taikhoan->ten }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id">ID:</label>
                            <input type="text" class="form-control" value="{{ $taikhoan->id }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="ten">Tên:</label>
                            <input type="text" class="form-control" value="{{ $taikhoan->ten }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="ngay_sinh">Ngày sinh:</label>
                            <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($taikhoan->ngay_sinh)->format('d/m/Y') }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="biet_danh">Biệt danh:</label>
                            <input type="text" class="form-control" value="{{ $taikhoan->biet_danh }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="gioi_tinh">Giới tính:</label>
                            <input type="text" class="form-control" value="{{ $taikhoan->gioi_tinh }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" value="{{ $taikhoan->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="sdt">Số điện thoại:</label>
                            <input type="text" class="form-control" value="{{ $taikhoan->sdt }}" readonly>
                        </div>
                        <div class="col-md-6">
                        
                    </div>
                        <div class="form-group">
                            <label for="mat_khau">Mật khẩu:</label>
                            <div class="input-group">
                                <input type="password" id="mat_khau" class="form-control" value="{{ $taikhoan->mat_khau }}" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;" onclick="togglePassword()" ></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="so_du">Số dư:</label>
                            <input type="text" class="form-control" value="{{ number_format($taikhoan->so_du, 0, ',', '.') }} VND" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phan_quyen_id">Vai trò</label>
                            <input type="text" class="form-control" value="{{ $taikhoan->phanquyens ? 'Admin' : 'Người dùng' }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="created_at">Ngày tạo:</label>
                            <input type="text" class="form-control" value="{{ $taikhoan->created_at->format('Y-m-d') }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="anh_dai_dien">Ảnh đại diện:</label>
                            <div>
                                <img src="{{ Storage::url($taikhoan->anh_dai_dien) }}" alt="Ảnh đại diện" style="width: 200px; border-radius: 10px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anh_dai_dien">CCCD (Ảnh)</label>
                            <div>
                                <img src="{{ Storage::url($taikhoan->cccd) }}" alt="Ảnh căn cước" style="width: 200px; border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('admin.taikhoans.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("mat_khau");
        var toggleIcon = document.getElementById("togglePassword");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }
</script>

@endsection
