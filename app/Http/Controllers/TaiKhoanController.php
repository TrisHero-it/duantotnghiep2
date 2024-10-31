<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TaiKhoanController extends Controller
{
    const path_upload = "public/uploads/tai_khoans";
    public function index(Request $request)
    {
        $taikhoans = TaiKhoan::all();
        
        return view('admin.taikhoans.index', compact('taikhoans'));
    }
    public function create()
    {

        return view("admin.taikhoans.create");
    }
    public function store(Request $request)
{
    // Thêm validation
    $request->validate([
        'ten' => 'required|string|max:255',
        'ngay_sinh' => 'required|date',
        'biet_danh' => 'required|string|max:255',
        'gioi_tinh' => 'required|in:Nam,Nữ',
        'email' => 'required|email|unique:tai_khoans,email',
        'sdt' => 'required|numeric|digits_between:10,15',
        'cccd' => 'required|numeric|digits:12|unique:tai_khoans,cccd',
        'mat_khau' => 'required|string|min:8',
        'so_du' => 'required|numeric|min:0',
        'anh_dai_dien' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'bi_cam' => 'required|in:1,2',
    ], [
        'ten.required' => 'Tên không được để trống.',
        'ten.string' => 'Tên phải là chuỗi ký tự.',
        'ten.max' => 'Tên không được vượt quá 255 ký tự.',
        'ngay_sinh.required' => 'Ngày sinh không được để trống.',
        'ngay_sinh.date' => 'Ngày sinh không hợp lệ.',
        'biet_danh.required' => 'Biệt danh không được để trống.',
        'biet_danh.string' => 'Biệt danh phải là chuỗi ký tự.',
        'biet_danh.max' => 'Biệt danh không được vượt quá 255 ký tự.',
        'gioi_tinh.required' => 'Giới tính không được để trống.',
        'gioi_tinh.in' => 'Giới tính chỉ được chọn Nam hoặc Nữ.',
        'email.required' => 'Email không được để trống.',
        'email.email' => 'Email không hợp lệ.',
        'email.unique' => 'Email này đã được sử dụng.',
        'sdt.required' => 'Số điện thoại không được để trống.',
        'sdt.numeric' => 'Số điện thoại phải là số.',
        'sdt.digits_between' => 'Số điện thoại phải từ 10 đến 15 chữ số.',
        'cccd.required' => 'CCCD không được để trống.',
        'cccd.numeric' => 'CCCD phải là số.',
        'cccd.digits' => 'CCCD phải gồm 12 chữ số.',
        'cccd.unique' => 'CCCD này đã được sử dụng.',
        'mat_khau.required' => 'Mật khẩu không được để trống.',
        'mat_khau.string' => 'Mật khẩu phải là chuỗi ký tự.',
        'mat_khau.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
        'so_du.required' => 'Số dư không được để trống.',
        'so_du.numeric' => 'Số dư phải là số.',
        'so_du.min' => 'Số dư phải lớn hơn hoặc bằng 0.',
        'anh_dai_dien.required' => 'Ảnh đại diện không được để trống.',
        'anh_dai_dien.image' => 'Ảnh đại diện phải là định dạng ảnh.',
        'anh_dai_dien.mimes' => 'Ảnh đại diện chỉ chấp nhận các định dạng jpeg, png, jpg, gif.',
        'anh_dai_dien.max' => 'Ảnh đại diện không được vượt quá 2048KB.',
        'bi_cam.required' => 'Vai trò không được để trống.',
        'bi_cam.in' => 'Vai trò chỉ có thể là Admin hoặc Người dùng.',
    ]);
    

    // Xử lý file ảnh đại diện
    $avatarPath = $request->file('anh_dai_dien')->store('avatars', 'public');

    // Tạo tài khoản mới
    $taikhoans = new TaiKhoan();
    $taikhoans->ten = $request->ten;
    $taikhoans->ngay_sinh = $request->ngay_sinh;
    $taikhoans->biet_danh = $request->biet_danh;
    $taikhoans->gioi_tinh = $request->gioi_tinh;
    $taikhoans->email = $request->email;
    $taikhoans->sdt = $request->sdt;
    $taikhoans->cccd = $request->cccd;
    $taikhoans->mat_khau = Hash::make($request->mat_khau);
    $taikhoans->so_du = $request->so_du;
    $taikhoans->anh_dai_dien = $avatarPath;
    $taikhoans->bi_cam = $request->bi_cam == 1 ? now() : null;
    $taikhoans->save();

    return redirect()->route('admin.taikhoans.index')->with('success', 'Thêm tài khoản thành công!');
}

    
    public function destroy($id)
    {
        // Tìm tài khoản theo ID
        $taikhoan = TaiKhoan::findOrFail($id);

        // Xóa ảnh nếu cần
        if ($taikhoan->cccd) {
            Storage::delete($taikhoan->cccd);
        }
        if ($taikhoan->anh_dai_dien) {
            Storage::delete($taikhoan->anh_dai_dien);
        }

        // Xóa tài khoản
        $taikhoan->delete();

        // Quay lại danh sách với thông báo thành công
        return redirect()->route('admin.taikhoans.index')->with('success', 'Tài khoản đã được xóa thành công!');
    }
    public function show($id)
    {
        $taikhoan = TaiKhoan::find($id);
        return view('admin.taikhoans.show', compact('taikhoan'));
        
    }
}
