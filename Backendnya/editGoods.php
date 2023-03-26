</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Edit Barang</title>
    <!-- phpnya diambil -->
    <?php
    $id = $_GET['id'];
    include('proses/getmysql.php');
    $show = "SELECT * FROM tabel_barang WHERE id='$id'";
    $qr = mysqli_query($connect, $show);
    while ($data = mysqli_fetch_array($qr)) {
        $namaBarang = $data['name'];
        $deskripsi = $data['deskripsi'];
        $jumlahStok = $data['amount'];
        $hargaBarang = $data['price'];
    };
    ?>
</head>

<body>
    <!-- ambil dari sini -->
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="card border-0 bg-body-tertiary p-5 shadow p-3 mb-5 bg-white rounded ">

            <form action="proses/editProses.php" method="post">
                <div class="mb-3" style="display: none;">
                    <input type="text" id="tabel" name="tabel" value="barang" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="fotoBarang">Foto Barang</label>
                    <input type="file" id="img" name="img" accept="image/*" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="namaBarang">Nama Barang</label>
                    <input type="text" name="namaBarang" class="form-control" value="<?php echo$namaBarang?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?php echo$deskripsi?>">
                </div>
                <div class="mb-3">
                    <label for="jumlahStok">Stok Barang</label>
                    <input type="number" name="jumlahStok" class="form-control" value="<?php echo$jumlahStok?>">
                </div>
                <div class="mb-3">
                    <label for="hargaBarang">Harga</label>
                    <input type="number" name="hargaBarang" class="form-control" value="<?php echo$hargaBarang?>">
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </div>
            </form>
        </div>
        <img src="" alt="">
    </div>
    <!-- sampe sini -->
    <script src="./js/bootstrap.js"></script>
</body>

</html>