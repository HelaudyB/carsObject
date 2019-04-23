<?php
class yamaha extends Moto implements yamahainterface {
    /**
     * yamaha constructor.
     * @param $_isLogo
     * @param $_isJapanese
     */
    protected $topCase;

    public function __construct($_isLogo, $_isJapanese)
    {
        $this->_isLogo = $_isLogo;
        $this->_isJapanese = $_isJapanese;
    }
    public function isCool()
    {
        // TODO: Implement isCool() method.
    }


    /**
     * @return mixed
     */
    public function getIsLogo()
    {
        return $this->_isLogo;
    }

    /**
     * @param mixed $isLogo
     */
    public function setIsLogo($isLogo)
    {
        $this->_isLogo = $isLogo;
    }

    /**
     * @return mixed
     */
    public function getIsJapanese()
    {
        return $this->_isJapanese;
    }

    /**
     * @param mixed $isJapanese
     */
    public function setIsJapanese($isJapanese)
    {
        $this->_isJapanese = $isJapanese;
    }
    private function setId($id)
    {
        $this->id=$id;
    }
    private $_isLogo;
    private $_isJapanese;




}