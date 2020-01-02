<?php

class produk
{
    public  $judul,
        $penulis,
        $penerbit,
        $harga;

    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getinfoproduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

        return $str;
    }
}

class novel extends produk
{
    public $jmlhalaman;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlhalaman = 0
    ) {
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );

        $this->jmlhalaman = $jmlhalaman;
    }

    public function getinfoproduk()
    {
        $str = "Novel : " . parent::getinfoproduk() . " - {$this->jmlhalaman} Halaman ";

        return $str;
    }
}

class game extends produk
{
    public $wktmain;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $wktmain = 0
    ) {
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );

        $this->wktmain = $wktmain;
    }

    public function getinfoproduk()
    {
        $str = "Game : " . parent::getinfoproduk() . " ~ {$this->wktmain} Jam ";

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

echo $pd1->getinfoproduk();
echo "<br>";
echo $pd2->getinfoproduk();
