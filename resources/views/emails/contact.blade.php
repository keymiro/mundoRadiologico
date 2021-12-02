<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de : {{$msg['name']}}</p>
    <p><Strong>Asunto: {{$msg['subject']}}</Strong></p>
    <p><Strong>Email: {{$msg['email']}}</Strong></p>
    <p>Contenido: {{$msg['message']}}</p>
</body>
</html>
