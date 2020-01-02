<?php

class produk
{
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlhalaman,
        $wktmain,
        $tipe;

    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlhalaman = 0,
        $wktmain = 0,
        $tipe
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->wktmain = $wktmain;
        $this->tipe = $tipe;
    }

    public function getinfolengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlhalaman} Halaman";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->wktmain} Jam ";
        }

        return $str;
    }
}

class cetakinfoproduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$pd1 = new produk(
    "Sherlock Holmes",
    "Sir Arthur Conan Doyle",
    "Gramedia Surabaya",
    80000,
    550,
    0,
    "Komik"
);

$pd2 = new produk(
    "Death Stranding",
    "Hideo Kojima",
    "Sony Entertaiment",
    300000,
    0,
    80,
    "Game"
);

echo $pd1->getinfolengkap();
echo "<br>";
echo $pd2->getinfolengkap();
