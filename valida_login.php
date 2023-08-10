<?php

    session_start();


    $usuarios = array( 
    array("email"=>"logiteste@email.com", "senha" => "123456"),
    array("email"=>"adm@email.com", "senha" => "654321"),
);

foreach($usuarios as $user){
    if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){
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