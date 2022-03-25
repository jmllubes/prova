<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>LLIBRES AMB ID I EL NOM </h1>

    @foreach ($llibres as $llibre)
        <p>{{$llibre['id']}} {{$llibre['name']}}</p>
    @endforeach

</body>
</html>