<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // hiển thị danh sách chuyên mục phwuong thức get
    public function __construct(){}  
    public function index(Request $request){
       dd($request);
    } 
    // lấy ra 1 chuyên mục theo id 
    public function getCategory($id){
        return view('clients/categories/edit');

    }
    // cập nhập 1 chuyên mục (phương thức POST)
    public function updateCategory($id){

    }
    // show form thêm dữ liệu phương thức get
    public function addCategory(Request $request){
        $cateName=$request->old('category_name','Mặc định');
        return view('clients/categories/add',compact('cateName'));
    }
    // thêm dữ liệu vào chuyên mục phương thức POST
    public function handleAddCategory(Request $request){
        if($request->has('category_name')){
                $cateName=$request->category_name;
            $request->flash();
            return redirect(route('categories.add'));
        }
        
        else{
            return   " ko có category name";
        }

        // return 'Submit theo chuyên mục';
    }
    // xóa dữ liệu phương thức delete
    public function deleteCategory(){
        return 'Xóa sản phẩm';
    }
    // xử lý lấy thông tin file
    public function handleFile(Request $request){
        if($request->hasFile('phpoto')){
            if($request ->photo->isValid()){
                $file=$request->photo;
                dd($file);
            }
            else{
                return "upload ko thành công";
            }
        }
        
    }
    public function getFile(){
        return view('clients/categories/file');
    }
}

