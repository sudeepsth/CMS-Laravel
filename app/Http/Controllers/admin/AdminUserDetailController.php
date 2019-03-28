<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminNews;
use App\admin\AdminUser;
use Carbon\Carbon;



class AdminUserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('userrole');
    }
    public function index()
    {
        $userlist = AdminUser::GetAllUser();
        return view('admin.userdetail.list',compact('userlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=AdminNews::find($id);
        $userdetail = AdminUser::find($id);
        $month = new Carbon('first day of this month');
        $week = new Carbon('previous sunday');
        $postmonth = $userdetail->posts()->whereDate('created_at','>=',$month)->get();
        $postweek = $userdetail->posts()->whereDate('created_at','>=',$week)->get();
        $visitors=0;
        $thismonth = $userdetail->posts()->whereDate('created_at','>=',$month)->orderBy('post_like','DESC')->limit(5)->get();
        $thisweek = $userdetail->posts()->whereDate('created_at','>=',$week)->orderBy('post_like','DESC')->limit(5)->get();
        foreach($postmonth as $month){
            $visitors=$visitors + $month->post_like;
        }

        $result = array(
            'postmonth'         => $postmonth,
            'postweek'          =>$postweek,
            'userdetail'        =>$userdetail,
            'visitors'          =>$visitors,
            'thismonth'         =>$thismonth,
            'thisweek'          =>$thisweek,
        );
        return view('admin.userdetail.info',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
