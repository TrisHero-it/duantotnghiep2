@extends('admin.layouts.app')

@section('title', 'Đánh giá 5 sao')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Đánh giá 5 sao</h1>

    <!-- Form Tìm Kiếm -->
    <form method="GET" action="{{ route('admin.danhgia.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Nhập ID player để tìm kiếm..." value="{{ request('query') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Tìm kiếm ID</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="input-group">
                    <select name="star_rating" class="form-control">
                        <option value="">Chọn số sao</option>
                        <option value="1" {{ request('star_rating') == '1' ? 'selected' : '' }}>1 sao</option>
                        <option value="2" {{ request('star_rating') == '2' ? 'selected' : '' }}>2 sao</option>
                        <option value="3" {{ request('star_rating') == '3' ? 'selected' : '' }}>3 sao</option>
                        <option value="4" {{ request('star_rating') == '4' ? 'selected' : '' }}>4 sao</option>
                        <option value="5" {{ request('star_rating') == '5' ? 'selected' : '' }}>5 sao</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Tìm kiếm Sao</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <h3 class="mb-3">Danh sách đánh giá theo từng player</h3>
    <div class="ratings-list">
        @foreach($danhGias->groupBy('player_id') as $playerId => $danhGiasForPlayer)
            <div class="player-rating mb-4 p-4 border rounded shadow-lg bg-light">
                <h4 class="text-primary">Player ID: {{ $playerId }}</h4>

                <div class="average-rating text-center mb-3">
                    @php
                        $averageScore = $danhGiasForPlayer->avg('so_sao'); // Tính điểm trung bình
                    @endphp
                    <h5 class="font-weight-bold">Sao đánh giá trung bình: <span class="average-score">{{ number_format($averageScore, 1) }}</span> / 5</h5>
                </div>

                <div class="player-stars">
                    @foreach ($danhGiasForPlayer as $danhGia)
                        <div class="rating-item mb-3 p-3 border rounded bg-white shadow-sm">
                            <div class="rating-header d-flex justify-content-between align-items-center">
                                <span class="player-name font-weight-bold text-success">{{ $danhGia->ten_player_ao }}</span>
                                <div class="stars">
                                    @for ($i = 1; $i <= $danhGia->so_sao; $i++)
                                        <span class="star filled">★</span>
                                    @endfor
                                </div>
                            </div>
                            <p class="comment mt-2">{{ $danhGia->nhan_xet }}</p>
                            <small class="timestamp text-muted">{{ $danhGia->created_at ? $danhGia->created_at->format('d/m/Y H:i:s') : 'Chưa có thời gian' }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .average-rating {
        text-align: center;
    }
    .average-score {
        font-weight: bold;
        font-size: 30px; 
        color: #28a745; 
    }
    .stars {
        color: gold;
        font-size: 24px; 
    }
    .star {
        cursor: pointer;
    }
    .star.filled {
        color: gold;
    }
    .ratings-list {
        margin-top: 20px;
    }
    .player-rating {
        background-color: #f9f9f9; 
        border: 1px solid #ccc; 
        border-radius: 10px; 
        padding: 20px; 
        margin-bottom: 20px;
    }
    .rating-item {
        border: 1px solid #eaeaea; 
        border-radius: 5px;
        padding: 15px; 
        margin-bottom: 10px;
        background-color: #ffffff; 
    }
    .rating-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .player-name {
        font-weight: bold;
        color: #007bff; 
    }
    .comment {
        margin: 10px 0;
    }
    .timestamp {
        font-size: 12px;
        color: #888; 
    }
    /* Tìm kiếm */
    .input-group {
        border-radius: 5px;
        overflow: hidden;
    }
    .input-group .form-control {
        border: 1px solid #ced4da;
        border-right: none; /* Bỏ viền bên phải */
        border-radius: 0; /* Bỏ bo góc */
    }
    .input-group .btn {
        border-radius: 0; /* Bỏ bo góc */
    }
    .input-group-append .btn {
        border-left: 0; /* Bỏ viền bên trái */
    }
</style>
@endsection
