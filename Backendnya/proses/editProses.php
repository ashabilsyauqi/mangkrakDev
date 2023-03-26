<?php
    include('getmysql.php');
    $id=$_GET['id'];
    $tabel=$_POST['tabel'];//ini dari hasil input form yang kehidden
    function ubah($connect,$data){
        mysqli_query($connect,$data);
    }
    // ngambil data form edit biodata
    $namaBiodata = $_POST['namaBiodata'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['address'];
    $editBiodata="UPDATE tabel_biodata SET name='$namaBiodata',email='$email',phonenumber='$phone',address='$address'";
    // ngambil data form edit barang
    $img = $_POST['img'];
    $namaBarang = $_POST['namaBarang'];
    $deskripsi = $_POST['deskripsi'];
    $jumlahStok = $_POST['jumlahStok'];
    $hargaBarang = $_POST['hargaBarang'];
    $editBarang="UPDATE tabel_barang SET image='$img',name='$namaBarang',price='$hargaBarang',amount='$jumlahStok',deskripsi='$deskripsi'";

    // kondisi
    if($tabel=="biodata"){
        ubah($connect,$editBiodata);
        header('Location:../tabelBiodata.php');
    }else if($tabel=="barang"){
        ubah($connect,$editBarang);
        header('Location:../tabelGoods.php');
    }
?>