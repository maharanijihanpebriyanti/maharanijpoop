<?php 


class Produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

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

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis= "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;


$produk4 = new produk();
$produk4->judul = "Unchaerted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>