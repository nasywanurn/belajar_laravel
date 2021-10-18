<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <center>Data Supplier</center>
        @foreach ($suplier as $data)
        {{$data->nama}} - {{$data->kode_pos}} <br>
        {{$data->alamat}} - {{$data->kota}}  <br>
        <hr>
        @endforeach
    </body>
</html>
