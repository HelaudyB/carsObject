<?php
abstract class Vehicule implements VehiculeInterface
{
    private $marque;
    private $model;
    private $prix;
    public function __construct($marque, $model, $prix)
    {
        $this->marque = $marque;
        $this->model = $model;
        $this->prix = $prix;
    }
    public function __set($name, $value)
    {
        var_dump('Impossible : Vous ne pouvez pas mettre la valeur '.$value.' dans '.$name);
    }
    public function __get($name)
    {
        var_dump('Impossible l\'attribut ' . $name .' est privé ou nexiste pas');
    }
    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }
    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}
