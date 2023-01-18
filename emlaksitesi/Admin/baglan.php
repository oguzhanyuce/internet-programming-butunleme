<?php

$user="root";
$pass="";
try {
    $baglan = new PDO('mysql:host=localhost;dbname=emlak', $user, $pass);
  #echo "baglanti basarili";

} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>
