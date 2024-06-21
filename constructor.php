<?php
    
    Class Produk {
        public $judul;
        public $penulis;
        public $penerbit;
        public $harga;
        
        public function __construct($judul, $penulis, $penerbit, $harga) {
            
            print_r('Hello World' . '<br>' );
            
                    $this->judul = $judul . '<br>' ;
                    $this->penulis = $penulis . '<br>' ;
                    $this->penerbit = $penerbit . '<br>' ;
                    $this->harga = $harga . '<br>';
        }

        public function getJudul(){
            return  $this->judul;
        }  
        
        public function getPenulis(){
            return $this->penulis;
        }

        public function getPenerbit() {
            return $this->penerbit;
        }

        public function getHarga() {
            return $this->harga;
        }

    }

    $produk = new Produk('Naruto', 'Masashi Kisimoto', 'Sheran', 30000);
    // echo $produk->getJudul();
    // echo $produk->getPenulis();
    // echo $produk->getPenerbit();
    // echo $produk->getHarga();
    
   $produk2 = $produk->getJudul() . $produk->getPenulis() . $produk->getPenerbit() . $produk->getHarga();
   print_r($produk2);
    var_dump($produk)
?>