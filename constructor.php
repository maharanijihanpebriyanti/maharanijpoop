<?php 


class Produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;


	public function __construct( $judul, $penulis, $penerbit, $harga ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}



}

//$produk1 = new produk();
//$produk1->judul = "Naruto";
//var_dump($produk1);

//$produk2 = new produk();
//$produk2->judul = "Unchaerted";
//var_dump($produk2);

$produk1 = new produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);


$produk2 = new produk("Unchaerted","Neil Druckmann","Sony Computer",300000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
var_dump($produk2);
?>