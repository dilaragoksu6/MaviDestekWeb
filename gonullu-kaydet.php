<?php

require 'inc/config.php';

if($_POST)
{
 $adi_soyadi = $_POST['adi_soyadi'];
 $yas = $_POST['yas'];
 $sehir = $_POST['sehir'];
 $email = $_POST['email'];
 $telefon = $_POST['telefon'];
 $mesaj = $_POST['mesaj'];

 DB::insert("INSERT INTO gonullu(adi_soyadi,yas,sehir,email,telefon,mesaj) VALUES(?,?,?,?,?,?)",array(
    $adi_soyadi,
    $yas,
    $sehir,
    $email,
    $telefon,
    $mesaj
 ));
 header("Location:gonullu.php?success=1");
}    
    
?>