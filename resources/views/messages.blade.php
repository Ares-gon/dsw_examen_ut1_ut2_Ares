<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    @if($message->subrayado == "1" && $message->negrita == "1")
                        <b><u><li>{{ $message->text }}</li></u></b>
                    @elseif($message->negrita == "1")
                        <b><li>{{ $message->text }}</li></b>
                    @elseif($message->subrayado == "1")
                        <u><li>{{ $message->text }}</li></u>
                    @else
                        <li>{{ $message->text }}</li>
                    @endif
                @endforeach
                <a href="{{route('editarMensaje',['id'=>$message])}}"><button>Editar</button></a>
            </ul>
        @endif
    </div>
</body>
</html>