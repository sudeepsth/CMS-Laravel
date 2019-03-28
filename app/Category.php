<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'tbl_newscategory';
    protected $guarded = ['id'];

    public function posts(){
        $data = $this->belongsToMany('App\News', 'rel_post_newscategory','admin_category_id','admin_news_id');
        return $data;
    }

    
}
