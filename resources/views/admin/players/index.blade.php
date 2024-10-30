@extends('admin.layouts.app')


@section('content')

<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Danh sách players</h5>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giới tính</th>
                                <th>Ảnh đại diện</th>
                                <th>Trạng thái</th>
                                {{-- <th>Phân quyền</th>? --}}
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $player)
                                <tr>
                                    <td>{{ $player -> id }}</td>
                                    <td>{{ $player -> taiKhoan -> ten }}</td>
                                    <td>{{ $player -> taiKhoan -> gioi_tinh }}</td>
                                    <td><img src="{{ Storage::url($player -> taiKhoan -> anh_dai_dien) }}" alt="Ảnh đại diện" width="100"></td>
                                    <td>{{ $player -> trang_thai_player }}</td>
                                    {{-- <td>{{ $player -> taiKhoan -> phanQuyen -> ten }}</td> --}}
                                    <td><a href="{{ route('admin.players.show', $player -> id) }}"><i class="fas fa-eye" style="font-size: 18px"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giới tính</th>
                                <th>Ảnh đại diện</th>
                                <th>Trạng thái</th>
                                {{-- <th>Phân quyền</th> --}}
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection