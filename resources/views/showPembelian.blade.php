<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <center>Data Pembelian</center>

            Nama Barang : {{$pembelian->nama_barang}} <br>
            Nama Supplier : {{$pembelian->nama_supplier}} <br>
            qty : {{$pembelian->qty}} <br>
            tanggal : {{$pembelian->tgl}}  <br>
            <hr>

    </body>
</html>
