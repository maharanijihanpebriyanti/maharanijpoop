<?php 
class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon;

	public function __construct( $judul = "judul" ,$penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function setjudul ($judul){
		$this->judul = $judul;
	}

	public function getjudul(){
		return $this->judul;
	}
	public function setpenulis($penulis){
		$this->penulis = $penulis;
	}
	public function getpenulis(){
		return $this->penulis;
	}
	public function setpenerbit(){
		$this->penerbit = $penerbit;
	}
	public function getpenerbit(){
		return $this->penerbit;
	}
	public function setdiskon($diskon){
		$this->diskon = $diskon;
	}
	public function getdiskon(){
		return $this->diskon;
	}
	public function setharga($harga){
			$this->harga = $harga;
	}
	public function getharga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
		}
}

class Komik extends Produk{
	public function __construct($judul = "judul" , $penulis = "penulis", $harga = 0, $jmlHalaman = 0){
		parent :: __construct($judul , $penulis , $penerbit ,$harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfoProduk(){
		$str = "Komik :" . parent::
		getInfoProduk()." - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}
class Game extends Produk{
	public $waktumain;
	public function __construct( $judul = "judul" ,$penulis = "penulis", $penerbit = "penerbit", $harga = 0 , $waktumain = 0){
		parent :: __construct($judul , $penulis , $penerbit ,$harga);
		$this->waktumain = $waktumain;
}


	public function setdiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getInfoProduk(){
		$str = "Game :" . parent::
		getLabel()."~ {$this->waktumain}Jam.";
		return $str;
	}

}

class CetakInfoProduk{
	public function cetak ( produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new produk("Naruto","Masashi Kishimoto","Shonen Jump",30000,100,0);


$produk2 = new produk("Unchaerted","Neil Druckmann","Sony Computer",300000,0,50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setdiskon(50);
echo $produk2->getharga();
echo "<hr>";

$produk1->setpenulis("jihan");
echo $produk1->getpenulis();
?>