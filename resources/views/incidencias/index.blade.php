<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incidencias</title>
</head>
<body>
    <h2>{{$titulo}}</h2>

    <ul>
    @foreach($incidencias as $incidencia)
        <li>
            <p>{{$incidencia->latitud}} - {{$incidencia->longitud}}</p>
            <p>{{$incidencia->nombre}} - {{$incidencia->estado}}</p>
        </li>
    @endforeach
    </ul>
</body>
</html>
