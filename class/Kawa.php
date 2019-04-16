<?php

class Kawa extends Moto implements kawaInterface
{
    private $isKawai;

    public function __construct($marque, $model, $prix, $topCase, $isKawai)
    {
        parent::__construct($marque, $model, $prix, $topCase);
        $this->isKawai= $isKawai;
    }

    /**
     * @return mixed
     */
    public function getisKawai()
    {
        return $this->isKawai;
    }

    /**
     * @param mixed $isKawai
     */
    public function setIsKawai($isKawai)
    {
        $this->isKawai = $isKawai;
    }


}
