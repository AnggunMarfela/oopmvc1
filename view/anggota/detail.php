<?php 
$judul = $anggota['Nama'];
?>

<?php ob_start()?>
<h1><?=$anggota['Nama'];?></h1>
<p>Nama : <?=$anggota['Nama'];?></p>
<p>Tanggal_lahir : <?=$anggota['Tanggal_lahir'];?></p>
<p>Kota_lahir : <?=$anggota['Kota_lahir'];?></p>

<?php $isi=ob_get_clean();?>
<?php include "view/template.php."?>