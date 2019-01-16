<?php 
class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktumain,
		   $type;

	public function __construct( $judul = "judul" ,$penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $type){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktumain = $waktumain;
		$this->type = $type;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
	public function  getinfoLengkap(){
		$str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		if($this->type == "Komik"){
			$str.= "-{$this->jmlHalaman}Halaman.";
		}else if ($this->type == "game"){
			$str .="~ {$this->waktumain}jam.";
		}
		return $str;
		}

}

class CetakInfoProduk{
	public function cetak($produk){
		$str = "{$produk->judul}| {$produk->getLabel()} (RP. {$produk->harga})";
		return $str;
	}
}
$produk1 = new produk("Naruto","Masashi Kishimoto","Shonen Jump",30000,100,0,"Komik");


$produk2 = new produk("Unchaerted","Neil Druckmann","Sony Computer",300000,0,50,"Game");


echo $produk1->getinfoLengkap();
echo "<br>";
echo $produk2->getinfoLengkap();
?>