<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\News;
use App\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller {

	public function index(){
		$latest =News::with('category')->whereNull('deleted_at')->orderBy('published_date','DESC')->limit(6)->get();
		$hotnews =News::with('category')->whereNull('deleted_at')->where('hot_news','1')->orderBy('published_date','DESC')->limit(3)->get();
		$featurenews =News::with('category')->whereNull('deleted_at')->where('feature_news','1')->orderBy('published_date','DESC')->limit(5)->get();

		$technology = Category::with(['posts' => function($query){
			$query->orderBy('published_date','DESC')->whereNull('deleted_at')->limit(3);
		}],'category')->where('id','1')->first();
		$politics = Category::with(['posts' => function($query){
			$query->orderBy('published_date','DESC')->whereNull('deleted_at')->limit(3);
		}],'category')->where('id','2')->first();
		$health = Category::with(['posts' => function($query){
			$query->orderBy('published_date','DESC')->whereNull('deleted_at')->limit(3);
		}],'category')->where('id','3')->first();
		$month = new Carbon('first day of this month');
		$popular = News::with('category')->whereNull('deleted_at')->whereDate('created_at','>=',$month)->orderBy('post_like','DESC')->limit(5)->get();
		$result = array(
            'latest'             => $latest,
            'hotnews'            => $hotnews,
            'featurenews'        => $featurenews,
            'technology'		 =>$technology,
			'popular'			 =>$popular,
			'politics'			 =>$politics,
			'health'			 =>$health,
        );
        
   		return view('site.home', compact('result'));
	}


	public function category($id){

		$category = Category::with(['posts' => function($query){
			$query->orderBy('published_date','DESC')->paginate(4);
		}],'category')->where('slug',$id)->first();

		$hotnews =News::with('category')->where('hot_news','1')->orderBy('published_date','DESC')->limit(3)->get();
		$result = array(
			'hotnews'		=>$hotnews,
			'category'	=>$category,
		);
		return view('site.news.category', compact('result'));
	}

}
