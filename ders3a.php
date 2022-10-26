<?php

class Welcome{

    public function hello($isim="john",$soyad="doe"){
        $text = "Hosgeldiniz Sayin $isim $soyisim";
        return $text;
    }

}


/* ******************* */



$nesne = new Welcome;
$hello1->hello();
echo "<br>";
$hello2 = $nesne->hello("selim","yeni");

$isim = "Ahmet";
$soyisim = "kara";
$hello3 = $nesne->hello($isim,$soyisim);


echo "<br>";
echo $hello1;

echo "<br>";
echo $hello2;

echo "<br>";
echo $hello3;


?>