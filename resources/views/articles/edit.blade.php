@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>修改</h1>
    {!! Form::model($article,['method'=>'PATCH','url'=>'/articles/'.$article->id]) !!}
    <div class="container">
        {!! Form::Label('标题') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="container">
        {!! Form::Label('内容') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
    <div class="container">
        {!! Form::Label('编辑日期') !!}
        {!! Form::input('date','publish_date',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
    <div class="container">
        {!! Form::submit('修改文章',['class'=>'btn btn-success']) !!}
        {!! Form::Button('返回',['class'=>'btn btn-success','onclick'=>'history.go(-1)']) !!}
    </div>
    {!! Form::close() !!}

    <!--
    如果添加请求不可用，返回给视图错误，视图接收这个错误之后循环输出
-->
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    </div>
@stop