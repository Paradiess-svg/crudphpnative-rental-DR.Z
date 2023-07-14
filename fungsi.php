<?php
include 'koneksi.php';
function tambah_data($data, $files){

    $plat_nomor = $data['plat_nomor'];
    $merek_mobil = $data['merek_mobil'];
    $status = $data['status'];

    echo $files['foto']['name'];

    $split = explode('.',$files['foto']['name']);
    $ekstensi = $split[count($split)-1];
    $foto = $plat_nomor.'.'.$ekstensi;
    $alamat_pool = $data['alamat_pool'];
    $dir = "img/";
    $tmpFile = $files['foto']['tmp_name'];

    move_uploaded_file($tmpFile, $dir.$foto);

    $query = "INSERT INTO tb_mobil VALUES(null, '$plat_nomor', '$merek_mobil', '$status', '$foto', '$alamat_pool')";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function ubah_data($data, $files){
    $id_mobil = $data['id_mobil'];
    $plat_nomor = $data['plat_nomor'];
    $merek_mobil = $data['merek_mobil'];
    $status = $data['status'];
    $alamat_pool = $data['alamat_pool'];

    $queryshow = "SELECT * FROM tb_mobil WHERE id_mobil = '$id_mobil';";
    $sqlshow = mysqli_query($GLOBALS['conn'], $queryshow);
    $result = mysqli_fetch_assoc($sqlshow);

    if($files['foto']['name'] ==""){
        $foto = $result['foto_mobil'];
    }else{
        $split = explode('.',$files['foto']['name']);
        $ekstensi = $split[count($split)-1];

        $foto = $result['plat_nomor'].'.'.$ekstensi;
        unlink("img/".$result['foto_mobil']);
        move_uploaded_file($files['foto']['tmp_name'], 'img/'.$foto);
    }
    
    $query = "UPDATE tb_mobil SET plat_nomor='$plat_nomor', merek_mobil = '$merek_mobil', status = '$status', foto_mobil = '$foto', alamat_pool = '$alamat_pool' WHERE id_mobil='$id_mobil';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function hapus_data($data){
    $id_mobil = $data['hapus'];

    $queryshow = "SELECT * FROM tb_mobil WHERE id_mobil = '$id_mobil';";
    $sqlshow = mysqli_query($GLOBALS['conn'] , $queryshow);
    $result = mysqli_fetch_assoc($sqlshow);

    unlink("img/".$result['foto_mobil']);

    $query="DELETE FROM tb_mobil WHERE id_mobil = '$id_mobil' ;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;

}

?>