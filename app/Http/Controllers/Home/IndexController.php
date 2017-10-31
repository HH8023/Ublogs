<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo 1111;
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *  列表页对应的控制器方法
     * @return \Illuminate\Http\Response
     */
    public function cate($id)
    {
        //
        echo 222;
    }

    /**
     * Store a newly created resource in storage.
     *  详情页对应的控制器方法
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function article($id)
    {
        //
        echo 3333;
    }

   
}
