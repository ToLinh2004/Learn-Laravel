<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Users;

class UsersController extends Controller
{
    //
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }
    public function index()
    {
        $title = 'Danh sách người dùng';
        // $users= new Users();
        $usersList = $this->users->getAllUsers();
        return view('clients.users.lists', compact('title', 'usersList'));
    }
    public function add()
    {
        $title = 'Thêm người dùng';
        return view('clients.users.add', compact('title'));
    }
    public function postAdd(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'email' => 'required|email|Unique:users'
            ],
            [
                'fullname.required' => 'Họ và tên bắt buộc phải nhập',
                'fullname.min' => ' Họ và tên phải :min ký tự trở lên',
                'email.required' => ' email bắt buộc phải nhập',
                'email.email' => ' email phải đúng định dạng',
                'email.unique' => 'email đã tồn tại trên hệ thống'
            ]
        );

        $dataInsert = [
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s')
        ];
        $this->users->addUser($dataInsert);
        return redirect()->route('users.index')->with('msg', 'thêm người dùng thành công');
    }
    public function getEdit(Request $request,$id = 0)
    {
        $title = 'Cập nhập người dùng';
        if (!empty($id)) {
            $userDetail = $this->users->getDetail($id);
            if (!empty($userDetail[0])) {
                $request->session()->put('id',$id);
                $userDetail = $userDetail[0];

            } else {
                return redirect()->route('users.index')->with('msg', 'Người dùng không tồn tại');
            }
        } else {
            return redirect()->route('users.index')->with('msg', 'Liên kết không tồn tại');
        }
        return view('clients.users.edit', compact('title', 'userDetail'));
    }
    public function postEdit(Request $request)
    {
        $id=session('id');
        if(empty($id)){
            return back()->with('msg','cập nhập người dùng');
        }
      
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'email' => 'required|email|Unique:users'
            ],
            [
                'fullname.required' => 'Họ và tên bắt buộc phải nhập',
                'fullname.min' => ' Họ và tên phải :min ký tự trở lên',
                'email.required' => ' email bắt buộc phải nhập',
                'email.email' => ' email phải đúng định dạng',
                'email.unique' => 'email đã tồn tại trên hệ thống'
            ]
        );

        $dataUpdate = [
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s')   // dùng hàm now cũng được
        ];
        $this->users->updateUser($dataUpdate, $id);
    
        return back()->with('msg','cập nhập người dùng');
    }
}
