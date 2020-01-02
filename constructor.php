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

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

$pd1 = new produk(
    "Sherlock Holmes",
    "Sir Arthur Conan Doyle",
    "Gramedia Surabaya",
    80000
);

$pd2 = new produk(
    "Harry Potter And The Deathly Hollows",
    "J.K. Rowling",
    "Gramedia Malang",
    95000
);


echo "Novel 1:" . $pd1->getLabel();
echo "<br>";
echo "Novel 2:" . $pd2->getLabel();
