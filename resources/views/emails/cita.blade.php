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
    <p><Strong>Documento: {{$msg['document']}}</Strong></p>
    <p><Strong>Email: {{$msg['email']}}</Strong></p>
    <p><Strong>Movil: {{$msg['phone']}}</Strong></p>
    <p><Strong>Ciudad: {{$msg['city']}}</Strong></p>
    <p><Strong>Fecha de nacimiento: {{$msg['datehb']}}</Strong></p>
    <p><Strong>Dirección: {{$msg['direction']}}</Strong></p>
    <p><Strong>Fecha de la cita: {{$msg['date']}}</Strong></p>
    <p><Strong>Jornada: {{$msg['workingday']}}</Strong></p>
    <p>Contenido: {{$msg['message']}}</p>
</body>
</html>
