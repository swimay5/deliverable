<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>

    <style>
        body{
            background-size: cover;
            background-position: bottom center;
        }
        #myparticle{
            position: relative;
            width: auto;
            height: 97vh;
            background-color: rgba(88, 36, 135, 0.7);
            overflow: hidden;
        }
        #title{
            position: absolute;
            top: 40%;
            left: 50%;
            font-size: 80px;
            z-index: 1;
            transform: translateX(-50%) translateY(-50%);
        }
        #auth{
            position: relative;
            padding: 10px;
            z-index: 10;
            text-align: center;
            top: 63%;
        }
        .btn1{
            border: 2px solid black;
            border-radius: 5px;
            margin: 0 8px;
            padding: .7% 1.7%;
            font-weight: bold;
            text-decoration: none;
            transition: .2s;
            background-color: black;
            color: white;
        }
        .btn1:hover{
            transition: .2s;
            background-color: white;
            color: black;
        }
        .btn2{
            border: 2px solid black;
            border-radius: 5px;
            margin: 0 8px;
            padding: .7% 3%;
            font-weight: bold;
            text-decoration: none;
            transition: .2s;
            background-color: black;
            color: white;
        }
        .btn2:hover{
            transition: .2s;
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <section id="myparticle">
        <h1 id="title">With Athletes</h1>
            <div id="auth">
                <a class="btn1" href="{{ route('login') }}">ログイン</a>
                <a class="btn2" href="{{ route('register') }}">登録</a>
            </div>
    </section>

    <script>
        particlesJS.load('myparticle',"{{ asset('/json/particlesjs-config.json')}}");
    </script>
</body>
</html>