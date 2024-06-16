<?php

function index() {
    $anggota = getAnggota();
    require "view/anggota/list.php";
}

function detail($Id) {
    $anggota = getAnggotaById($Id);
    require "view/anggota/detail.php";
}