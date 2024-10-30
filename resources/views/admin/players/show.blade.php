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
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Store Visitors</h5>
                    </div>
                    <div class="col-auto text-end">
                        <span>This Month</span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-auto">
                        <h4 class="m-0">563,756<i
                                class="feather icon-arrow-up text-c-green"></i></h4>
                        <span>Visits per Day</span>
                    </div>
                    <div class="col-auto">
                        <h4 class="m-0">78,569<i class="feather icon-arrow-down text-c-red"></i>
                        </h4>
                        <span>Total Visitors</span>
                    </div>
                    <div class="col">
                        <h4 class="m-0">40.05%<i class="feather icon-arrow-up text-c-green"></i>
                        </h4>
                        <span>Bounce Rate</span>
                    </div>
                </div>
                <div id="site-visitor-chart" style="height:250px;width:100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Advertising campaign monitor</h5>
            </div>
            <div class="card-body px-0 py-0">
                <div id="traffic-chart" style="height:400px;"></div>
                <div class="table-responsive">
                    <div class="session-scroll" style="height:380px;position:relative;">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th><span>Campaign date</span></th>
                                    <th><span>Click <a class="help" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                    <th><span>Cost <a class="help" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                    <th><span>CTR <a class="help" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                    <th><span>ARPU <a class="help" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                    <th><span>ECPI <a class="help" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                    <th><span>ROI <a class="help" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                    <th><span>Revenue <a class="help" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                    <th><span>Conversions <a class="help"
                                                data-bs-toggle="popover" title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"><i
                                                    class="feather icon-help-circle f-16"></i></a></span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total and average</td>
                                    <td>1300</td>
                                    <td>1025</td>
                                    <td>14005</td>
                                    <td>95,3%</td>
                                    <td>29,7%</td>
                                    <td>3,25</td>
                                    <td>2:30</td>
                                    <td>45.5%</td>
                                </tr>
                                <tr>
                                    <td>8-11-2016</td>
                                    <td>786</td>
                                    <td>485</td>
                                    <td>769</td>
                                    <td>45,3%</td>
                                    <td>6,7%</td>
                                    <td>8,56</td>
                                    <td>10:55</td>
                                    <td>33.8%</td>
                                </tr>
                                <tr>
                                    <td>15-10-2016</td>
                                    <td>786</td>
                                    <td>523</td>
                                    <td>736</td>
                                    <td>78,3%</td>
                                    <td>6,6%</td>
                                    <td>7,56</td>
                                    <td>4:30</td>
                                    <td>76.8%</td>
                                </tr>
                                <tr>
                                    <td>8-8-2017</td>
                                    <td>624</td>
                                    <td>436</td>
                                    <td>756</td>
                                    <td>78,3%</td>
                                    <td>6,4%</td>
                                    <td>9,45</td>
                                    <td>9:05</td>
                                    <td>8.63%</td>
                                </tr>
                                <tr>
                                    <td>11-12-2017</td>
                                    <td>423</td>
                                    <td>123</td>
                                    <td>756</td>
                                    <td>78,6%</td>
                                    <td>45,6%</td>
                                    <td>6,85</td>
                                    <td>7:45</td>
                                    <td>33.8%</td>
                                </tr>
                                <tr>
                                    <td>1-6-2015</td>
                                    <td>465</td>
                                    <td>463</td>
                                    <td>456</td>
                                    <td>68,6%</td>
                                    <td>76,6%</td>
                                    <td>7,56</td>
                                    <td>8:45</td>
                                    <td>39.8%</td>
                                </tr>
                                <tr>
                                    <td>8-11-2016</td>
                                    <td>786</td>
                                    <td>485</td>
                                    <td>769</td>
                                    <td>45,3%</td>
                                    <td>6,7%</td>
                                    <td>8,56</td>
                                    <td>10:55</td>
                                    <td>33.8%</td>
                                </tr>
                                <tr>
                                    <td>15-10-2016</td>
                                    <td>786</td>
                                    <td>523</td>
                                    <td>736</td>
                                    <td>78,3%</td>
                                    <td>6,6%</td>
                                    <td>7,56</td>
                                    <td>4:30</td>
                                    <td>76.8%</td>
                                </tr>
                                <tr>
                                    <td>8-8-2017</td>
                                    <td>624</td>
                                    <td>436</td>
                                    <td>756</td>
                                    <td>78,3%</td>
                                    <td>6,4%</td>
                                    <td>9,45</td>
                                    <td>9:05</td>
                                    <td>8.63%</td>
                                </tr>
                                <tr>
                                    <td>11-12-2017</td>
                                    <td>423</td>
                                    <td>123</td>
                                    <td>756</td>
                                    <td>78,6%</td>
                                    <td>45,6%</td>
                                    <td>6,85</td>
                                    <td>7:45</td>
                                    <td>33.8%</td>
                                </tr>
                                <tr>
                                    <td>1-6-2015</td>
                                    <td>465</td>
                                    <td>463</td>
                                    <td>456</td>
                                    <td>68,6%</td>
                                    <td>76,6%</td>
                                    <td>7,56</td>
                                    <td>8:45</td>
                                    <td>39.8%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card bg-c-red">
            <div class="card-body">
                <div class="row align-items-center m-b-25">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Total Profit</h6>
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
                        <h6 class="m-b-5 text-white">Total Orders</h6>
                        <h3 class="m-b-0 text-white">15,830</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-database text-c-blue f-18"></i>
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
                        <h6 class="m-b-5 text-white">Average Price</h6>
                        <h3 class="m-b-0 text-white">$6,780</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign text-c-green f-18"></i>
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
                        <h6 class="m-b-5 text-white">Product Sold</h6>
                        <h3 class="m-b-0 text-white">6,784</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tags text-c-yellow f-18"></i>
                    </div>
                </div>
                <p class="m-b-0 text-white"><span
                        class="label label-warning m-r-10">+52%</span>From Previous Month</p>
            </div>
        </div>
    </div>
</div>

@endsection