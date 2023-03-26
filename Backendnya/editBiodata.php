</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Edit Biodata</title>
    <!-- bagian phpnya aj yang diambil -->
    <?php
    $id = $_GET['id'];
    include('proses/getmysql.php');
    $show = "SELECT * FROM tabel_biodata WHERE id='$id'";
    $qr = mysqli_query($connect, $show);
    while ($data = mysqli_fetch_array($qr)) {
        $namaBiodata = $data['name'];
        $email = $data['email'];
        $phone = $data['phonenumber'];
        $address = $data['address'];
    };
    ?>
</head>

<body>
    <!-- ambil dari sini -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card border-0 bg-body-tertiary p-5 shadow p-3 mb-5 bg-white rounded" style="min-width: 22rem;">
            <form action="proses/editProses.php" method="post">
                <div class="mb-3" style="display: none;">
                    <input type="hidden" id="tabel" name="tabel" value="biodata" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="namaBiodata">Name</label>
                    <input type="text" name="namaBiodata" class="form-control" value="<?php echo $namaBiodata?>">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email?>">
                </div>
                <div class="mb-3">
                    <label for="phonenumber">Phone Number</label>
                    <input type="text" name="phonenumber" class="form-control" value="<?php echo $phone?>">
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <textarea type="textarea" name="address" class="form-control" rows="3"><?php echo $address?></textarea>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </div>
            </form>
        </div>
        <img src="" alt="">
    </div>
    <!-- ampe sini -->
    <script src="./js/bootstrap.js"></script>
</body>

</html>