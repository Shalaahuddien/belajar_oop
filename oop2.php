<?php

interface BangunDatar
{
    public function segitiga($alas, $tinggi);

    public function kotak($sisi);

    public function persegiPanjang($panjang, $lebar);
}

class LuasBangunDatar implements BangunDatar
{
    public function segitiga($alas, $tinggi)
    {
        return $alas*$tinggi / 2 ;
    }

    public function kotak($sisi)
    {
        return;
    }

}

$bangunDatar = new LuasBangunDatar();
$bangunDatar = new KelilingBangunDatar();

function main(BangunDatar $bangunDatar)
{
    $luas = $bangunDatar->segitiga(30, 50);
    echo "$luas <br>";
}

main($bangunDatar);