<?php

/*  


    Access Modifier (Erişim Belirleyiciler)


    Public: Genel heryerden erişime açık olduğunu ifade eder.

    Private: öxel , yalnızca sınıf içerisinden erişilebilir.

    Protected: korumalı, sınıf içerisinden ve türetilen sınıflardan erişilebilir.


    static: Sabit sınıf içerisindeki herhangi bir özelllik veya metoda sınıf çağrılmadan erişilebilirç

    $this : Bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.

    $self:: Kendi sınıfımda , şeklinde sınıfı işaret etmek için kullanılır.

    parent:: Ebeveyn sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.




*/


class Kutuphane {

    public $libraryName  = "Adü Kutuphanesi";

    public const bookPage = "123";



    public function getInfo()
    {

        $text = "Kutuphane her gun 08:00 - 17:00 arasında hizmet vermektedir.";
        return $text;

    }



}


$nesne = new Kutuphane;

echo "Kutuphanenin adi:". $nesne ->libraryName;
echo "<br>";
echo "Kutuphanenin kuruluş yili : ". $nesne::YEAR;
echo "<br>";

echo $nesne->getInfo();

?>