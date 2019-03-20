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
        <script>
            let connection = new WebSocket('wss://kimyou1994-itp405-lab5-node.herokuapp.com');
            connection.onopen = () => {
                console.log('connected from the frontend');
            }

            connection.onerror = () => {
                console.log('failed to connect from frontend');
            }

            connection.onmessage = (event) => {
                console.log('message received', event.data );
            }

            document.getElementById('text').addEventListener('input', (event) => {
                event.preventDefault();

                let message = document.getElementById('text').innerHTML;
                connection.send(message);
            });
        </script>
    </body>
</html>
