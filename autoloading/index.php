<?php

require_once 'App/init.php';

$pd1 = new novel(
    "Sherlock Holmes",
    "Sir Arthur Conan Doyle",
    "Gramedia Surabaya",
    80000,
    550
);

$pd2 = new game(
    "Death Stranding",
    "Hideo Kojima",
    "Sony Entertaiment",
    300000,
    80
);

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk($pd1);
$cetakproduk->tambahproduk($pd2);
echo $cetakproduk->cetak();
