<?php
include_once('getmysql.php');
    $tabel = $_POST['tabel'];//ini nanti ada di form cmn kehidden
    // ngambil nilai untuk input barang
    $img = $_POST['img'];
    $namaBarang = $_POST['namaBarang'];
    $deskripsi = $_POST['deskripsi'];
    $jumlahStok = $_POST['jumlahStok'];
    $hargaBarang = $_POST['hargaBarang'];
    $addbarang="INSERT INTO tabel_barang(image,name,price,amount,deskripsi) VALUES ('$img','$namaBarang','$hargaBarang','$jumlahStok','$deskripsi')";
    // ngambil nilai untuk input biodata
    $namaBiodata = $_POST['namaBiodata'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['address'];
    $addbiodata="INSERT INTO tabel_biodata(name,email,phonenumber,address) VALUES ('$namaBiodata','$email','$phone','$address')";
    function tambah($connect,$fungsi){ // Function
        mysqli_query($connect,$fungsi);
    }
    //kondisi
    if($tabel=="barang"){
        tambah($connect,$addbarang);
        header('Location:../addGoods.php');
    }else if($tabel=="biodata"){
        tambah($connect,$addbiodata);
        header('Location:../addBiodata.php');
    }
?> 