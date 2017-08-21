<?php

namespace App\Http\Controllers;

use App\article;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;

class articlesController extends Controller
{
    //
    public function index(){
        $articles=article::paginate(10);
        //按照发表日期远近来排序输出
        //原来是展示全部的函数   article::all()
        return view('articles.index',compact('articles',$articles));
    }

    public function show($id){
        $article=article::findOrFail($id);
//        dd($article);
        return view('articles.show',compact('article',$article));
    }
    public function create(){
        $tags=Tag::lists('name','id');
        return view('articles.create',compact('tags'));
    }
    public function store(Requests\StoreArticleRequest $request){
        //接收用post方式发送过来的数据
        //存入数据库并重定向
        //验证表单，这里演示的是验证控件是否有字符输入
//        dd($request->all());
        $input=$request->all();
        $input['intro']=mb_substr($request->get('content'),0,64);
        $article=article::create($input);
        $article->tags()->attach($request->input('tag_list'));
        return redirect('/articles');
    }
    public function edit($id){
        $article=article::findOrFail($id);
        return view('articles.edit',compact('article',$article));
    }
    public function Update(Request $request,$id){
        $article=article::findOrFail($id);
        $article->update($request->all());

        return redirect('/articles');
    }
    public function destroy($id){
        article::findOrFail($id)->delete();

        return redirect('/articles');
    }
}
