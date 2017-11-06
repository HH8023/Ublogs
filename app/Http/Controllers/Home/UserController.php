<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        // $user = DB::table('users')->get();
        // dd($user);
        return view('home.user.index',compact('configs','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doPwd()
    {
        // echo 1234543;
        return view('home.user.password');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function article(Request $request)
    {
        return view('home.user.article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request)
    {
        return view('home.user.comment');
    }

}
