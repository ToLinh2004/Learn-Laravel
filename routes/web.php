<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HoomeController;
use Illuminate\Http\Response;
use App\Http\Controllers\UsersController;

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

Route::get('/', [HoomeController::class, 'index'])->name('home');

Route::get('/product', [HoomeController::class, 'products'])->name('product');
Route::get('/categories/skincare', function (Request $request) {
    return "Path" . $request->path();
});

Route::get('them-sanpham', [HoomeController::class, 'getAdd']);

Route::post('them-sanpham', [HoomeController::class, 'postAdd'])->name('post-add');
// Route::put('them-sanpham',[HoomeController::class,'putAdd']);

// Route::get('test-response',function(){
//     return "<h3>Học laravel tại Unicode</h3>";
// });
// Route::get('/content-array',function(){
//     $contentArr=[
//         'name'=>'Uniccode',
//         'lesson'=>'HTTTP response'
//     ];
//     return $contentArr;
// });
// Route::get('/lay-mang',[HomeController::class,'getArr']);

// Route::get('demo-response',function(){
//     // $response=new Response('Học laravel',201);
//     // or $response=response('hoc lap trinh',404)
//     $content='<h2>Học lập trình tại Unicode </h2>';
//     $response=(new Response($content))->header('content-type','textblade');
//     return $response;
// });

// Route::get('view-response',function(){
//     // return view('clients.demo-test');
//     $data=['hoc','datta'];
//     $response= response()->view('clients.demo-test',compact('data'));
//     return $response;
// });
Route::get('demo-response', function () {
    return view('clients.demo-test');
})->name('demo-response');
Route::post('demo-response', function (Request $request) {
    if (!empty($request->username)) {
        return redirect()->route('demo-response');
    }
});
// Route::get('demo-response2',function(){
//     $contentArr=['name'=>'unicode',
//     'version'=>'Laravel 8'];
//     return response()->json($contentArr,201)->header('Api-Key','1234');
// });

Route::get('download-file', function () {
    return view('clients.downloadfile');
});

Route::get('download-image', [HoomeController::class, 'downloadImage'])->name('download-image');

/// người dùng
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UsersController::class, 'index'])->name('index');
    Route::get('/add', [UsersController::class, 'add'])->name('add');
    Route::post('/add', [UsersController::class, 'postAdd'])->name('postAdd');
});
