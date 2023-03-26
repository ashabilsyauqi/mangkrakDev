<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Tampilkan Biodata</title>
    <!-- ini bagian penting -->
    <?php
    include('proses/getmysql.php');
    $show = 'SELECT * FROM tabel_biodata';
    $qr = mysqli_query($connect, $show);
    $tabel="biodata";
    ?>
    <!-- sampe sini -->

</head>

<body>
    <!-- ambil bagian ini -->
    <table class="table table-striped align-middle">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th style="width: 0.1px;">Action</th>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($qr)) {
                echo "
                <tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['phonenumber'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td>
                        <div class='d-flex gap-1'>
                            <a href='editBiodata.php?id=$row[id]&tabel=$tabel'><button class='btn btn-primary'>Edit</button></a>
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