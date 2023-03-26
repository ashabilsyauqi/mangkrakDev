<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Tampilkan Barang</title>
    <!-- Ambil Ini -->
    <?php
    include('proses/getmysql.php');
    $show = 'SELECT * FROM tabel_barang';
    $qr = mysqli_query($connect, $show);
    $tabel="barang";
    ?>
    <!-- sampe sini -->

</head>

<body>
    <!-- ambil ini -->
    <table class="table table-striped align-middle">
        <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Description</th>
            <th style="width: 0.1px;">Action</th>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($qr)) {
                echo "
                <tr>
                    <td><img src='$row[image]' style='max-height:70px;'/></td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['price'] . "</td>
                    <td>" . $row['amount'] . "</td>
                    <td>" . $row['deskripsi'] . "</td>
                    <td>
                        <div class='d-flex gap-1'>
                            <a href='editGoods.php?id=$row[id]&tabel=$tabel'><button class='btn btn-primary'>Edit</button></a>
                            <a href='proses/delProses.php?id=$row[id]&tabel=$tabel'><button class='btn btn-danger'>Delete</button></a>
                        </div>
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
    <!-- sampe sini -->
</body>

</html>