<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('introduce');


Route::post('/dang-nhap', [AuthController::class, 'login'])->name('login');
Route::post('/dang-ky', [AuthController::class, 'register'])->name('register');

Route::post('/de-lai-lien-lac', [FormController::class, 'send'])->name('form.send');
Route::get('/dang-xuat', [AuthController::class, 'logout'])->name('logout');
Route::middleware('creator_auth')->group(function () {
    //form
    Route::prefix('/thong-tin-khach-hang')->group(function () {
        Route::get('/trang-chu/danh-sach', [FormController::class, 'index'])->name('form.index');

        Route::get('/trang-chu/danh-dau/{id}', [FormController::class, 'markRead'])->name('form.mark_read');
    });
    //end form

    //category
    Route::prefix('the-loai')->group(function () {
        Route::get('/quan-ly', [CategoryController::class, 'index'])->name('client.category.index');
        Route::get('/quan-ly/{id}', [CategoryController::class, 'edit'])->name('client.category.edit');
        Route::put('/quan-ly/{id}', [CategoryController::class, 'update'])->name('client.category.update');
        Route::delete('/quan-ly/delete/{id}', [CategoryController::class, 'delete'])->name('client.category.delete');
    });
    //end category
    Route::prefix('nguoi-dung')->group(function () {
        Route::get('/quan-ly', [UserController::class, 'index'])->name('client.user.index');
        Route::put('/quan-ly/{id}', [UserController::class, 'setRole'])->name('client.user.set_role');
        Route::delete('/quan-ly/xoa/{id}', [UserController::class, 'delete'])->name('client.user.delete');
    });

    // hidden List
    Route::get('danh-sach-bai-viet-da-an/danh-sach', [PostController::class, 'hiddenList'])->name('client.post.hidden_post');
    Route::get('/danh-sach-bai-viet-da-an/danh-sach/{id}', [PostController::class, 'setHidden'])->name('client.post.set_hidden');
    //


    Route::get('/gioi-thieu/chinh-sua', [AboutController::class, 'edit'])->name('introduce.edit');
    Route::post('/gioi-thieu/chinh-sua', [AboutController::class, 'update'])->name('introduce.update');

    Route::get('/bai-viet/viet-bai-moi', [PostController::class, 'create'])->name('client.post.create');
    Route::get('/{slug_category}/{slug_blog}/chinh-sua', [PostController::class, 'edit'])->name('client.post.edit');
    Route::put('/{slug_blog}/chinh-sua', [PostController::class, 'update'])->name('client.post.update');

    Route::delete('/xoa/xoa-vinh-vien/{id}', [PostController::class, 'delete'])->name('client.post.delete');



});

Route::get('/danh-sach', [PostController::class, 'search'])->name('search.post');

Route::post('/the-loai/them-the-loai', [PostController::class, 'addCategory'])->name('client.add.category');

Route::get('/{slug_category}', [PostController::class, 'postsByCategorySlug'])->name('client.post.by.slug-category');
Route::get('/{slug_category}/{slug_blog}', [PostController::class, 'show'])->name('client.post.show');

Route::post('/bai-viet/viet-bai-moi', [PostController::class, 'store'])->name('client.post.store');
Route::post('/bai-viet/viet-bai-moi/upload', [CKEditorController::class, 'CKEditorUploadImage'])->name('ckeditor.upload.image');

Route::get('/', function () {
    return view('client.index');
})->name('index');