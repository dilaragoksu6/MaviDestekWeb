<?php
$host="localhost";
$kulalnici="root";
$sifre="";
$veritabani="mavi";
$tablo="gonullu";
$baglanti=mysqli_connect($host,$kulalnici,$sifre);
if ($baglanti)
{
	echo "bağlantı sağlandı";
}
else
{
	echo"bağlantı sağlanamadı";
}
@mysqli_select_db($baglanti,$veritabani) or die("veritabanına bağlanamadık");

?>