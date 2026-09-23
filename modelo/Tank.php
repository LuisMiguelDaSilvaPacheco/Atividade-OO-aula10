<?php

require_once("Suporte.php");

class Tank extends Suporte {
        
    protected int $parry;
    protected int $bloqueio;
    protected int $resistencia;

    public function getParry(): int
    {
        return $this->parry;
    }

    public function setParry(int $parry): self
    {
        $this->parry = $parry;

        return $this;
    }

    public function getBloqueio(): int
    {
        return $this->bloqueio;
    }

    public function setBloqueio(int $bloqueio): self
    {
        $this->bloqueio = $bloqueio;

        return $this;
    }

    public function getResistencia(): int
    {
        return $this->resistencia;
    }

    public function setResistencia(int $resistencia): self
    {
        $this->resistencia = $resistencia;

        return $this;
    }
}
