<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        {{ 'Nombre del cliente: ' }}
        {{ $data['name'] }}
        <br><br>
        {{ 'Email: ' }}
        {{ $data['email'] }}
        <br><br>
        {{ 'Motivo: ' }}
        {{ $data['motivo'] }}
        <br><br>
        {{ 'Mensaje: ' }}
        {{ $data['body'] }}
        <br><br>
</body>
</html>
