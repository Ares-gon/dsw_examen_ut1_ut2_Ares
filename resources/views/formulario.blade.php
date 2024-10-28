<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de mensajes</h1>
    <div>
        <form action='{{ route('editarMensaje2', $mensaje['id'])}}' method="POST">
            @method('POST')
            @csrf

            <input type="text" name="text" id="text" placeholder="texto">
            <input type="text" name="subrayado" id="subrayado" placeholder="si quieres subrayarlo pon '1'">
            <input type="text" name="negrita" id="negrita" placeholder="si quieres destacarlo pon '1'">

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>