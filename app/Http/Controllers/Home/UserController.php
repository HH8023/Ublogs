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
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        // echo 1234543;
        return view('home.user.password',compact('configs','links'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function article(Request $request)
    {
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        return view('home.user.article',compact('configs','links'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request)
    {
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        return view('home.user.comment',compact('configs','links'));
    }

}
