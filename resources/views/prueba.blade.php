<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prueba tecnica</title>

</head>

<body class="invisible">
    <h1>Nombre: {{$aplicante['nombre']}} </h1>
    @if ($aplicante['aprobado']==true)
        <h2>APROBADO</h1>
        @else
            <h2>REPROBADO</h1>
    @endif
</body> 

</html>

