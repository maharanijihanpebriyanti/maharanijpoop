<?php 


class Produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;


	public function __construct( $judul = "judul" ,$penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}



}

class CetakInfoProduk{
	public function cetak($produk){
		$str = "{$produk->judul}| {$produk->getLabel()} (RP. {$produk->harga})";
		return $str;
	}
}




$produk1 = new produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);


$produk2 = new produk("Unchaerted","Neil Druckmann","Sony Computer",300000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1)
?>