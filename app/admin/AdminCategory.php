<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminCategory extends Model {

    protected $table = 'tbl_newscategory';
    protected $guarded = ['id'];

    public static function GetCategoryList(){
    	$data = DB::table('tbl_newscategory')
                -> orderBy('category_name', 'ASC')
    			-> get();

    	return $data; 
    }

    public function posts(){
    	$data = $this->belongsToMany('App\admin\AdminNews', 'rel_post_newscategory');
    	return $data;
    }
}
