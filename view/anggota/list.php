<?php 
// file : oopmvc/view/anggota/list.php
$judul = "Daftar Anggota";
ob_start()
?>
<h1>Daftar Anggota</h1>
    <ul>
        <?php 
            foreach ($anggota as $row):
        ?>
    </ul>
    <li>
        <a href="detail.php?Id=<?= $row['Id']?> "> <?= $row['nama'];?></a>
    </li>

<?php
endforeach ?>
<?php $isi = ob_get_clean() ?>
<?php include 'view/template.php'; ?>