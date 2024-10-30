@extends('admin.layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Xử lí tố cáo</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- Form cập nhật thông tin tố cáo -->
                    <form action="{{ route('admin.tocao.updateStatus', $complaint->id) }}" method="POST"
                        onsubmit="return confirmUpdate();">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label class="form-label" for="user_name">Tên người dùng:</label>
                            <input type="text" class="form-control" id="user_name" placeholder="Tên người dùng ..."
                                value="{{ $complaint->user->ten }}" readonly disabled>
                            <a href="#" class="text-primary" style="text-decoration: none;"
                                onmouseover="this.style.textDecoration='underline'"
                                onmouseout="this.style.textDecoration='none'">Chi tiết người tố cáo tại đây.</a>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="player_name">Tên player:</label>
                            <input type="text" class="form-control" id="player_name" placeholder="Tên player ..."
                                value="{{ $complaint->player->ten }}" readonly disabled>
                            <a href="#" class="text-primary" style="text-decoration: none;"
                                onmouseover="this.style.textDecoration='underline'"
                                onmouseout="this.style.textDecoration='none'">Chi tiết player bị tố cáo tại đây.</a>

                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="complaint_content">Nội dung tố cáo:</label>
                            <textarea class="form-control" id="complaint_content" rows="3" readonly disabled>{{ $complaint->noi_dung_to_cao }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="status">Trạng thái của tố cáo:</label>
                            <select class="form-control" id="status" name="trang_thai" required>
                                <option value="Chờ xử lí" {{ $complaint->trang_thai === 'Chờ xử lí' ? 'selected' : '' }}>Chờ
                                    xử lí</option>
                                <option value="Đã Duyệt" {{ $complaint->trang_thai === 'Đã Duyệt' ? 'selected' : '' }}>Đã
                                    Duyệt</option>
                                <option value="Hủy" {{ $complaint->trang_thai === 'Hủy' ? 'selected' : '' }}>Hủy</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                    <script>
                        function confirmUpdate() {
                            return confirm("Bạn có muốn cập nhật trạng thái không?");
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
