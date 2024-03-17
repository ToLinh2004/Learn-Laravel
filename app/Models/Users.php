<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUsers()
    {
        $users = DB::select('SELECT * FROM users ORDER BY ceate_at DESC');
        return  $users;
    }
    public function addUser($data)
    {
        DB::insert(
            'INSERT INTO users (fullname, email, ceate_at) values (?,?,?)',
            $data
        );
    }
    public function getDetail($id)
    {
        return DB::select('SELECT *FROM ' . $this->table . ' WHERE id=?', [$id]);
    }

    public function updateUser($data, $id)
    {
        $data[] = $id;
        return DB::update('UPDATE ' . $this->table . ' SET fullname=?, email=?, ceate_at=?  WHERE id=?', $data);
    }
    public function deleteUser($id)
    {
        return DB::delete('DELETE FROM ' . $this->table . ' where id=?', [$id]);
    }
    public function statement($sql)
    {
        return DB::statement($sql);
    }
    public function learnQueryBuilder()
    {
        // DB::enableQueryLog();
        // lấy tất ả dữ liệu trong bảng
        // $lists=DB::table($this->table)
        // ->select('fullname','email','id')
        // ->where('id',1)
        // ->where(function($query){
        //     $query->where('id','<',2)->orwhere('id','>=',3);
        // })
        // ->where('fullname','like','%HOÀNG AN%')
        // ->whereBetween('id',[2,3])
        // ->whereIn('id',[1,3])
        // ->whereDate('ceate_at','2024-03-11 04:46:37')
        // ->get();
        // $sql=DB::getQueryLog();
        // dd($sql);
        // lấy 1 bản ghi 
        // $detail=DB::table($this->table)->first();
        // dd($detail);

        // join bảng inner join
        // $list=DB::table('users')
        // ->select('users.*','groups.name as group_name')
        // ->join('groups','users.group_id','=','group_id')
        // ->leftJoin()
        // ->orderBy('id','desc')
        // sắp xếp ngẫu nhiên
        // ->inRandomOrder()
        // ->select(DB::raw('count(id) as email_count'),'email')
        // ->groupBy('email')
        // ->having('email_count','>=','1')
        // ->limit(2)
        // ->offset(2) // nó sẽ phần tử thứ 2
        // ->get();
        //inssert table
        // $list=DB::table('users')->insert([
        //     'fullname'=>'Nguyễn Văn A',
        //     'email'=> 'nguyenvana@gmail.com',
        //     'group_id'=>1,
        //     'ceate_at'=>date('Y-m-d H:i:s')
        // ]);
        // $lastId=DB::getPdo()->lastInsertId();
        //update
        // $status=DB::table('users')
        // ->where('id',8)
        // ->update(['fullname'=>'Nguyễn Văn Linh',
        // 'email'=>'nguyenvanlinh@gmail.com',
        // 'ceate_at'=>date('Y-m-d H:i:s')]);
        // $status=DB::table('users')
        // ->where('id',7)
        // ->delete();
        $count=DB::table('users')->where('id','>',20)->count();
        // ->where('id',7)
        dd($count);

    }
}
