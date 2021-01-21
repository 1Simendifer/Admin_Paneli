
<?php
require 'baglanti.php';

session_start();

if (isset($_POST['guncelle'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayar SET 

baslik=:baslik,
aciklama=:aciklama,
anahtar=:anahtar
WHERE id=1");

$update=$kaydet->execute(array(

'baslik'=>$_POST['baslik'],
'aciklama'=>$_POST['aciklama'],
'anahtar'=>$_POST['anahtar'] ));

if ($update) {
	Header("Location:../ayarlar.php?durum=basarili");
}else{
	Header("Location:../ayarlar.php?durum=hata");
}

}


if (isset($_POST['iguncelle'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayar SET 

gmail=:gmail,
telefon=:telefon,
adres=:adres
WHERE id=1");

$update=$kaydet->execute(array(

'gmail'=>$_POST['gmail'],
'telefon'=>$_POST['telefon'],
'adres'=>$_POST['adres'] ));

if ($update) {
	Header("Location:../iletisim.php?durum=basarili");
}else{
	Header("Location:../iletisim.php?durum=hata");
}

}


if (isset($_POST['sguncelle'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayar SET 

instagram=:instagram,
youtube=:youtube
WHERE id=1");

$update=$kaydet->execute(array(

'instagram'=>$_POST['instagram'],
'youtube'=>$_POST['youtube'] ));

if ($update) {
	Header("Location:../sosyalmedya.php?durum=basarili");
}else{
	Header("Location:../sosyalmedya.php?durum=hata");
}

}


if (isset($_POST['hguncelle'])) {
	
$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

baslik=:baslik,
aciklama=:aciklama,
vizyon=:vizyon,
misyon=:misyon,
yapilan=:yapilan,
isci=:isci,
sehir=:sehir,
proje=:proje
WHERE id=0");

$update=$kaydet->execute(array(

'baslik'=>$_POST['baslik'],
'aciklama'=>$_POST['aciklama'],
'vizyon'=>$_POST['vizyon'],
'misyon'=>$_POST['misyon'],
'yapilan'=>$_POST['yapilan'],
'isci'=>$_POST['isci'],
'sehir'=>$_POST['sehir'],
'proje'=>$_POST['proje'] ));

if ($update) {
	Header("Location:../hakkimizda.php?durum=basarili");
}else{
	Header("Location:../hakkimizda.php?durum=hata");
}

}


if (isset($_POST['sliderekle'])) {

$uploads_dir = '../resimler';
@$tmp_name = $_FILES['resim'] ["tmp_name"];
@$name = $_FILES['resim'] ["name"];

$sayi1=rand(20000,30000);
$sayi2=rand(20000,30000);
$sayi3=rand(20000,30000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimyolu=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

$kaydet=$baglanti->prepare("INSERT INTO slider SET 

baslik=:baslik,
aciklama=:aciklama,
link=:link,
button=:button,
resim=:resim,
sira=:sira

");

$insert=$kaydet->execute(array(

'baslik'=>$_POST['baslik'],
'aciklama'=>$_POST['aciklama'],
'link'=>$_POST['link'],
'button'=>$_POST['button'],
'resim'=>$resimyolu,
'sira'=>$_POST['sira']

));

if ($insert) {
	Header("Location:../slider.php?durum=basarili");
}else{
	Header("Location:../slider.php?durum=hata");
}

}



if (isset($_POST['sliderguncelle'])) {

if ($_FILES['resim'] ["size"]>0) {


$uploads_dir = '../resimler';
@$tmp_name = $_FILES['resim'] ["tmp_name"];
@$name = $_FILES['resim'] ["name"];

$sayi1=rand(20000,30000);
$sayi2=rand(20000,30000);
$sayi3=rand(20000,30000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimyolu=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

$kaydet=$baglanti->prepare("UPDATE slider SET 

baslik=:baslik,
aciklama=:aciklama,
link=:link,
button=:button,
resim=:resim,
sira=:sira

WHERE id={$_POST['id']}
");

$insert=$kaydet->execute(array(

'baslik'=>$_POST['baslik'],
'aciklama'=>$_POST['aciklama'],
'link'=>$_POST['link'],
'button'=>$_POST['button'],
'resim'=>$resimyolu,
'sira'=>$_POST['sira']

));

if ($insert) {
	$sil=$_POST['resim'];
	unlink("../resimler/$sil");
	Header("Location:../slider.php?durum=basarili");
}else{
	Header("Location:../slider.php?durum=hata");
}
	
}

else{


$duzenle=$baglanti->prepare("UPDATE slider SET 

baslik=:baslik,
aciklama=:aciklama,
link=:link,
button=:button,
sira=:sira


WHERE id={$_POST['id']}
");

$insert=$duzenle->execute(array(

'baslik'=>$_POST['baslik'],
'aciklama'=>$_POST['aciklama'],
'link'=>$_POST['link'],
'button'=>$_POST['button'],
'sira'=>$_POST['sira']

));

if ($insert) {
	Header("Location:../slider.php?durum=basarili");
}else{
	Header("Location:../slider.php?durum=hata");
}

}

}

if (isset($_POST['slidersil'])) {

$sil=$_POST['resim'];
unlink("../resimler/$sil");

$sil=$baglanti->prepare("DELETE from slider WHERE id=:id");
$sil->execute(array(

'id'=>$_POST['id']

));

if ($sil) {
	Header("Location:../slider.php?durum=basarili");
}else{
	Header("Location:../slider.php?durum=hata");
}
	
}

if (isset($_POST['logokaydet'])) {

$uploads_dir = '../resimler/logo';
@$tmp_name = $_FILES['resim'] ["tmp_name"];
@$name = $_FILES['resim'] ["name"];

$sayi1=rand(20000,30000);
$sayi2=rand(20000,30000);
$sayi3=rand(20000,30000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimyolu=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

$kaydet=$baglanti->prepare("UPDATE ayar SET 


logo=:logo");

$update=$kaydet->execute(array(

'logo'=>$resimyolu

));

if ($update) {
	$sil=$_POST['resim'];
	unlink("../resimler/logo/$sil");
	Header("Location:../ayarlar.php?durum=basarili");
}else{
	Header("Location:../ayarlar.php?durum=hata");
}

}

if (isset($_POST['kullanicigiris'])) {
	
$kadi= htmlspecialchars($_POST['gmail']);   
$sifre= htmlspecialchars($_POST['sifre']);

if ($kadi && $sifre) {

	$kullanicisor=$baglanti->prepare("SELECT * from kullanici WHERE kadi=:kadi and sifre=:sifre");
	$kullanicisor->execute(array(
	'kadi'=>$kadi,
	'sifre'=>$sifre));
	$say=$kullanicisor->rowCount();

	if ($say>0) {
		$_SESSION['kadi']=$kadi;
		header("Location:../index.php");
	}else{
		header("Location:../login.php?durum=hata");
	}


}

}



if (isset($_POST['kullaniciekle'])) {

$kullanici=$baglanti->prepare("SELECT * from kullanici WHERE kadi=:kadi");
$kullanici->execute(array(
'kadi'=>$_POST['kadi']
));
$say=$kullanici->rowCount();

if ($say>0) {
	Header("Location:../kullanici.php?durum=kullanicivar");
	exit;
}



$kaydet=$baglanti->prepare("INSERT INTO kullanici SET 

adsoyad=:adsoyad,
kadi=:kadi,
sifre=:sifre

");

$insert=$kaydet->execute(array(

'adsoyad'=>$_POST['adsoyad'],
'kadi'=>$_POST['kadi'],
'sifre'=>$_POST['sifre']

));

if ($insert) {
	Header("Location:../kullanici.php?durum=basarili");
}else{
	Header("Location:../kullanici.php?durum=hata");
}

}

if (isset($_POST['kullanicisil'])) {

$sil=$baglanti->prepare("DELETE from kullanici WHERE id=:id");
$sil->execute(array(

'id'=>$_POST['id']

));

if ($sil) {
	Header("Location:../kullanici.php?durum=basarili");
}else{
	Header("Location:../kullanici.php?durum=hata");
}
	
}



?>