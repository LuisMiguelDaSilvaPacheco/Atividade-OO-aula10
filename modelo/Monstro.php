<?php

class Monstro {
	private string $raca;
	private int $vidaMax;
	private int $vidaAtual;
	private int $dano;

	public function getRaca() {
	    return $this->raca;
	}

	public function setRaca($raca) {
	    $this->raca = $raca;
	}

	public function getDano() {
	    return $this->dano;
	}

	public function setDano($dano) {
	    $this->dano = $dano;
	}

	public function getVidaMax() {
	    return $this->vidaMax;
	}

	public function setVidaMax($vidaMax) {
	    $this->vidaMax = $vidaMax;
	}

	public function getVidaAtual() {
	    return $this->vidaAtual;
	}

	public function setVidaAtual($vidaAtual) {
	    $this->vidaAtual = $vidaAtual;
	}

}
