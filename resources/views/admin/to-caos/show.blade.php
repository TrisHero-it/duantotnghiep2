@extends('admin.layout.app')


@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Xử lí tố cáo</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Tên người dùng: </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Tên người dùng ...">
                            <small id="emailHelp" class="form-text text-muted">Tên của người tố cáo</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Tên player: </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Tên player ...">
                            <small id="emailHelp" class="form-text text-muted">Tên của người bị tố cáo</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Nội dung tố cáo: </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nội dung tố cáo..."></textarea>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Trạng thái của tố cáo: </label>
                            <select class="mb-3 form-control form-control-lg">
                                <option>Chờ xử lí</option>
                                <option>Đã Duyệt</option>
                                <option>Hủy</option>

                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary mb-4">Cập nhật</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
