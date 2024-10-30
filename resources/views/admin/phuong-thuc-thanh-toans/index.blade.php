@extends('admin.layouts.app')

@section('header')

<!-- data tables css -->
<link rel="stylesheet" href="{{asset('assets/plugins/data-tables/css/datatables.min.css')}}">

@endsection

@section('content')

<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Danh sách phương thức thanh toán</h5>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên phương thức</th>
                                <th>Logo</th>
                                <th>Mô tả</th>
                                <!-- <th>Trạng thái</th> -->
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phuongthucthanhtoans as $phuongthucthanhtoan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$phuongthucthanhtoan->ten_phuong_thuc}}</td>
                                <td>
                                    <img src="{{ Storage::url($phuongthucthanhtoan->logo) }}" alt="" width="70px">
                                </td>
                                <td>{{$phuongthucthanhtoan->mo_ta}}</td>
                                <!-- <td>
                                    {!! $phuongthucthanhtoan->trang_thai == 1 ? '<label class="badge badge-light-success">Success</label>' : '<label class="badge badge-light-danger">Cancel</label>' !!}
                                </td> -->
                                <td>
                                    <form action="{{route('admin.phuongthucthanhtoans.destroy', $phuongthucthanhtoan->id)}}" method="POST" onsubmit="return confirm('Bạn có muốn xoá không?')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" style="border:none; background:none"><i class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Language - Comma Decimal Place table end -->
</div>

@endsection

@section('script')
<script src="{{asset('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/pages/data-basic-custom.js')}}"></script>
@endsection