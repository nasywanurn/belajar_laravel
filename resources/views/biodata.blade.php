<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <center>Biodata Siswa</center>
        @foreach ($bio as $data)
        Name : {{$data->name}} <br>
        Gender : {{$data->gender}} <br>
        Height : {{$data->height}} <br>
        Weight : {{$data->weight}}  <br>
        Born Date : {{$data->bornDate}} <br>
        <hr>
        @endforeach
    </body>
</html>
