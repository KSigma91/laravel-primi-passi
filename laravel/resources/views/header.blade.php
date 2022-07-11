<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            width: 100%;
            height: 100vh;
            background: salmon;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: baseline;
            gap: 60px;
            padding: 30px;
            /* debug */
            background: lightslategrey;
        }

        header a {
            text-decoration: none;
            color: #222222;
            font-size: 20px;
        }

        header a:last-child {
            margin-left: 180px;
            padding: 8px 15px;
            border: 1px solid #1ed65f;
            border-radius: 30px;
            color: #1ed65f;
        }

    </style>
</head>
<body>

    <header>
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </header>

</body>
</html>
