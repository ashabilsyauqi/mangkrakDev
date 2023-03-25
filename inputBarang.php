<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Input Barang</title>
</head>
<?php
   if(isset($_POST['submit'])) {
        $img = $_POST['img'];
        $namaBarang = $_POST['namaBarang'];
        $deskripsi = $_POST['deskripsi'];
        $jumlahStok = $_POST['jumlahStok'];
        $hargaBarang = $_POST['hargaBarang'];

        // sisa buat data diatas input ke database
    }

?>
<body>
<div class="d-flex justify-content-center align-items-center vh-100 ">
    <div class="card border-0 bg-body-tertiary p-5 shadow p-3 mb-5 bg-white rounded ">
        
        <form action="/">
        <div class="mb-3">
                <label for="fotoBarang">Foto Barang</label>
                <input type="file" id="img" name="img" accept="image/*" class="form-control">
            </div>
            <div class="mb-3">
                <label for="namaBarang">Nama Barang</label>
                <input type="text" name="namaBarang" class="form-control">
            </div>
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jumlahStok">Stok Barang</label>
                <input type="nuumber" name="jumlahStok" class="form-control">
            </div>
            <div class="mb-3">
                <label for="hargaBarang">Harga</label>
                <input type="number" name="hargaBarang" class="form-control">
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <button type="submit" class="btn btn-primary" name="submit">submit</button>
            </div>
        </form>

    </div>
</div>
<script src="./js/bootstrap.js"></script>
</body>
</html>