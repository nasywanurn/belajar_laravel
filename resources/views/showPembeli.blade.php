<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <center>Data Pembeli</center>

            Nama : {{$pembeli->nama}} <br>
            Jenis Kelamin : {{$pembeli->jns_kelamin}} <br>
            Alamat : {{$pembeli->alamat}} <br>
            Kode Pos : {{$pembeli->kode_pos}}  <br>
            Kota : {{$pembeli->kota}} <br>
            Tanggal Lahir : {{$pembeli->tgl_lahir}}  <br>
            <hr>

    </body>
</html>
