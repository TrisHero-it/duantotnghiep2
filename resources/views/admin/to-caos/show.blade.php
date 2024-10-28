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
                                placeholder="Tên người dùng ..." value="{{ $complaint->user->ten }}">
                            <small id="emailHelp" class="form-text text-muted">Tên của người tố cáo</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Tên player: </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Tên player ..." value="{{ $complaint->player->ten }}">
                            <small id="emailHelp" class="form-text text-muted">Tên của người bị tố cáo</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Nội dung tố cáo: </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nội dung tố cáo...">{{ $complaint->noi_dung_to_cao }}</textarea>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Trạng thái của tố cáo: </label>
                            <form action="{{ route('admin.tocao.updateStatus', $complaint->id) }}" method="POST">
                                @csrf
                                @method('PATCH')




                                <select class="mb-3 form-control form-control-lg" name="trang_thai" required>
                                    <option value="Chờ xử lí"
                                        {{ $complaint->trang_thai === 'Chờ xử lí' ? 'selected' : '' }}>
                                        Chờ xử lí</option>
                                    <option value="Đã Duyệt" {{ $complaint->trang_thai === 'Đã Duyệt' ? 'selected' : '' }}>
                                        Đã
                                        Duyệt</option>
                                    <option value="Hủy" {{ $complaint->trang_thai === 'Hủy' ? 'selected' : '' }}>Hủy
                                    </option>

                                </select>

                                <button type="submit" class="btn btn-primary mb-4">Cập nhật</button>
                            </form>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
