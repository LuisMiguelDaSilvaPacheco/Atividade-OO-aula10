<?php

require_once('Aventureiro.php');

//Classe existente apenas para fins futuros, de modo que diferencie de classes SUPORTE

class Combatente extends Aventureiro{
    public function ataqueBasico($dano){
        return $dano + ($dano * 0.1);
    }
    public function ataquePesado($dano){
        return $dano + ($dano * 0.5);
    }
}