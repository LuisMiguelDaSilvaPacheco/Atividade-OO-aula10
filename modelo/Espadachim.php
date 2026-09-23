<?php

require_once('Combatente.php');

class Espadachim extends Combatente{
    protected int $danoFisico;

    public function getDanoFisico()
    {
        return $this->danoFisico;
    }

    public function setDanoFisico( $danoFisico)
    {
        $this->danoFisico = $danoFisico;

        return $this;
    }
}