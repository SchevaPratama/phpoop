<?php

class game extends produk implements infoproduk
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


    public function getinfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }

    public function getinfoproduk()
    {
        $str = "Game : " . $this->getinfo() . " ~ {$this->wktmain} Jam ";

        return $str;
    }
}
