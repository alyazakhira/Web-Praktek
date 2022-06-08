<?php
    $nama_lengkap = $_POST['nama'];
    $id_pengunjung = $_POST['ID'];
    $telepon = $_POST['telepon'];
    $tempat = $_POST['tempat'];
    $tgl_kunjung = $_POST['tgl_kunjung'];
    $dewasa = $_POST['dewasa'];
    $anak = $_POST['anak'];


    $conn = mysqli_connect('localhost','root','','tiket_wisata');
    $query1 = "INSERT INTO data_pengunjung VALUES ('$nama_lengkap','$id_pengunjung','$telepon','$tempat','$tgl_kunjung','$dewasa','$anak')";
    mysqli_query ($conn, $query1);


    echo 
        "Nama Pemesan        :".$nama_lengkap."<br/>".
        "Nomor Identitas     :".$id_pengunjung."<br/>".
        "No.HP               :".$telepon."<br/>".
        "Tempat Wisata       :".$tempat."<br/>".
        "Tanggal Kunjung     :".$tgl_kunjung."<br/>".
        "Pengunjung Dewasa   :".$dewasa."<br/>".
        "Pengunjung Anak     :".$anak

?>