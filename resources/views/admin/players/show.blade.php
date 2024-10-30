@extends('admin.layouts.app')

@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Chi tiết player</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form method="GET" enctype="multipart/form-data">
                            <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label" for="">Ảnh đại diện</label><br>
                                <img src="{{ Storage::url($player -> taiKhoan -> anh_dai_dien) }}" alt="Ảnh đại diện" width="100">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Ảnh</label>
                                <img src="{{ Storage::url($player -> anh) }}" alt="Ảnh" width="100">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Số tài khoản</label>
                                    <input type="number" class="form-control" value="{{ $player -> so_tai_khoan }}">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Giá tiền</label>
                                    <input type="number" class="form-control" value="{{ $player -> gia_tien }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Trạng thái</label>
                                <input type="text" class="form-control" value="{{ $player -> trang_thai_player }}">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="">Số người theo dõi</label>
                                    <input type="number" class="form-control" value="{{ $soNguoiTheoDoi  }}">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="">Số giờ được thuê</label>
                                <input type="number" class="form-control" value="{{ $tongGioThue }}">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="">Số lượng đơn thuê</label>
                                    <input type="number" class="form-control" value="{{ $soDonThue }}">
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form method="GET" enctype="multipart/form-data">
                            <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label" for="">Tên</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> ten }}">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Ngày sinh</label>
                                    <input type="datetime" class="form-control" value="{{ $player -> taiKhoan -> ngay_sinh }}">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="">Biệt danh</label>
                                    <input type="text" class="form-control" value="{{ $player -> taiKhoan -> biet_danh }}">
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label class="form-label" for="">Giới tính</label>
                                    <input type="text" class="form-control" value="{{ $player -> taiKhoan -> gioi_tinh }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Email</label>
                                <input type="email" class="form-control" value="{{ $player -> taiKhoan -> email }}">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Số điện thoại</label>
                                    <input type="text" class="form-control" value="{{ $player -> taiKhoan -> sdt }}">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Căn cước công dân</label>
                                    <input type="text" class="form-control" value="{{ $player -> taiKhoan -> cccd }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Số dư</label>
                                <input type="number" class="form-control" value="{{ $player -> taiKhoan -> so_du }}">
                            </div>
                            </fieldset>
                        </form>
                        
                    </div>
                </div>
                <div class="row">
                    <fieldset disabled>
                    <label class="form-label">Thông tin</label>
                    <textarea class="form-control" rows="8">
                        {{ $player -> thong_tin }}
                    </textarea>
                    </fieldset>
                </div>
                <a href="{{ route('admin.players.index') }}"><button type="" class="btn btn-primary mb-4 mt-3 text-center">Trở về</button></a>
            </div>
        </div>
    </div>
    <div class="col-xl-8"></div>
    <div class="col-xl-12"></div>
    <div class="col-xl-3 col-md-6"></div>
</div>

@endsection