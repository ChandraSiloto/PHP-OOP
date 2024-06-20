<?php
    
    // class Produk { 

    //     public $judul = 'Naruto' .  '<br>';
    //     public $penulis = 'Masashi Kishimoto' . '<br>';
    //     public $penerbit = 'Shueisha' . '<br>';  
    //     public $harga = 'Rp '. 30000 ;
        

    //     public function getHello() {
    //         // $Katakan_Halo = 'HelloWorld';
    //         // return $Katakan_Halo;
            
    //         return '<br>'. 
    //                 $this->judul . 
    //                 $this->penulis . 
    //                 $this->penerbit .
    //                 $this->harga;
           
    //     }
    // }

    // $produk = new Produk();
    // // $produk->judul = 'Shipuden';  // Menimpa value dari property judul
    // var_dump($produk);
    // // echo $produk->judul; // Naruto
    // // // var_dump($produk->getHello());
    // echo $produk->getHello();

    
    class Produk {
        public $judul = 'Naruto';
        public $penulis = 'Masashi Kishimoto';
        public $penerbit = 'Shueisha';
        public $harga = 30000 ;
    }
    

    $produk = new Produk() ;
    // var_dump($produk);
    echo $produk->judul . "<br>";
    echo $produk->penulis . "<br>";
    echo $produk->penerbit . "<br>";
    echo "Rp " . $produk->harga . "<br>";

    
?>