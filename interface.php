<?php

interface Kendaraan{
    public function Warna();
}
class Motor implements Kendaraan{
    public function __construct()
    {
        echo "ini motor<br>";
    }
    public function Warna()
    {
        return "Hijau";
    }
}

class Mobil implements Kendaraan{
    public function __construct()
    {
        echo "ini mobil<br>";
    }
    public function Warna()
    {
        return "Biru";
    }
}

$motor = new Motor();
echo $motor->Warna();
echo "<br>";
$mobil = new Mobil();
echo $mobil->Warna();