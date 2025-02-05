<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar formulario</title>
</head>
<body>
    <h1>Formulario enviado con exito</h1>
    <ul>
        <li>Nombre del evento -> {{ $datosEvento["nombre"] }} </li>
        <li>Lugar del evento -> {{ $datosEvento["lugar"] }}</li>
        <li>Correo -> {{ $datosEvento["correo"] }}</li>
    </ul>
</body>
</html>