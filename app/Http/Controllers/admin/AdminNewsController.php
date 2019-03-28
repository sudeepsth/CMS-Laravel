<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\AdminCategory;
use App\admin\AdminNews;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Notifications\AdminNotification;
use Auth;
use Session;

class AdminNewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

       $newslist = AdminNews::GetNewsList();
        $result = array(
            'newslist'      => $newslist,
            'page_header'   => 'List of News Publish',
        );
        return view('admin.news.list', compact('result'));
    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categorylist = AdminCategory::GetCategoryList();
        $result = array(
            'page_header'           => 'Add News Details',
            'date'                  => date('Y-m-d'),
            'categorylist'          => $categorylist,
        );
        return view('admin.news.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $info =  Auth::user()->name. " added the post ".str_limit($request->title,50); 
        $user=Auth::user();
        $news = new AdminNews;
        if ($request->hasFile('image')) {
            $filename = time().'-'.$request->image->getClientOriginalName();
            $image = $request->file('image');
            $image->storePubliclyAs('uploads', $filename,'public');
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->detail=$request->detail;
        $news->published_date = $request->published_date;
        $news->status = $request->status;
        $news->posted_by = Auth::user()->id;
        $news->feature_news = $request->feature_news;
        $news->hot_news = $request->hot_news;
        $news->slug = str_slug($request->title, '-');
        $news->ordering = $request->ordering;
        $news->post_like = 0;
        $news->image = isset($filename)?$filename:'';
        $user->profile->post=$user->profile->post+1;
        $user->profile->save();
        $news->save();
        $news->category()->sync($request->category);
        $news->users()->attach(Auth::user()->id);
        
        $users=User::all();
        foreach ($users as $us) {
        $us->notify(new AdminNotification($info));
        }
        
        return redirect(route('news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $news = AdminNews::with('category')->where('id',$id)->first();
        $categorylist = AdminCategory::GetCategoryList();
        $result = array(
            'page_header'           => 'Add News Details',
            'record'                => $news,
            'categorylist'          => $categorylist,
        );
        return view('admin.news.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $news = AdminNews::findOrFail($id);
        if ($request->hasFile('image')) {

            $filename = time().'-'.$request->image->getClientOriginalName();
            $image = $request->file('image');
            $image->storePubliclyAs('uploads', $filename,'public');
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->detail=$request->detail;
        $news->published_date = $request->published_date;
        $news->status = $request->status;
        $news->slug = $request->slug;
        $news->posted_by = Auth::user()->id;
        $news->feature_news = $request->feature_news;
        $news->hot_news = $request->hot_news;
        $news->ordering = $request->ordering;
        
        if (!empty($filename)) {
            $news->image = $filename;
        } else {
            $news->image = $request->image_file;
        }
        $news->save();
        $news->category()->sync($request->category);
        Session::flash('done','Your news has been updated');

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $info =  Auth::user()->name. " deleted the post "; 
        $news = AdminNews::findOrFail($id);
        $news->delete();
        $news->deletes()->attach(Auth::user()->id);

        $users=User::all();
        foreach ($users as $us) {
        $us->notify(new AdminNotification($info));
        }

        Session::flash('warning','Your post has been deleted.');
        return redirect(route('news.index'));
    }

    public function delpost() {
       
       $newslist = AdminNews::onlyTrashed()->get();
       
        $result = array(
            'newslist'      => $newslist,
            'page_header'   => 'List of Deleted News',
        );
        return view('admin.news.deletedpost', compact('result'));
    }

    public function restorepost($id) {
        $news=AdminNews::withTrashed()->findOrFail($id);
        $news->deletes()->detach();
       AdminNews::withTrashed()->find($id)->restore();
       Session::flash('done','Your post has been restored');
       return redirect(route('news.deleted'));
    }

    public function perdelete($id) {
        $news=AdminNews::withTrashed()->findOrFail($id);
        $ids = $news->users[0]->id;
        $user=User::findOrFail($ids);
        $user->profile->post=$user->profile->post-1;
        $user->profile->save();
        $news->deletes()->detach();
        $news->users()->detach();
       AdminNews::withTrashed()->find($id)->forceDelete();

       Session::flash('warning','Your post has been permanently deleted');
       return redirect(route('news.deleted'));
    }
}
