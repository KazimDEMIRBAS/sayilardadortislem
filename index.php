<?php 
$s1=0;
$s2=0;
$s3=0;
$s4=0;
$toplam=0;
$cikarma=0;
$carpma=0;
$bolme=0;


if(isset($_POST["topla"])){
    $s1=$_POST["sayi1"];
	$s2=$_POST["sayi2"];
    $s3=$_POST["sayi3"];
	$s4=$_POST["sayi4"];

    $toplam=$s1+$s2+$s3+$s4;
}
if(isset($_POST["cikar"])){
    $s1=$_POST["sayi1"];
	$s2=$_POST["sayi2"];
    $s3=$_POST["sayi3"];
	$s4=$_POST["sayi4"];

    $cikarma=$s1-$s2-$s3-$s4;
}
if(isset($_POST["carp"])){
    $s1=$_POST["sayi1"];
	$s2=$_POST["sayi2"];
    $s3=$_POST["sayi3"];
	$s4=$_POST["sayi4"];

    $carpma=$s1*$s2*$s3*$s4;
}
if(isset($_POST["bol"])){
    $s1=$_POST["sayi1"];
	$s2=$_POST["sayi2"];
    $s3=$_POST["sayi3"];
	$s4=$_POST["sayi4"];

    $bolme=$s1/$s2/$s3/$s4;
}

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>Sayı 1
            <input type="text" name="sayi1" value="<?= $s1 ?>"><br>
        </label>
        <label>Sayı 2
            <input type="text" name="sayi2" value="<?= $s2 ?>"><br>
        </label>
        <label>Sayı 3
            <input type="text" name="sayi3" value="<?= $s3 ?>"><br>
        </label>
        <label>Sayı 4
            <input type="text" name="sayi4" value="<?= $s4 ?>"><br>
        </label>
        <button type="submit" name="topla">Topla</button>
        <button type="submit" name="cikar">Çıkar</button>
        <button type="submit" name="carp">Çarp</button>
        <button type="submit" name="bol">Böl</button>
    </form>
    <h2>Girilen Dört Sayının Toplaması:<?=$toplam?></h2>
    <h2>Girilen Dört Sayının Çıkarması:<?=$cikarma?></h2>
    <h2>Girilen Dört Sayının Çarpması:<?=$carpma?></h2>
    <h2>Girilen Dört Sayının Bölmesi:<?=$bolme?></h2>
</body>

</html>