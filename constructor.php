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
                    $this->harga = $harga . '<br>' ;
        }

        public function get_Judul(){
            return  $this->judul;
        }  
        
        public function get_Penulis(){
            return $this->penulis;
        }

        public function get_Penerbit() {
            return $this->penerbit;
        }

        public function get_Harga() {
            return $this->harga;
        }

    }

    $produk = new Produk('Naruto', 'Masashi Kisimoto', 'Sheran', 30000);
    echo $produk->get_Judul();
    echo $produk->get_Penulis();
    echo $produk->get_Penerbit();
    echo $produk->get_Harga(); 
    var_dump($produk)
?>