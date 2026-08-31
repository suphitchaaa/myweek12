<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "ยินดีต้อนรับ <a href='".route('login')."'> login </a>";
});

Route::get('about', function () {
    return "เกี่ยวกับเรา";
});

Route::get('blog/{id}', function () {
    return "บทความทั้งหมด".$id;
});

Route::get('admin/user/piaza/suphitcha', function () {
    return "<h1> ยินดีต้อนรับ Admin </h1>";
}) ->name('login');

Route::fallback(function () {
    return "ไม่พบหน้า";

});