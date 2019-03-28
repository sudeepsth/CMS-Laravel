<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use DB;

class NewsController extends Controller {

	public function newsList() {
		$result = News::GetNewsList();
   		return view('site.news.list', compact('result'));
	} 

	public function newsDetail($slug) {
		$hotnews =News::with('category')->where('hot_news','1')->orderBy('published_date','DESC')->limit(3)->get();
		$newsdetail = News::GetNewsDetail($slug);
		$like = $newsdetail[0]->post_like+1;
		DB::table('tbl_posts')
            ->where('slug', $slug)
            ->update(['post_like' => $like]);
            
		if (count($newsdetail) >= '1' ) {
		    $nextpost = News::GetNextPostID($newsdetail[0]->id);
			$previouspost = News::GetPreviousPostID($newsdetail[0]->id);
			$news_list = News::GetSideBarNewsList($newsdetail[0]->id);
			$result = array (
					'hotnews'				=>$hotnews,
					'newsdetail'			=> $newsdetail[0],
					'news_list'				=> $news_list,
					'nextpost'				=> isset($nextpost[0])?$nextpost[0]: '',
					'previouspost'			=> isset($previouspost[0])? $previouspost[0] : '',
			);
			return view('site.news.newsdetail', compact('result'));
		} else {
			return view('404');			
		}
	}
}
