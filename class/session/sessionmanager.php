<?php
class SessionManager {
    private $attributs = [];
    public function __construct()
    {
        session_start();
        foreach ($_SESSION as $key=>$value) {
            $this->attributs[$key] = $value;
        }
    }
    public function __destruct()
    {
        foreach ($this->attributs as $key=>$value){
            $_SESSION[$key] = $value;
        }
    }
    public function getAttributs(){
        return $this->attributs;
    }
    public function __set($name, $value)
    {
        $this->attributs[$name] = serialize($value);
    }
    public function __get($name)
    {
        return unserialize($this->attributs[$name]);
    }
    public function __isset($name)
    {
        return isset($this->attributs[$name]);
    }
    public function __unset($name)
    {
        unset($this->attributs[$name]);
    }
}
?>