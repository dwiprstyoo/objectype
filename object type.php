<?php
class produk{
	public $namaBarang,
		   $merk,
		   $harga;

	public function getCetak(){
		return "$this->merk, (Rp $this->harga)";
	}
	public function __construct($namaBarang="nama barang", $merk="merk", $harga=0){
		$this->namaBarang = $namaBarang;
		$this->merk = $merk;
		$this->harga = $harga;
	}
} 
	class cetakInfoProduk{
		public function cetakInfo($produk){
			$str="Nama Barang, Merk (Rp ...)";
			return $str;
		}
	}

	$produk1 = new produk("Ideapad 310", "Lenovo", "7000000");
	$produk2 = new produk("Flashdisk", "Sandisk", "100000");
	$produk3 = new produk("Macbook Air", "Apple", "25000000" );
	$produk4 = new produk("Mouse", "Logitech", "120000");
	$infoProduk = new cetakInfoProduk();

	echo "Nama Barang Laptop: " . $produk1->getCetak();
	echo "<br>";
	echo "Nama Barang Aksesoris: " . $produk2->getCetak();
	echo "<br>";
	echo "Nama Barang Laptop: " . $produk3->getCetak();
	echo "<br>";
	echo "Nama Barang Aksesoris: " . $produk4->getCetak();
	echo "<br>";