<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
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
        $this->data['errorMessage']= 'Vui lòng kiểm trả dữ liệu';
        return view('clients.add',$this->data);
    }

    public function postAdd(ProductRequest $request){

        dd($request->all());
        // $rule=[
        //     'product_name'=>  'required|min:6' ,
        //     'product_price'=>'required|integer'
        // ];
        // $message=[
        //     'product_name.required'=>'Tên sản phẩm bắt buộc phải nhập',
        //     'product_name.min'=>'Tên sản phẩm không được nhỏ hơn :min kí tự',
        //     'product_price.required'=>'Giá sản phẩm bắt buộc phải nhập',
        //     'product_price.integer'=>'Giá sản phẩm là số',
        // ];
        // $message=[
        //         'required'=>'Trường :attribute bắt buộc phải nhập ',
        //         'min'=>'Trường :attribute không được nhỏ hơn :min ký tự',
        //         'integer'=>'Trường :attribute phải là số'
        // ];
        // $request->validate($rule,$message);
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
