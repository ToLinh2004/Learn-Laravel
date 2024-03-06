<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoomeController extends Controller
{
    //
    public $data=[];
    public function index(){
        // $this->data['welcome']="Học lập trình Laravel";
        // $this->data['content']='<h3>Chuowgn 1: nhập môn Lẩve</h3>
        // <p>Kiến thức 1</p>';
        // $this->data['index']=1;
  
        // $this->data['dataArr']=[
        //     'Item 1',
        //     'Item 2',
        //     'Item 3',
        // ];
        // $this->data['message']='Đặt hàng thnahf công';
        // $this->data['dataArr']=[];
        // $this->data['number']=20;
        $this->data['title']='Trang chủ';
        $this->data['message']='Đăng ký tài khoản thành công';
                return view('clients.home',$this->data);
    }
    public function  products(){
        $this->data['title']='Sản phâm';
        return view('clients.products',$this->data);
    }
    public function getAdd(){
        $this->data['title']='Thêm Sản phâm';
        return view('clients.add',$this->data);
    }

    public function postAdd(Request $request){
        dd($request);
    }
    public function putAdd(Request $request){
        dd($request);
    }
    public function downloadImage(Request $request){
        if(!empty($request->image)){
            $image=trim($request->image);
            $fileName= 'image_'.uniqid().'.jpg';
            // dùng use để có có thể use image
            return response()->streamDownload(function() use ($image){
                $imageContent=file_get_contents($image);
                echo $imageContent;
            },$fileName);   
        }
    }
}
