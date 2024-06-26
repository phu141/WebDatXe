<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CalendarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Trang chu
Route::get('/', [HomeController::class, 'index']);

// Dang ky tai khoan
Route::get('/dangky', [AuthenticateController::class, 'ViewDangKy']);
Route::post('/dangkyPost', [AuthenticateController::class, 'DangKy']);

// Dang nhap tai khoan
Route::get('/dangnhap', [AuthenticateController::class, 'ViewDangNhap']);
Route::post('/dangnhapPost', [AuthenticateController::class, 'DangNhap']);

// dang xuat
Route::get('/dangxuat', [AuthenticateController::class, 'DangXuat']);

// tai khoan
Route::get('/taikhoan', [UserController::class, 'XemTaiKhoan']);
Route::get('/suataikhoan', [UserController::class, 'ViewSuaTaiKhoan']);
Route::post('/suataikhoanPost', [UserController::class, 'SuaTaiKhoan']);

// lien he phan hoi
Route::get('/phanhoi', [FeedbackController::class, 'ViewPhanHoi']);
Route::post('/phanhoiPost', [FeedbackController::class, 'PhanHoi']);

// lich dat xe
Route::get('/lichdatxe', [CalendarController::class, 'LichDatXe']);
Route::post('/lichdatxePost', [CalendarController::class, 'GetData']); 
// Route::get('/lichdatxeTest', [CalendarController::class, 'GetData']); 