<?php

class Kawa extends Moto implements KawasakiInterface
{
    private $isKawai;

    public function __construct($marque, $model, $prix, $topCase, $isKawai)
    {
        parent::__construct($marque, $model, $prix, $topCase);
        $this->isKawai= $isKawai;
    }
    public function __get($zeub)
    {
        ?><script language="javascript">
        alert("ça marche");
        </script> <?php
    }
    private function setId($id)
    {
        $this->id=$id;
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
