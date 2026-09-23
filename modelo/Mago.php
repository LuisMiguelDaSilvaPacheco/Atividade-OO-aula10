<?php

require_once('Aventureiro.php');

class Mago extends Combatente{
    protected $danoMagico;

    public function getDanoMagico()
    {
        return $this->danoMagico;
    }

    public function setDanoMagico($danoMagico)
    {
        $this->danoMagico = $danoMagico;

        return $this;
    }
}