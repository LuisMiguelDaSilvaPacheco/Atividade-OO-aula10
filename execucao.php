<?php

require_once('modelo/Aventureiro.php');
require_once('modelo/Espadachim.php');
require_once('modelo/Mago.php');
require_once('modelo/Tank.php');
require_once('modelo/Vitalista.php');
require_once('modelo/Monstro.php');

// Criação dos monstros

$monstros = array();

$monstro1 = new Monstro();
$monstro1->setRaca("Gnoll");
$monstro1->setVidaMaxima(120);
$monstro1->setDano(7);
array_push($monstros, $monstro1);

$monstro2 = new Monstro();
$monstro2->setRaca("Goblin");
$monstro2->setVidaMaxima(100);
$monstro2->setDano(5);
array_push($monstros, $monstro2);

$monstro3 = new Monstro();
$monstro3->setRaca("Slime");
$monstro3->setVidaMaxima(70);
$monstro3->setDano(3);
array_push($monstros, $monstro3);

// Criação de personagem
$jogador = new Aventureiro;

do {

printM("Bem-vindo(a) ao RPG No Dungeons Nor Dragons (ou NDND para os mais próximos)\n", 50);
sleep(1);
print "\n\n
        ************************************
        *        Escolha sua classe        *
        ************************************
        * 1- Espadachim                    *
        * 2- Mago                          *
        * 3- Tank                          *
        * 4- Vitalista                     *
        ************************************
        * 0- Sair                          *
        ************************************\n";
$classe = readline();
switch ($classe) {

    case 1:
        $jogador = new Espadachim;
        $jogador->setDanoFisico(rand(1, 10));
        break;

    case 2:
        $jogador = new Mago;
        $jogador->setDanoMagico(rand(1, 10));
        break;

    case 3:
        printM("Em construção...\n", 50);
        break;

    case 4:
        printM("Em construção...\n", 50);
        break;

    case 0:
        printM("Saindo...\n", 50);
        system('clear');
        die();
        
    default:
        printM("Resposta inválida, tente novamente...\n", 50);
        break;
}
} while ($classe < 1 or $classe > 2 );

$jogador->setNome(readline('Qual será o seu nome? '));
$jogador->setNivel(1);
$jogador->setExperiencia(1);
$jogador->setVidaMaxima(100);

// Fim da seleção de personagem, inicio do jogo
do {

    print menu();
    $opcao = readline();
    print "\n\n";
    switch ($opcao) {

        case 1:
            printM($jogador, 50);
            readline('Pressione ENTER');
            break;

        case 2:
            if($jogador->getNivel() >= 10){
				$jogador->setMonstro($monstros[rand(0, 2)]);
			}else if($jogador->getNivel() >= 5){
				$jogador->setMonstro($monstros[rand(0, 1)]);
			}else{
				$jogador->setMonstro($monstros[0]);
			}
			$jogador->Batalhar($jogador->getMonstro(), $classe);
            break;
        
        case 0:
            print "Saindo...\n";
            break;
        
        default:
            print "Resposta inválida, tente novamente...\n";
            break;
    }

} while ($opcao <= 10);

function menu(){
    $menu = "\n\n
        ************************************
        *               Menu               *
        ************************************
        * 1- Abrir Perfil                  *
        * 2- Procurar monstro              *
        ************************************
        * 0- Sair                          *
        ************************************\n";

    return $menu;
}

function printM(string $texto, int $velocidade){
    for ($i=0; $i < mb_strlen($texto, 'UTF-8'); $i++) { 
        print mb_substr($texto, $i, 1, "UTF-8");
        usleep($velocidade * 1000);
    }
}
