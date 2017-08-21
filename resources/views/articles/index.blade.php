@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>Articles</h1>
        {{--<h5>Page {{ $articles->currentPage() }} of {{ $articles->lastPage() }}</h5>--}}
    <hr>
    <!-- 这里href可以换别的方式，比如：
            /articles/$article->id
            url('articles',$article->id)
        -->
    @foreach($articles as $article)
        <div class="container">
        <h2><a href="{{action('articlesController@show',[$article->id])}}" style="text-decoration: none">
                {{$article->title}}
            </a>
        </h2>
            <ul class="post-meta pad group">
                <i class="fa fa-clock-o"></i>{{$article->created_at}}<br/>
                @if($article->tags)
                    @foreach($article->tags as $tag)
                        <i class="fa fa-tag"></i>{{ $tag->name }}
                    @endforeach
                @endif
            </ul>

        <article>
            <div>
                {{$article->content}}
            </div>
        </article>
        </div>
    @endforeach
        <hr>
        {!! $articles->links() !!}
    </div>

@stop