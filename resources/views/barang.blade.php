<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <center>Data Barang</center>
        @foreach ($barang as $data)
        Nama Barang : {{$data->nama}} <br>
        Harga Beli : {{$data->harga_beli}} <br>
        Varian : {{$data->varian}} <br>
        Harga Jual : {{$data->harga_jual}}  <br>
        <hr>
        @endforeach
    </body>
</html>
