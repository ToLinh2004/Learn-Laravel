<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HoomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// client 
// Route::prefix('categories')->group(function(){
//     // danh sách chuyên mục
//     Route::get('/',[CategoriesController::class,'index'])->name('categories.list');
//     // lấy chi tiết 1 chuyên mục áp dụng show form sửa chuyên mục
//     Route::get('/edit/{id}',[CategoriesController::class,'getCategory'])->name('categories.edit');
//     // xử lý update chuyên mục
//     Route::post('edit/{id}',[CategoriesController::class,'updateCategory']);
//  // hiển thị form add dữ liệu
//  Route::get('/add',[CategoriesController::class,'addCategory'])->name('categories.add');
//  // xử lý thêm chuyên mục
//  Route::post('/add',[CategoriesController::class,'handleAddCategory']);
//  // xóa chuyên mục
//  Route::get('/delete/{id}',[CategoriesController::class,'deleteCategory'])->name('categories.delete');

// });

// Route::prefix('admin')->group(function(){
//     Route::get('/',[DashboardController::class,'index']);
//     Route::resource('products',ProductsController::class);
// });

// Route::middleware('auth.admin')->prefix('admin')->group(function(){
//     Route::get('/',[DashboardController::class,'index']);
//     Route::resource('products',ProductsController::class)->middleware('auth.admin.product');
// });
// Route::get('/',[HomeController::class,'index'])->name('home');
// Route::get('sanpham/{id}',[HomeController::class,'getProductDetail']);
// Route::get('/', function () {
//     $title="Học lập trình";
//     $content="Tại Unicode";
//     $dataView=[
//         'titleData'=>$title,
//         'contentData'=>$content
//     ];
//     return view('home',$dataView);

// })->name('home');

// Route::get('/',function(){
//     $html='<h1>Học lập trình tại Unicode</h1>';
//     return $html;
// });

// Route::get('/unicode',function(){
//     return view('form');
// });

// Route::post('/unicode',function(){
//     return "Phương thức post của path/unicode";
// });

// Route::put('/unicode',function(){
//     return 'Phương thức put của path/unicode';
// });

// Route::delete('/unicode',function(){
//     return 'Phương thức delete của path/unicode';
// });

// Route::patch('/unicode',function(){
//     return 'Phương thức patcch của path/unicode';
// });

// Route::match(['get','post'],'unicode',function(){
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('unicdoe',function(Request $request){
//     return $request->method();
//     // return $_SERVER['REQUEST_METHOD'];

// });

// Route:: redirect('unicode','show-form',301);
// Route::view('show-form','form');

// Route::get('/tin-tuc','App\Http\Controllers\HomeController@getNews')->name('news'); // 2 cách để gọi controller
// Route::get('/chuyen-muc',[HomeController::class,'getCategories'])->name('news');

// Route::get('/', function () {
//     return view('home');
// });

// Route::prefix('admin')->group(function () {

//     Route::get('/tin-tuc/{id?}/{slug?}', function ($id=null,$slug=null) {
//         $content="Phương thứcget của path/unicode với tham số";
//         $content.='id='.$id.'</br>';
//         $content.='slug='.$slug;
//         return $content;
//     })->where(
//         // 'slug'=>'.+',
//         // 'id'=>'[0-9]'
//         'id','\d+'
//     )->where('slug','.+')->name('admin.tintuc');

//     Route::get('/show-form',function(){
//     return view('form');
// })->name('admin.show-form');
//     Route::prefix('products')->group(function () {

//         Route::get('add', function () {
//             return 'thêm sản phẩm';
//         });
//         Route::get('delete', function () {
//             return 'xóa sản phẩm';
//         });
//     });
// });

Route::get('/',[HoomeController::class,'index']);
Route::get('/categories/skincare',function(Request $request){
    return "Path" .$request->path();
}
);