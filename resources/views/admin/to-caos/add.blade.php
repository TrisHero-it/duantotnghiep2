@extends('admin.layout.app')

@section('content')
    <div class="container">


        <h2>Bảng tố cáo</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" data-toggle="modal" data-target="#updateInfoModal">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.tocao.store') }}" method="POST" id="complaintForm">
            @csrf
            <div class="form-group">
                <label for="id_player">Chọn người chơi mà bạn muốn tố cáo:</label>
                <select name="id_player" id="id_player" class="form-control" required>
                    <option value="">-- Chọn --</option>
                    @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{ $player->ten }} (Player)</option>
                    @endforeach
                </select>
                @error('id_player')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="noi_dung_to_cao">Nội dung tố cáo:</label>
                <textarea name="noi_dung_to_cao" id="noi_dung_to_cao" class="form-control" rows="5" required></textarea>
                @error('noi_dung_to_cao')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>
@endsection
