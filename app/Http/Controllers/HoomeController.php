<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoomeController extends Controller
{
    //
    public $data=[];
    public function index(){
        $this->data['welcome']="Học lập trình Laravel";
        $this->data['content']='<h3>Chuowgn 1: nhập môn Lẩve</h3>
        <p>Kiến thức 1</p>';
        $this->data['index']=1;
  
        $this->data['dataArr']=[
            'Item 1',
            'Item 2',
            'Item 3',
        ];
        $this->data['dataArr']=[];
        $this->data['number']=20;
                return view('home',$this->data);
    }
}
