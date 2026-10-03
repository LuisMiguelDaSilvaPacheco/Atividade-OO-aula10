<?php

require_once('Monstro.php');

class Aventureiro
{
    protected string $nome;
    protected int $nivel;
    protected int $experiencia;
    protected int $vidaMaxima;
    protected int $vidaAtual;
    protected Monstro $monstro;

    public function __toString()
    {
        $dados = 'Jogador: ' . $this->nome . "\nVida Máxima: " . $this->vidaMaxima;
        if ($this instanceof Espadachim) {
            $dados .= "\nDano Físico: ". $this->danoFisico;
        } else if($this instanceof Mago) {
            $dados .= "\nDano Mágico ". $this->danoMagico;
        }
        $dados .= "\nNivel:" . $this->nivel . "\nExp:" . $this->experiencia . "/1000\n\n";
        return $dados;
    }

    public function evoluir()
    {
        if ($this->experiencia >= 1000) {
            $this->experiencia -= 1000;
            $this->nivel++;
            $this->vidaMaxima += rand(4, 7);

        $dados = "Parabéns, " . $this->nome . ", você subiu de nível!\nSua vida máxima aumentou para ". $this->vidaMaxima. "!";
            if ($this instanceof Espadachim) {
                $this->danoFisico += rand(1, 3);
                $dados .= "Seu dano físico aumentou para ". $this->danoFisico. "!";
            } else if($this instanceof Mago) {
                $this->danoMagico += rand(1, 3);
                $dados .= "Seu dano mágico aumentou para ". $this->danoMagico. "!";
            }

            printM($dados, 50);
        }
        return false;
    }

    public function Batalhar($classe, $dano)
    {
        $this->getMonstro()->setVidaAtual($this->getMonstro()->getVidaMaxima());
        $this->setVidaAtual($this->vidaMaxima);
        do {
            print $this->menuBatalha($classe);
            $opcao = readline();

            switch ($opcao) {
                case 1:
                    $danoCausado = $this->ataqueBasico($dano);
                    $danoRecebido = $this->getMonstro()->getDano();

                    $this->getMonstro()->setVidaAtual($this->getMonstro()->getVidaAtual() - $danoCausado);
                    $this->setVidaAtual($this->getVidaAtual() - $danoRecebido);

                    if ($classe == 1) {
                        $dados = "\n". $this->getNome(). " utilizou Corte Rápido em ". $this->monstro->getRaca(). " e causou $danoCausado de dano físico, mas levou um ataque de ". $this->monstro->getRaca(). " e recebeu $danoRecebido de dano\n";
                    } else {
                        $dados = "\n". $this->getNome(). " utilizou Bola de Fogo em ". $this->monstro->getRaca(). " e causou $danoCausado de dano mágico, mas levou um ataque de ". $this->monstro->getRaca(). " e recebeu $danoRecebido de dano\n";
                    }
                    
                    printM($dados, 50);
                    printM(readline('Pressione ENTER'), 50);
                    break;
                case 2:
                    $danoCausado = $this->ataquePesado($dano);
                    $danoRecebido = $this->getMonstro()->getDano();

                    $this->getMonstro()->setVidaAtual($this->getMonstro()->getVidaAtual() - $danoCausado);
                    $this->setVidaAtual($this->getVidaAtual() - $danoRecebido);

                    if ($classe == 1) {
                        $dados = "\n". $this->getNome(). " utilizou Corte Carregado em ". $this->monstro->getRaca(). " e causou $danoCausado de dano físico, mas levou um ataque de ". $this->monstro->getRaca(). " e recebeu $danoRecebido de dano\n";
                    } else {
                        $dados = "\n". $this->getNome(). " utilizou Sol Cruel em ". $this->monstro->getRaca(). " e causou $danoCausado de dano mágico, mas levou um ataque de ". $this->monstro->getRaca(). " e recebeu $danoRecebido de dano\n";
                    }
                    printM($dados, 50);
                    printM(readline('Pressione ENTER'), 50);
                    break;

                case 3:
                    printM("Jogador | HP: ". $this->vidaAtual. "/". $this->vidaMaxima. "\n", 50);
                    printM("Monstro | HP: ". $this->getMonstro()->getVidaAtual(). "/". $this->getMonstro()->getVidaMaxima(). "\n", 50);
                    printM(readline('Pressione ENTER'), 50);
                    break;

                case 0:
                    printM("Você fugiu com sucesso!\n", 50);
                    break;

                default:
                    printM("Resposta inválida, tente novamente...\n", 50);
                    break;
            }
        } while ($this->vidaAtual > 0 and $this->getMonstro()->getVidaAtual() > 0 and $opcao != 0);
        
        if ($this->getMonstro()->getVidaAtual() <= 0) {
            $this->setExperiencia($this->getExperiencia() + rand(50, 100));
        }
        $this->evoluir();
    }

    public function menuBatalha($classe)
    {
        $menu = "Evitar erro";
        switch ($classe) {
            case 1:
                $menu = "\n\n
        ************************************
        *            Espadachim            *
        ************************************
        * 1- Ataque básico                 *
        * 2- Ataque pesado                 *
        * 3- Verificar vida                *
        ************************************
        * 0- Sair                          *
        ************************************\n";
                break;

            case 2:
                $menu = "\n\n
        ************************************
        *               Mago               *
        ************************************
        * 1- Ataque básico                 *
        * 2- Ataque pesado                 *
        * 3- Verificar vida                *
        ************************************
        * 0- Sair                          *
        ************************************\n";
                break;

            case 0:
                print "Saindo...\n";
                break;

            default:
                print "Resposta inválida, tente novamente...\n";
                break;
        }
        return $menu;
    }

    public function ataqueBasico($dano){
        // Utilizar polimorfismo de COMBATENTE
        return true;
    }

    public function ataquePesado($dano){
        // Utilizar polimorfismo de COMBATENTE
        return true;
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

    public function getMonstro()
    {
        return $this->monstro;
    }

    public function setMonstro($monstro)
    {
        $this->monstro = $monstro;

        return $this;
    }
}