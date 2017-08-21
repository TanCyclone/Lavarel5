@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">近期更新</div>
                @foreach($articles as $article)
                <div class="panel-body">
                    <li>
                        <a href={{action('articlesController@show',[$article->id])}}>{{$article->title}}</a>
                        {{$article->publish_date}}</li>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
