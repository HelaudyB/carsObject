<?php
class sessionmanager{
    private $attributs=[];

    /**
     * sessionmanager constructor.
     * @param array $attributs
     */
    public function __construct(array $attributs)
    {
        $this->attributs = $attributs;
        foreach ($key[$attributs] as $qqch){
            return $this;
        }
    }

    /**
     * @return array
     */
    public function getAttributs()
    {
        return $this->attributs;
    }

    /**
     * @param array $attributs
     */
    public function setAttributs($attributs)
    {
        $this->attributs = $attributs;
    }



}