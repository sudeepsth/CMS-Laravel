<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminNews extends Model {

    use SoftDeletes;

	protected $table = 'tbl_posts';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public static function GetNewsList(){
    	$data = DB::table('tbl_posts')
                -> orderBy('published_date', 'DESC')
                ->whereNull('deleted_at')
                -> paginate(10);

    	return $data; 
    }

    public static function GetRecentNewsList(){
        $data = DB::table('tbl_posts')
                ->whereNull('deleted_at')
                ->get();

        return $data; 
    }

    public function category(){
    	$data = $this->belongsToMany('App\admin\AdminCategory', 'rel_post_newscategory');
    	return $data;
    }

    public function users()
    {
  return $this->belongsToMany('App\admin\AdminUser', 'post_users', 'post_id', 'user_id');
    }

    public function deletes()
    {
  return $this->belongsToMany('App\admin\AdminUser', 'delete_post', 'post_id', 'user_id');
    }



}
