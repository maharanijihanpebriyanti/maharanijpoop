<?php 
abstract class Produk {
	private $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon= 0;

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
	public $jmlHalaman;
	public function __construct($judul = "judul" , $penulis = "penulis", $penerbit = "penerbit",$harga = 0, $jmlHalaman = 0){
		parent:: __construct($judul , $penulis , $penerbit ,$harga);
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
	public $daftarProduk = array();

	public function tambahproduk(
		produk $produk){
		$this->daftarProduk[] = $produk;
	}
public function cetak (){
	$str = "DAFTAR PRODUK : <br>";

	foreach ($this->daftarProduk as $p)
	{
	$str .="-{$p->getInfoProduk()} <br>";
}
		return $str;
		}
	}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100,0);


$produk2 = new Game("Unchaerted","Neil Druckmann","Sony Computer",300000,0,50);


$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk( $produk1);
$cetakproduk->tambahProduk( $produk2);
echo $cetakproduk->cetak();
?>