<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>todo</title>

    </head>
    <body>
    <form action="/register" method="post">
        <input type="text">
        <button type="submit">登録</button>
    </form>
    <form action="/view">
        <button type="submit">確認</button>
    </form>
    </body>
</html>
