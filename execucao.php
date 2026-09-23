<?php

require_once('modelo/Espadachim');
require_once('modelo/Mago');
require_once('modelo/Tank');
require_once('modelo/Vitalista');

$jogador = new Aventureiro;

do {

print "Bem-vindo(a) ao RPG No Dungeons Nor Dragons (ou NDND para os mais próximos)\n";
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

    case 0:
        print "Saindo...\n";
        system('clear');
        die();
        
    default:
        print "Resposta inválida, tente novamente...\n";
        break;
}
} while ($classe < 1 or $classe > 4 );

$jogador;


// Fim da seleção de personagem, inicio do jogo
do {

    print menu();
    $opcao = readline();
    print "\n\n";
    switch ($opcao) {
        case 'value':
            # code...
            break;
        
        case 0:
            print "Saindo...\n";
            break;
        
        default:
            print "Resposta inválida, tente novamente...\n";
            break;
    }

} while ($opcao <= 10);


function menuBatalha($classe){
    switch ($classe) {
        case 'mago':
            $menu = "\n\n
        ************************************
        *               Mago               *
        ************************************
        * 1- Ataque básico                 *
        * 2- Ataque pesado                 *
        * 2- Verificar vida                *
        ************************************
        * 0- Sair                          *
        ************************************\n";
            break;

        case 'espadachim':
            $menu = "\n\n
        ************************************
        *            Espadachim            *
        ************************************
        * 1- Ataque básico                 *
        * 2- Ataque pesado                 *
        * 2- Verificar vida                *
        ************************************
        * 0- Sair                          *
        ************************************\n";
            break;
        
        default:
            # code...
            break;
    }
    
}

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