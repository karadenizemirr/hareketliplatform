<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<style>
    .container {
        padding: 20px;
    }
    .card {
        border: 2px solid black;
        padding:2em;
        width: 400px;
        position: absolute;
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
    }
    .card li {
        color: black;
        font-style: oblique
    }
    .card .title {
        text-align: center;
    }
    .card .footer {
        text-align: center;
        font-size: 20px;
    }

</style>
<body>
<div class="container">
    <div class="card">
        <div class="title">
            <h1>
                Mesaj isteği var.
            </h1>
        </div>
        <div class="content">
            <p>
                Yeni bir mesaj isteğiniz var.
            </p>
            <a href="{{route('contact-list')}}">
                Gelen kutusuna git.
            </a>
        </div>
        <div>
            {{$contact}}
        </div>
        <div class="footer">
            <p>{{config('app.name')}}</p>
        </div>

    </div>
</div>
</body>
</html>
