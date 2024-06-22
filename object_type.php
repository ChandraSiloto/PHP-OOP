<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {

        echo 'Hello World';

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function __destruct()
    {
        if (isset($this->judul) && isset($this->penulis) && isset($this->penerbit) && isset($this->harga)) {
            echo 'Yang di atas sudah tepat' . '<br>';
        } else {
            echo ' tidak ada lagi';
        }
    }

   

    public function getJudul()
    {

        return $this->judul;
    }

    public function getPenulis()
    {

        return $this->penulis;
    }

    public function getPenerbit()
    {

        return $this->penerbit;
    }

    public function getHarga()
    {

        return $this->harga;
    }



}
Class CetakProduk {
        public function GetCetakProduk($produk) {
            $cetakHello = 'Hellow World';

            $cetakProduk =  "{$produk->judul} | {$produk->penulis} | {$produk->penerbit} | {$produk->harga}" .'<br>' ;
            return $cetakProduk;
        }
   }


 


$produk = new Produk('Naruto', 'Shipuden', 'Tera', '3000 ' );
echo '<br>';
echo 'Cetak Judul ' . $produk->getJudul() . '<br>';
echo 'Cetak Penulis ' . $produk->getPenulis() . '<br>';
echo 'Cetak Penerbit ' . $produk->getPenerbit() . '<br>';
echo 'Cetak harga ' . $produk->getHarga() . '<br>';

$Cetak = new CetakProduk();
echo  $Cetak->GetCetakProduk( $produk) ;

// var_dump($produk);
