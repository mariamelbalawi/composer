<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;

// إعادة توجيه الصفحة الرئيسية لصفحة الملاحظات
Route::get('/', function () {
    return redirect()->route('notes.index');
});

// تفعيل Auth (تسجيل دخول/خروج) لو انتِ شغالة بـ breeze أو ui
Auth::routes();

// صفحة الـ home (بعد تسجيل الدخول)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// راوت تجريبي (اختياري)
Route::get('/hello', function () {
    return 'Merhaba';
});

// الراوت الأساسي للملاحظات (CRUD)
Route::resource('notes', NoteController::class);
