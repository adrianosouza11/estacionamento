<?php


namespace entities;


class CheckoutEntitie
{
    private $id;
    private $clientes;
    private $entradasSaidas;
    private $tabelaPrecos;
    private $valor;
    private $tempo_consumido;
    private $data_hora;

    /**
     * CheckoutEntitie constructor.
     * @param $id
     * @param $clientes
     * @param $entradasSaidas
     * @param $tabelaPrecos
     * @param $valor
     * @param $tempo_consumido
     * @param $data_hora
     */
    public function __construct($id, ClienteEntitie $clientes, EntradaSaidaEntitie $entradasSaidas, TabelaPrecoEntitie $tabelaPrecos, $valor, $tempo_consumido, $data_hora)
    {
        $this->id = $id;
        $this->clientes = $clientes;
        $this->entradasSaidas = $entradasSaidas;
        $this->tabelaPrecos = $tabelaPrecos;
        $this->valor = $valor;
        $this->tempo_consumido = $tempo_consumido;
        $this->data_hora = $data_hora;
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
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getTempoConsumido()
    {
        return $this->tempo_consumido;
    }

    /**
     * @param mixed $tempo_consumido
     */
    public function setTempoConsumido($tempo_consumido)
    {
        $this->tempo_consumido = $tempo_consumido;
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
     * @return ClienteEntitie
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * @return EntradaSaidaEntitie
     */
    public function getEntradasSaidas()
    {
        return $this->entradasSaidas;
    }

    /**
     * @return TabelaPrecoEntitie
     */
    public function getTabelaPrecos()
    {
        return $this->tabelaPrecos;
    }


}