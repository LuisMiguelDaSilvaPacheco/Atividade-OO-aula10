<?php

require_once("Suporte.php");

class Vitalista extends Suporte {

    protected int $danoDivino;
    protected int $regeneracao;

    public function getDanoDivino(): int
    {
        return $this->danoDivino;
    }

    public function setDanoDivino(int $danoDivino): self
    {
        $this->danoDivino = $danoDivino;

        return $this;
    }

    public function getRegeneracao(): int
    {
        return $this->regeneracao;
    }

    public function setRegeneracao(int $regeneracao): self
    {
        $this->regeneracao = $regeneracao;

        return $this;
    }
}
