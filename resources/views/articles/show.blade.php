@extends('layouts.app')
@section('content')
    <script type="text/javascript">
        <!--
        function confirmDeleteId(ID) {
            return window.confirm('Would you want to delete it?');
        }
            -->
    </script>
    <div class="container">
    <h1>{{$article->title}}</h1>

    @if(\Illuminate\Support\Facades\Auth::user()&&\Illuminate\Support\Facades\Auth::user()->isAdmin=='Y')
    <a href="/articles/{{$article->id}}/edit" style="font-size: smaller">编辑</a>
    <a href="/articles/{{$article->id}}/delete" style="font-size: smaller" onclick="return confirmDeleteId({{$article->id}})">删除</a>
    @endif
    <h6>{{$article->author}}发表于{{ $article->created_at }}</h6>

    <hr/>
        <article>
            <div class="body">
                {{$article->content}}
            </div>
        </article>
    <hr/>
        <button class="btn btn-primary" onclick="history.go(-1)">
            « 返回
        </button>
    </div>
@stop