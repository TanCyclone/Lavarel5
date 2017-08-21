<?php

namespace App\Http\Controllers;

use App\article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class SitesController extends Controller
{
    //
    public function index(){
        $articles=article::latest()->get();
//        dd($articles);
        return view('welcome',compact('articles',$articles));
    }
    public function about(){
        $first='TanCyclone';
        $second='CycloneTan';
        return view('sites.about',compact('first','second'));
    }
    public function errors(){
        return view('errors.503');
    }
}
