<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $games[1] = array("id"=>1, "nome"=>"Falout 76", "descricao"=>"<p>Fallout 76 é um jogo multijogador online de RPG de ação, desenvolvido pela Bethesda Game Studios e publicado pela Bethesda Softworks para Microsoft Windows, PlayStation 4 e Xbox One. Funciona como uma prequela para a história da série Fallout e foi lançado em 14 de novembro de 2018. Em abril de 2020, foi lançado a expansão Wastelanders.</p>
    <p>Apesar da antecipação a respeito do seu lançamento, o jogo acabou não agradando a crítica e o público, com reclamações principalmente se focando nos inúmeros problemas técnicos, design, ausência de personagens não jogáveis e falta de propósito do gameplay. Embora o jogo tenha melhorado com o tempo, com a introdução de correções de bugs e adição de novo conteúdo, vários problemas permaneceram e muitas alterações continuaram a desagradar tanto os jogadores e quanto a crítica.</p>
    <p>Ao final de 2018, o jogo havia vendido em torno de 1,4 milhões de cópias pelo mundo, bem abaixo dos títulos anteriores da franquia.</p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg","trailer"=>"https://www.youtube.com/embed/M9FGaan35s0");

    $games[2] = array("id"=>2, "nome"=>"Street Fighter 6", "descricao"=>"<p>Street Fighter 6 é um jogo eletrônico de luta desenvolvido e publicado pela Capcom. É a sétima entrada principal da franquia Street Fighter, e foi lançado para PlayStation 4, PlayStation 5, Windows e Xbox Series X/S em 2 de junho de 2023, ao passo que uma versão para arcade será publicada pela Taito mais tarde no mesmo ano.</p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg","trailer"=>"https://www.youtube.com/embed/3sAU1fPK0K4");

    $games[3] = array("id"=>3, "nome"=>"Mortal Kombat 1", "descricao"=>"<p>Após cessar o suporte para Mortal Kombat 11, a NetherRealm Studios revelou que estava trabalhando em um novo projeto em julho de 2021. O dublador de Johnny Cage, Andrew Bowen, indicou que a décima segunda parcela estava em desenvolvimento em um tweet excluído às pressas.</p>
    <p>Em 18 de maio de 2023, a NetherRealm Studios anunciou Mortal Kombat 1 com data de lançamento para 19 de setembro de 2023. É uma reinicialização da série e se passa na linha do tempo da Nova Era criada por Liu Kang depois que ele alcançou a divindade em Mortal Kombat 11 em 2019.[3] A NetherRealm Studios também anunciou que aqueles que encomendarem qualquer versão do jogo para PS5 e Xbox Series antes do lançamento também receberão acesso a uma versão beta em agosto e, após o lançamento do jogo, a NetherRealm fornecerá cross-play e cross-progression.[4]</p>",
    "poster"=>"{$path}poster_mk1.jpg","banner"=>"{$path}mk1.jpg","trailer"=>"https://www.youtube.com/embed/Ue1Yo-3QnRc");

    $games[4] = array("id"=>4, "nome"=>"FC 2024", "descricao"=>"<p>A EA Sports é uma divisão da Electronic Arts que desenvolve e publica jogos eletrônicos de esportes, e produz jogos nos Estados Unidos e no Canadá. A EA Sports produz desde 1993 jogos como FIFA, NBA Live, Madden NFL, NHL, UFC, PGA Tour entre outros. O slogan da empresa é a frase \"It's in the game\", narrada pelo jornalista Andrew Anthony.</p>",
    "poster"=>"{$path}poster_fc24.jpg","banner"=>"{$path}fc24.jpg","trailer"=>"https://www.youtube.com/embed/XhP3Xh4LMA8");

    $games[5] = array("id"=>5, "nome"=>"Tekken 8", "descricao"=>"<p>Tekken 8 (鉄拳8) é um jogo eletrônico de luta desenvolvido pela Bandai Namco Studios e Arika.[1] Bandai Namco Entertainment publicou o jogo para PlayStation 5, Windows e Xbox Series X/S em 26 de janeiro de 2024.[2] É a oitava entrada principal (e décima, no geral) da série Tekken. O modo história do jogo, intitulado The Dark Awakens, se passa seis meses após os acontecimentos de seu antecessor e se concentra no confronto final entre os personagens principais, pai e filho Kazuya Mishima e Jin Kazama, com este último desejando matar o primeiro para acabar com o caos dentro de sua linhagem familiar. A história do jogo apresenta 32 personagens antigos e novos, cada um com sua própria narrativa que contribui para a história geral.</p>",
    "poster"=>"{$path}poster_tekken8.jpg","banner"=>"{$path}tekken8.jpg","trailer"=>"https://www.youtube.com/embed/2cWB0uUPC78");

    echo json_encode($games);