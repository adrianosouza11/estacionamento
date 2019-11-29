<?php


namespace entities;


class TabelaPrecoEntitie
{
    private $id;
    private $titulo;
    private $descricao;
    private $valor;
    private $tempo;

    /**
     * TabelaPrecoEntities constructor.
     * @param $id
     * @param $titulo
     * @param $descricao
     * @param $valor
     * @param $tempo
     */
    public function __construct($id, $titulo, $descricao, $valor, $tempo)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->tempo = $tempo;
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
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
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
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * @param mixed $tempo
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }


}