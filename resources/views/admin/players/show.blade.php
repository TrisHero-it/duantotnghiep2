@extends('admin.layouts.app')
@section('header')
<link rel="stylesheet" href="{{asset('assets/plugins/ratting/css/bars-1to10.css')}}">

@endsection
@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Chi tiết player</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="widget-profile-card-1">
                                <img class="img-fluid" src="{{ asset('assets/images/widget/slider7.jpg') }}"
                                    alt="card-style-1">
                                <div class="middle-user">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{ Storage::url($player -> taiKhoan -> anh_dai_dien) }}" alt="Profile-user">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h3>{{ $player -> taiKhoan -> ten }}</h3>
                                <p>{{ $player -> taiKhoan -> biet_danh }}</p>
                                <p>{{ $player -> trang_thai_player }}</p>
                            </div>
                            <div class="card-footer bg-inverse">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4>400</h4>
                                        <span>Quê Quán</span>
                                    </div>
                                    <div class="col">
                                        <h4>90</h4>
                                        <span>Tuổi</span>
                                    </div>
                                    <div class="col">
                                        <h4>{{ $player -> taiKhoan -> gioi_tinh }}</h4>
                                        <span>Giới tính</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form method="GET" enctype="multipart/form-data">
                            <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label" for="">Ảnh</label>
                                <img src="{{ Storage::url($player -> anh) }}" alt="Ảnh" width="100">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Email</label>
                                <input type="email" class="form-control" value="{{ $player -> taiKhoan -> email }}">
                            </div>
                            <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="">Số dư</label>
                                <input type="number" class="form-control" value="{{ $player -> taiKhoan -> so_du }}">
                            </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Giá tiền</label>
                                    <input type="number" class="form-control" value="{{ $player -> gia_tien }}">
                                </div>
                            <div class="row">
                                <div class="mb-3 col-md-5">
                                    <label class="form-label" for="">Ngày sinh</label>
                                    <input type="datetime" class="form-control" value="{{ $player -> taiKhoan -> ngay_sinh }}">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label class="form-label" for="">Số điện thoại</label>
                                    <input type="text" class="form-control" value="{{ $player -> taiKhoan -> sdt }}">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Căn cước công dân</label>
                                    <input type="text" class="form-control" value="{{ $player -> taiKhoan -> cccd }}">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="">Số tài khoản</label>
                                    <input type="number" class="form-control" value="{{ $player -> so_tai_khoan }}">
                                </div>
                            </div>
                            
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
                <div class="row mt-3">
                    <div class="col-xl-3 col-md-6">
                        <div class="card prod-p-card bg-c-red">
                            <div class="card-body">
                                <div class="row align-items-center m-b-25">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Tổng tiền kiếm được</h6>
                                        <h3 class="m-b-0 text-white">$1,783</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span
                                        class="label label-danger m-r-10">+11%</span>From Previous Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card prod-p-card bg-c-blue">
                            <div class="card-body">
                                <div class="row align-items-center m-b-25">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Số lượng đơn thuê</h6>
                                        <h3 class="m-b-0 text-white">{{ $soDonThue }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-shopping-cart text-c-blue f-18 analytic-icon"></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span
                                        class="label label-primary m-r-10">+12%</span>From Previous Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card prod-p-card bg-c-green">
                            <div class="card-body">
                                <div class="row align-items-center m-b-25">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Số giờ được thuê</h6>
                                        <h3 class="m-b-0 text-white">{{ $tongGioThue }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clock text-c-green f-18"></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span
                                        class="label label-success m-r-10">+52%</span>From Previous Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card prod-p-card bg-c-yellow">
                            <div class="card-body">
                                <div class="row align-items-center m-b-25">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Số người theo dõi</h6>
                                        <h3 class="m-b-0 text-white">{{ $soNguoiTheoDoi  }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user text-c-yellow f-18"></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span
                                        class="label label-warning m-r-10">+52%</span>From Previous Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <h6>Page view by device</h6>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown float-end">
                                                    <a class="dropdown-toggle text-c-blue" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Last 30 days</a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">1 week</a>
                                                        <a class="dropdown-item" href="#">2 year</a>
                                                        <a class="dropdown-item" href="#">3 month</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-r-0">
                                                <h6 class="my-3"><i class="feather icon-monitor f-20 me-2"
                                                        style="color:#dc67ce"></i><span
                                                        class="text-c-green ms-2 f-14"><i
                                                            class="feather icon-arrow-up"></i>2%</span></h6>
                                                <h6 class="my-3"><i class="feather icon-tablet f-20 me-2"
                                                        style="color:#8067dc"></i>29.7%<span
                                                        class="text-c-red ms-2 f-14"><i
                                                            class="feather icon-arrow-down"></i>3%</span></h6>
                                                <h6 class="my-3"><i class="feather icon-smartphone f-20 me-2"
                                                        style="color:#67b7dc"></i>Doanh thu trung bình<span
                                                        class="text-c-green ms-2 f-14"><i
                                                            class="feather icon-arrow-up"></i>8%</span></h6>
                                            </div>
                                            <div class="col-6">
                                                <div id="chart-percent" class="chart-percent" style="height:135px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <a href="{{ route('admin.players.index') }}"><button type="" class="btn btn-primary mb-4 mt-3 text-center">Trở về</button></a>
            </div>
        </div>
    </div>
    
</div>

@endsection

@section('test')

<!-- am chart js -->
<script src="{{asset('assets/plugins/chart-am4/js/core.js')}}"></script>
<script src="{{asset('assets/plugins/chart-am4/js/charts.js')}}"></script>
<script src="{{asset('assets/plugins/chart-am4/js/animated.js')}}"></script>
<script src="{{asset('assets/plugins/chart-am4/js/maps.js')}}"></script>
<script src="{{asset('assets/plugins/chart-am4/js/worldLow.js')}}"></script>
<script src="{{asset('assets/plugins/chart-am4/js/continentsLow.js')}}"></script>

<!-- Float Chart js -->
<script src="{{asset('assets/plugins/flot/js/jquery.flot.js')}}"></script>
<script src="{{asset('assets/plugins/flot/js/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/plugins/flot/js/curvedLines.js')}}"></script>
<script src="{{asset('assets/plugins/flot/js/jquery.flot.tooltip.min.js')}}"></script>

<!-- peity chart js -->
<script src="{{asset('assets/plugins/chart-peity/js/jquery.peity.min.js')}}"></script>

<!-- Rating Js -->
<script src="{{asset('assets/plugins/ratting/js/jquery.barrating.min.js')}}"></script>

<!-- custom-chart js -->
<script src="{{asset('assets/js/pages/chart.js')}}"></script>
@endsection