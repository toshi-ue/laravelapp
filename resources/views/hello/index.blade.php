<!DOCTYPE html>
<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }
        h1 {
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0px -100px 0px;
        }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>{{ date("Y年n月j日 h時i分") }}</p>
    <p>msg: {{ $msg }}</p>

    <h3>if文</h3>
    @if ($msg != '')
    <p>こんにちは、{{ $msg }}さん</p>
    @else
    <p>なにか書いてください。</p>
    @endif

    <h3>&#064;foreachディレクティブの例</h3>
    <ol>
    @foreach ($array as $item)
    <li>{{ $item }}</li>
    @endforeach
    </ol>


    <form action="/hello" method="post">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>

</html>
