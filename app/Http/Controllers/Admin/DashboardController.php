<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct(){
        // sử dụng session để chwck login
        echo 'Khởi động dashboard';
    }

    public function index(){
        return 'Dashboard welcome';
    }
}
