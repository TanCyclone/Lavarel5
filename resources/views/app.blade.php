<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 微软雅黑;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .form-control{
            border:1px solid;
            border-color:black;
            padding:10px;

        }
        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            font-family: 微软雅黑;
        }
        .text{
            font-size: smaller;
            font-family: 新宋体;
        }
    </style>
</head>
<body>

    @yield('content')
    @yield('foot')
</body>
</html>