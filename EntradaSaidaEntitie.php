<?php


namespace entities;

class EntradaSaidaEntitie
{
    private $id;
    private $clientes;
    private $automoveis;
    private $data_hora;
    private $tipo;

    const TIPO_ENTRADA = 'ENTRADA';
    const TIPO_SAIDA = 'SAIDA';

    /**
     * EntradaSaidaEntitie constructor.
     * @param $id
     * @param $clientes
     * @param $automoveis
     * @param $data_hora
     * @param $tipo
     */
    public function __construct($id, ClienteEntitie $clientes, AutomovelEntitie $automoveis, $data_hora, $tipo)
    {
        $this->id = $id;
        $this->clientes = $clientes;
        $this->automoveis = $automoveis;
        $this->data_hora = $data_hora;
        $this->tipo = $tipo;
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
     * @return ClienteEntitie
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * @return AutomovelEntitie
     */
    public function getAutomoveis()
    {
        return $this->automoveis;
    }

    /**
     * @return mixed
     */
    public function getDataHora()
    {
        return $this->data_hora;
    }

    /**
     * @param mixed $data_hora
     */
    public function setDataHora($data_hora)
    {
        $this->data_hora = $data_hora;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }


}