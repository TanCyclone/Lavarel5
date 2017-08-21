@extends('layouts.app')
@section('content')
    @if($articles)
        <div class="container">
        <h1>Articles</h1>
        <hr/>

        @foreach($articles as $article)
        @foreach($article as $value)
            <h2><a href="{{action('articlesController@show',[$value->id])}}" >{{$value->title}}</a></h2>
                <ul class="post-meta pad group">
                    <i class="fa fa-clock-o"></i>{{$value->created_at}}<br/>
                    @if($value->tags)
                        @foreach($value->tags as $tag)
                            <i class="fa fa-tag"></i>{{ $tag->name }}
                        @endforeach
                    @endif
                </ul>
            @endforeach
        @endforeach
        <hr/>
        <button class="btn btn-primary" onclick="history.go(-1)">
            « 返回
        </button>
    </div>
        @else
        {{redirect('/')}}
    @endif

@stop