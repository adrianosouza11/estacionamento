<?php

namespace entities;

class ClienteEntitie
{
    private $id;
    private $nome_completo;
    private $data_nascimento;
    private $nome_mae;
    private $cpf;
    private $sexo;
    private $assinante_mensal;

    const SEXO_M = 'M';
    const SEXO_F = 'F';

    const ASSINATE_MENSAL_SIM = 'SIM';
    const ASSINATE_MENSAL_NAO = 'NAO';

    public function __construct($nome_completo, $data_nascimento, $nome_mae, $cpf, $sexo, $assinante_mensal)
    {
        $this->nome_completo = $nome_completo;
        $this->data_nascimento = $data_nascimento;
        $this->nome_mae = $nome_mae;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->assinante_mensal =  $assinante_mensal;
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
     * @return string
     */
    public function getNomeCompleto()
    {
        return $this->nome_completo;
    }

    /**
     * @param string $nome_completo
     */
    public function setNomeCompleto($nome_completo)
    {
        $this->nome_completo = $nome_completo;
    }

    /**
     * @return string
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param string $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     * @return string
     */
    public function getNomeMae()
    {
        return $this->nome_mae;
    }

    /**
     * @param string $nome_mae
     */
    public function setNomeMae($nome_mae)
    {
        $this->nome_mae = $nome_mae;
    }

    /**
     * @return int
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param int $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return string
     */
    public function getAssinanteMensal()
    {
        return $this->assinante_mensal;
    }

    /**
     * @param string $assinante_mensal
     */
    public function setAssinanteMensal($assinante_mensal)
    {
        $this->assinante_mensal = $assinante_mensal;
    }
}
