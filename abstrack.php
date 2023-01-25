<?php

abstract class Animal
{

    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    private function makan($namaMakanan)
    {
        echo $this->name . " makan $namaMakanan";
    }

    protected function jalan($tujuan)
    {
        echo $this->name. "berjalan menuju $tujuan";
    }

    public function bersuara(){
        echo "-";
    }

}

class AyamKate extends Ayam 
{
    function bersuara()
    {
        parent::bersuara();
    }
}

interface Ikan 
{
    public function berenang($tujuan);
}

class Ayam extends Animal
{
    public function __construct()
    {
        parent::__construct("Ayam");
    }
}

$rembo = new AyamKate();

// $rembo->makan("Cacing");

// $rembo->jalan("Dusun Cisitu Runruh");

$rembo->bersuara();

$rembo->bergerak("cacing", "Dusun Cisitu Runtuh");
