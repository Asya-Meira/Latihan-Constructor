<?php

	class produk{
		public $namaBarang,
				$merk,
				$harga;

		//membuat constructor
		public function __construct($namaBarang="namaBarang", $merk="merk", $harga=0){
			$this->namaBarang = $namaBarang;
			$this->merk = $merk;
			$this->harga = $harga;
		}

		//membuat method
		public function getCetak(){
		return "$this->namaBarang, $this->merk , $this->harga";
				}
	}

	//membuat property
	$produk1= new produk("Sepatu","Tomkins",350000);
	$produk2= new produk("Sepatu","Adidas",400000);
	$produk3= new produk("Sepatu","NIKE",200000);

	echo " Nama Barang :".$produk1->getCetak();
	echo "<br>";
	echo " Nama Barang :".$produk2->getCetak();
	echo"<br>";
	echo " Nama Barang :".$produk3->getCetak();
?>