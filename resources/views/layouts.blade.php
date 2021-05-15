<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viesport" content="width device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
        crossorigin="anonymous">
        <title人生逆転サロン</title>
    </head>
    <body>
        <header class="navbar navbar-dark bg-danger">
            <div class="container">
                <a class="navbar-brand" href="{{url('')}}">
                    Gyakuten
                </a>
            </div>
        </header>
 
    @yield('content')
 
    </body>
</html>