<?php

require_once("Suporte.php");

class Tank extends Suporte {
        
    protected int $parry;
    protected int $bloqueio;
    protected int $resistencia;


    /**
     * Get the value of parry
     */
    public function getParry(): int
    {
        return $this->parry;
    }

    /**
     * Set the value of parry
     */
    public function setParry(int $parry): self
    {
        $this->parry = $parry;

        return $this;
    }

    /**
     * Get the value of bloqueio
     */
    public function getBloqueio(): int
    {
        return $this->bloqueio;
    }

    /**
     * Set the value of bloqueio
     */
    public function setBloqueio(int $bloqueio): self
    {
        $this->bloqueio = $bloqueio;

        return $this;
    }

    /**
     * Get the value of resistencia
     */
    public function getResistencia(): int
    {
        return $this->resistencia;
    }

    /**
     * Set the value of resistencia
     */
    public function setResistencia(int $resistencia): self
    {
        $this->resistencia = $resistencia;

        return $this;
    }
}