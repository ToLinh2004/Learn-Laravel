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
    public function addCategory(){
        return view('clients/categories/add');
    }
    // thêm dữ liệu vào chuyên mục phương thức POST
    public function handleAddCategory(){
        return 'Submit theo chuyên mục';
    }
    // xóa dữ liệu phương thức delete
    public function deleteCategory(){
        return 'Xóa sản phẩm';
    }
}

