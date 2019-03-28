<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminUser extends Model{
	
	protected $table = 'users';
    protected $guarded = ['id'];


    public static function GetAdminUserList() {
        $data = DB::table('users')
                -> get();
        return $data;
    }

    public static function GetAllUser() {
        $data = DB::table('users')
                ->select('id','name')
                -> get();
        return $data;
    }


    public function posts()
    {
  return $this->belongsToMany('App\admin\AdminNews', 'post_users', 'user_id', 'post_id');
    }


}
