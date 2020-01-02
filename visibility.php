<?php

class produk
{
    private  $judul,
        $penulis,
        $penerbit,
        $harga;

    protected $diskon = 0;

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

    public function setjudul($judul)
    {
        $this->judul = $judul;
    }

    public function getjudul()
    {
        return $this->judul;
    }

    public function setpenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getpenulis()
    {
        return $this->penulis;
    }

    public function setpenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getpenerbit()
    {
        return $this->penerbit;
    }

    public function setharga($harga)
    {
        $this->harga = $harga;
    }

    public function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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


    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
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
echo "<hr>";

echo $pd1->getharga();
echo "<hr>";

$pd1->setjudul("Rhea Blessing");
echo $pd1->getjudul();
