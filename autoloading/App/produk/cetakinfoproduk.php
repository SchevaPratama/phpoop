<?php

class cetakinfoproduk
{
    public $daftarproduk = array();

    public function tambahproduk(produk $produk)
    {
        $this->daftarproduk[] = $produk;
    }

    public function cetak()
    {
        $str = "Daftar Produk: <br>";

        foreach ($this->daftarproduk as $p) {
            $str .= "- {$p->getinfoproduk()} <br>";
        }

        return $str;
    }
}
