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
        // lấy tất ả dữ liệu trong bảng
        $lists=DB::table($this->table)
        ->select('fullname','email')
        ->where('id','>',1)
        ->get();
        dd($lists);

        // lấy 1 bản ghi 
        $detail=DB::table($this->table)->first();
        dd($detail);

    }
}
