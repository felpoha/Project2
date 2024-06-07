<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $banners[0] = array("nome"=>"Fallout 76","imagem"=>"{$path}banner1.jpg","id_game"=>1);
    $banners[1] = array("nome"=>"Street Fighter 6","imagem"=>"{$path}banner2.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"Mortal Kombal 1","imagem"=>"{$path}banner3.jpg","id_game"=>3);

    echo json_encode($banners);