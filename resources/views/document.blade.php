<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
    <body>
        <div id = "text" contenteditable="true">
            This text can be edited by the user.
        </div>
        <script src="{{ secure_asset(URL::to('js/main.js'))}}"></script>
    </body>
</html>
