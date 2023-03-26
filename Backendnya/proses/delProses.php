<?php
    include('getmysql.php');
    function hapus($connect,$test){
        mysqli_query($connect,$test);
    }
    // ngambil value dari link
    $id=$_GET['id'];
    $tabel=$_GET['tabel'];
    $delGoods="DELETE FROM tabel_barang WHERE id='$id'";
    $delBiodata="DELETE FROM tabel_biodata WHERE id='$id'";
    // ini kondisinya
    if($tabel=='biodata'){
        hapus($connect,$delBiodata);
        header('Location:../tabelBiodata.php');
    }else if($tabel=='barang'){
        hapus($connect,$delGoods);
        header('Location:../tabelGoods.php');
    }
    
?>