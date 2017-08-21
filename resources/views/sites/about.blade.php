@extends('app')
@section('content')
    @if($first=='TanCyclone')
    <div class="title">我的第一个框架网页{{$first}}{{$second}}</div>
        @else
    @section('foot')
    <script>alert('Fuck you!');</script>
    @stop
    @endif
@stop
