<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<body background="bg.jpg">
</div>

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
<table height="123" cellpadding="5" cellspacing="5">
    <tr>
    <td>Oyun Kayıt Kodu:</td>
    <td><input type="text1" name="seri" /></td>
    </tr>
    <td height="53">
    <td><input type="submit" value="Mevcut Oyunları Listele" /></td>
    </tr>
    </table>
</form>


<?php 
        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){			
            $listele        =    mysqli_query($baglan,"select * from bilgiler ");
		while($cekilen_veri=mysqli_fetch_array($listele)){
			extract($cekilen_veri);
			echo $kayit_kodu."  ".$oyun_adi."  ".$yapimci."  ".$turu."  ".$cikis_tarihi." </br>";
			
			
			
        }
		}
?>

</div>

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