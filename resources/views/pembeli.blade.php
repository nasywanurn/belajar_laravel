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
        {{$data->nama}} - {{$data->jns_kelamin}} <br>
        {{$data->alamat}} - {{$data->kode_pos}}  <br>
        {{$data->kota}} - {{$data->tgl_lahir}}  <br>
        <hr>
        @endforeach
    </body>
</html>
