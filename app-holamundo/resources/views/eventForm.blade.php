<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/eventoForm.css')
    <title>Formulario evento</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="http://localhost/workspace_laravel/app-holamundo/public/eventos/alta" method="POST">
        <label for="nombre"> nombre Evento</label>
        <input type="text" name="nombre" id="nombre">

        <label for="lugar"> lugar del Evento</label>
        <input type="text" name="lugar" id="lugar">

        <label for="correo" > Correo</label>
        <input type="text" name="correo" id="correo">

        <button>enviar</button>

    </form>

</body>
</html>