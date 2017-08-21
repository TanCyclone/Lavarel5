<?php

namespace App\Http\Controllers;

use App\article;
use App\article_tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index($id){
        $tag_id=article_tag::where('tag_id','=',$id)->get();
        foreach ($tag_id as $value){
            $articles[]=article::where('id','=',$value->article_id)->get();
        }

            return view('tags.index', compact('articles', $articles));


        }
}
