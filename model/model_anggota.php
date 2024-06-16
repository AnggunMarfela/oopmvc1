<?php 
// susunan file : oopmvc/model/model_anggota.php
function openDbConnection()  { // Fungsi untuk membuka koneksi ke database
    $link = new PDO("mysql:host=localhost;dbname=db_oopmvc", "root", "");
    return $link;
}
function closeDbConnection(&$link) {  // Fungsi untuk membuka koneksi ke database
    $link = null;
}
function getAnggota(){ // fungsi untuk memanggil tabel anggota dari database
    $link = openDbConnection();
    $result = $link->query("SELECT *from anggota");
    $anggota = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $anggota[]= $row;
    }
    closeDbConnection($link);
    return $anggota;
}

function getAnggotabyId($id) {
    $link = openDbConnection();

    $query = "SELECT *FROM anggota WHERE Id =:id";
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $row =$statement->fetch(PDO::FETCH_ASSOC);
    closeDbConnection($link);
    return $row;
}
?>