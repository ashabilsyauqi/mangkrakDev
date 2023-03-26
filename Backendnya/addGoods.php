</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Input Barang</title>
</head>

<body>
    <!-- dari sini -->
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="card border-0 bg-body-tertiary p-5 shadow p-3 mb-5 bg-white rounded ">

            <form action="proses/addProses.php" method="post">
                <div class="mb-3" style="display: none;">
                    <input type="text" id="tabel" name="tabel" value="barang" class="form-control">
                </div>
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
                    <input type="number" name="jumlahStok" class="form-control">
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
        <img src="" alt="">
    </div>
    <!-- sampe sini -->
    <script src="./js/bootstrap.js"></script>
</body>

</html>