<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トレーニングの新規作成</title>
    </head>
    <body>
        <h1>{{$date}}</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>トレーニング名</h2>
                <input type="text" name="post[title]" placeholder="トレーニング名"/>
            </div>
            <input type="submit" value="新規登録"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>