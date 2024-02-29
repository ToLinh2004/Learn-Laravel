<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index(){
        $title="Học lập trình";
    $content="Tại Unicode";
    /*
    ý nghĩa của compact nó giống như 1 mảng
    [
        'title'=> $title,
        'content'=> $content
    ]
     return view('home',compact('title','content'));
    */
    // return view('home')->with(['title'=>$title,'content'=>$content]);
    return View::make('home',compact('title','content'));
    }
    public function getNews(){
        return 'Danh sách tin tức';
    }

    public function getCategories(){
        return 'Danh mục';
    }
    public function getProductDetail($id){

        return view('clients.products.detail',compact('id'));
    }
    
}
