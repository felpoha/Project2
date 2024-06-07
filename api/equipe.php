<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $equipe[1] = array("nome"=>"Luke Skywalker","cargo"=>"Desenvolvedor de Games","foto"=>"{$path}luke.jpg");
    $equipe[2] = array("nome"=>"Obi Wan Kenobi","cargo"=>"Diretor de Arte","foto"=>"{$path}obi.jpg");
    $equipe[3] = array("nome"=>"Anakin Skywalker","cargo"=>"Desenvolvedor de Games","foto"=>"{$path}anakin.jpg");
    $equipe[4] = array("nome"=>"Leia Skywalker","cargo"=>"CEO / Desenvolvedora de Software","foto"=>"{$path}leia.jpg");

    echo json_encode($equipe);