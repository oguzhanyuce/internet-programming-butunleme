<?php
require_once 'baglan.php';
session_start();



if(isset($_POST['girisyap'])) {
$mail=htmlspecialchars($_POST['mail']);
$sifre=htmlspecialchars($_POST['sifre']);
$md5sifre=md5($sifre);

if ($mail && $md5sifre) {
  $danismansor=$baglan->prepare("SELECT * from danismanlar where danisman_mail=? and danisman_sifre=? ");
  $danismansor->execute(array(

$mail,$md5sifre

  ));
  $say=$danismansor->rowCount();


if ($say > 0) {
  $_SESSION['danisman']=$mail;
  Header("Location:index.php");

}
  else {
    Header("Location:giris.php?durum=no");
  }
}



}






 ?>
