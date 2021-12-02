<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <P>Encuesta de sastifación</P>
    
    <strong><p>¿Cómo calificaría su experiencia global respecto a los servicios de salud que ha recibido a través de su IPS?</p></strong>
    <p>{{$msg['e1']}}</p>
    <p>{{$msg['e2']}}</p>
    <p>{{$msg['e3']}}</p>
    <p>{{$msg['e4']}}</p>
    <p>{{$msg['e5']}}</p>
    <strong><p>¿Recomendaría a sus familiares y amigos esta IPS?</p></strong>
    <p>{{$msg['r1']}}</p>
    <p>{{$msg['r2']}}</p>
    <p>{{$msg['r3']}}</p>
    <p>{{$msg['r4']}}</p>
</body>
</html>
