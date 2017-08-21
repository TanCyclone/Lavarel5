<?php

namespace App\Http\Controllers;

use App\article;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=article::latest()->paginate(10);
        //按照发表日期远近来排序输出
        //原来是展示全部的函数   article::all()
        return view('articles.index',compact('articles',$articles));
    }
}
