<?php

require_once("Suporte.php");

class Vitalista extends Suporte {

    protected int $danoDivino;
    protected int $regeneracao;

    /**
     * Get the value of danoDivino
     */
    public function getDanoDivino(): int
    {
        return $this->danoDivino;
    }

    /**
     * Set the value of danoDivino
     */
    public function setDanoDivino(int $danoDivino): self
    {
        $this->danoDivino = $danoDivino;

        return $this;
    }

    /**
     * Get the value of regeneracao
     */
    public function getRegeneracao(): int
    {
        return $this->regeneracao;
    }

    /**
     * Set the value of regeneracao
     */
    public function setRegeneracao(int $regeneracao): self
    {
        $this->regeneracao = $regeneracao;

        return $this;
    }
}