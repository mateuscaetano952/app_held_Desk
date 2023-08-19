<?php

    session_start();

    //Lista de usuarios cadastratos
    $usuarios = array( 
    array("id"=> "1","email"=>"adm@email.com", "senha" => "123456"),
    array("id"=> "2","email"=>"mateus@email.com", "senha" => "123456"),
    array("id"=> "3","email"=>"maria@email.com", "senha" => "123456"),
    array("id"=> "4","email"=>"jose.com", "senha" => "123456"),

);

//Autentifica sessão
foreach($usuarios as $user){
    if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){
        $_SESSION["id"] = $user["id"];
        $usuario_autentificado = true;
    };
}

if($usuario_autentificado === true){
    header('location: home.php?');
    $_SESSION['autenficado'] = 'sim';
}else{
    $_SESSION['autenficado'] = 'nao';
    header('location: index.php?login=erro');
}

?>