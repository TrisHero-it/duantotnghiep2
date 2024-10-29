@extends('admin.layouts.app')

<title>@yield('title' , 'Đây là danh sách')</title>
@section('content')

<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
    <a href="{{ route('admin.phanquyen.create') }}" class="btn btn-primary">Thêm</a>
        <div class="card">
            <div class="card-header">
                <h5>Danh sách tài khoản</h5>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($phanquyens as $phanquyen)
                            <tr>
                                <td>{{ $phanquyen->id }}</td>
                                <td>{{ $phanquyen->ten }}</td>
                                <td>{{ $phanquyen->gioi_tinh }}</td>
                                <td>
                                <a href="{{ route('admin.phan-quyens.edit', $phanquyen->id) }}"class="btn btn-warning">Chỉnh sửa</a>
                                <form action="{{ route('admin.phan-quyens.delete', $phanquyen->id) }}" method="POST" style="display:inline;" onclick="confirm('Bạn có chắc muốn xóa không?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>


                                </form>
                                <a href="{{ route('admin.phan-quyens.show', $phanquyen->id) }}" class="btn btn-info">Xem chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Trạng thái</th>
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