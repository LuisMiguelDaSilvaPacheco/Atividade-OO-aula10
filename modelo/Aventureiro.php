<?php

class Aventureiro{
    protected string $nome;
    protected int $nivel;
    protected int $experiencia;
    protected int $vidaMaxima;
    protected int $vidaAtual;

    public function __toString()
    {
        $dados = 'Jogador: '. $this->nome. "\nVida: ". $this->vidaAtual. '/'. $this->vidaMaxima. "\nNivel:". $this->nivel. "\nExp:". $this->experiencia. "\n\n";
        return $dados;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    public function getExperiencia()
    {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;

        return $this;
    }

    public function getVidaMaxima()
    {
        return $this->vidaMaxima;
    }

    public function setVidaMaxima($vidaMaxima)
    {
        $this->vidaMaxima = $vidaMaxima;

        return $this;
    }
    
    public function getVidaAtual()
    {
        return $this->vidaAtual;
    }

    public function setVidaAtual($vidaAtual)
    {
        $this->vidaAtual = $vidaAtual;

        return $this;
    }
}
