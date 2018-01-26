﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mühendislik Projesi</title>
<link href="main.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	font-size: x-large;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>

<div class="main">

<div class="header"> 
<img src="banner.jpg" width="100%" height="100%" />
</div>
<body background="bg.jpg">

<div class="icerik">

<?php
	$user="root";
	$pass="";
	$host="localhost";
	$db="oyunlistesi";
	$baglan=mysqli_connect($host,$user,$pass);
	mysqli_select_db($baglan,'oyunlistesi');
?>

<div class="menu">
<form action="" method="post">
<table width="570" height="290" cellpadding="5" cellspacing="5">
    <tr>
    <td width="210">Oyun Kayıt Kodu:</td>
    <td width="323"><input type="text1" name="seri" /></td>
    </tr>
    <td>Oyun Adı:</td>
    <td><input type="text1" name="ad" /></td>
    </tr>
    <td>Oyun Yapımcısı:</td>
    <td><input type="text1" name="yapimci" /></td>
    </tr>
    <tr>
    <td>Oyunun Türü:</td>
    <td><input type="text1" name="tur" /></td>
    </tr>
    <td>Çıkış Tarihi:</td>
    <td><input type="text1" name="yil" /></td>
    </tr>
    <tr>
    </tr>
    <tr>
    <td height="34"></td>
    <td><input type="submit" value="Oyun Ekle" /></td>
    </tr>
    
    </table>
</form>
</div>

<?php 
        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $seri      =    $_POST["seri"];
            $ad    =    $_POST["ad"];
            $yapimci    =    $_POST["yapimci"];
			$tur    =    $_POST["tur"];
			$yil    =    $_POST["yil"];
			
            // Veritabanına Ekleyelim.
            $ekle        =    mysqli_query($baglan,"insert into bilgiler (kayit_kodu,oyun_adi,yapimci,turu,cikis_tarihi) values ('$seri','$ad','$yapimci','$tur','$yil')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
    ?>



<div class="giris">
<div class="vertical-menu">
  <a href="ekle.php" class="active"><strong>Oyun Ekle</strong></a>
  <strong><a href="guncelle.php">Oyun Güncelle</a>
  <a href="sil.php">Oyun Kaldır</a>
  <a href="listele.php">Oyun Listele</a></strong>
</div>

</div>
</div>


</body>
</html>