<?php
 class motor{
 	public $merk = 'honda';
 	public $cc = 180;

 	public function merknya()
 	{
 		echo 'merknya '.$this-> merk;
 	}
 }
 $motor = new motor;
 $motor->merknya();
 //echo "merek motor ini ".$motor->merk;
 //echo "<br/>";
 //echo  "cc " .$motor->cc; 

echo "<br/>";
echo "<br/>";
echo "<br/>";
 class sekolah{
 	public $kepsek = 'H.Utun';
 	public $siswa = 300;
 }
 $sekolah = new sekolah;
 echo "nama kepala sekolah : ".$sekolah->kepsek;
 echo "<br/>";
 echo  "Jumlah siswa : " .$sekolah->siswa;

 echo "<br/>";
echo "<br/>";
echo "<br/>";
 class ayam{
 	public $suara = 'petok';
 	public $jenis = 'betina';
 }
 $ayam = new ayam;
 echo "suara ayam : ".$ayam->suara;
 echo "<br/>";
 echo  "Jenis ayam ini : " .$ayam->jenis;

 echo "<br/>";
echo "<br/>";
echo "<br/>";
 class hp{
 	public $merk = 'xiomi';
 	public $harga = 2000;
 }
 $hp = new hp;
 echo "handphone saya ".$hp->merk;
 echo "<br/>";
 echo  "harganya " .$hp->harga;

 echo "<br/>";
echo "<br/>";
echo "<br/>";
 class pakaian{
 	public $ukuran = 'XL';
 	public $jenis = 'kemeja';
 }
 $pakaian = new pakaian;
 echo "ukuran pakaian ini ".$pakaian->ukuran;
 echo "<br/>";
 echo  "Jenisnya " .$pakaian->jenis;
?>
