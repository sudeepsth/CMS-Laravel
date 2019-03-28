<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model{
    protected $table = 'tbl_posts';
    protected $guarded = ['id'];

	public static function GetNewsList(){
		$data = DB::table('tbl_posts')
                        -> where('status', '1')
                        -> select('id', 'title', 'published_date', 'slug')
                        -> orderBy('published_date', 'DESC')
                        -> orderBy('ordering', 'DESC')
                        ->whereNull('deleted_at')
                        -> paginate(5);

                return $data;
	}

    public static function GetHomeNewsList(){
        $data = DB::table('tbl_posts')
                -> where('status', '1')
                -> select('id', 'title', 'detail','published_date', 'slug','image')
                -> orderBy('published_date', 'DESC')
                -> orderBy('ordering', 'DESC')
                ->whereNull('deleted_at')
                -> limit(4)
                -> get();

        return $data;
    }

        //for slug
         public static function GetNewsDetail($slug){
                $data = DB::table('tbl_posts')
                        -> where('slug', $slug)
                        -> where('status', '1')
                        ->whereNull('deleted_at')
                        -> get();
                return $data;
        }

	public static function GetNextPostID($id){
		$data = DB::table('tbl_posts')
                        -> where('status', '1')
                        -> where('id','>', $id)
                        -> select('id','title', 'slug')
                        -> orderBy('id', 'ASC')
                        -> limit(1)
                        -> get();
                return $data;
	}

	public static function GetPreviousPostID($id){
		$data = DB::table('tbl_posts')
                        -> where('status', '1')
                        -> where('id','<', $id)
                        -> select('id','title', 'slug')
                        -> orderBy('id', 'DESC')
                        -> limit(1)
                        -> get();
                return $data;
	}

        public static function GetSideBarNewsList($id){
                $data = DB::table('tbl_posts')
                        -> where('status', '1')
                        -> where('id','!=', $id)
                        -> select('id', 'title', 'published_date', 'slug')
                        -> orderBy('published_date', 'DESC')
                        -> limit(5)
                        -> get();

                return $data;
        }

        public function category(){
        $data = $this->belongsToMany('App\Category', 'rel_post_newscategory','admin_news_id','admin_category_id');
        return $data;
    }


}