<?php

class produk
{
    public  $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul,$this->penulis";
    }

    public function sayHello()
    {
        return "Trobos Aja Lah Anying";
    }
}

$pd1 = new produk();
$pd1->judul = "Sherlock holmes";
$pd1->penulis = "Sir Arthur Conan Doyle";
$pd1->penerbit = "Gramedia Surabaya";
$pd1->harga = 80000;

$pd2 = new produk();
$pd2->judul = "Harry Potter-And The Deathly Hollows";
$pd2->penulis = "J.K. Rowling";
$pd2->penerbit = "Gramedia Malang";
$pd2->harga = 95000;

echo "Novel 1:" . $pd1->getLabel();
echo "<br>";
echo "Novel 2:" . $pd2->getLabel();
