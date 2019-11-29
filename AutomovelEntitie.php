<?php


namespace entities;

use entities\ClienteEntitie;

class AutomovelEntitie
{
    private $id;
    private $clientes;
    private $marca;
    private $modelo;
    private $numero_placa;

    /**
     * AutomovelEntities constructor.
     * @param $id
     * @param $cliente
     * @param $marca
     * @param $modelo
     * @param $numero_placa
     */
    public function __construct($id,ClienteEntitie $clientes, $marca, $modelo, $numero_placa)
    {
        $this->id = $id;
        $this->clientes = $clientes;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numero_placa = $numero_placa;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->clientes;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getNumeroPlaca()
    {
        return $this->numero_placa;
    }

    /**
     * @param mixed $numero_placa
     */
    public function setNumeroPlaca($numero_placa)
    {
        $this->numero_placa = $numero_placa;
    }




}