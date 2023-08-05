<?php
    
    $usuarios = array( 
    array("email"=>"logiteste@email.com", "senha" => "123456"),
    array("email"=>"adm@email.com", "senha" => "654321"),
);

foreach ($usuarios as $user){
    if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){
        echo 'validado';
    }else{
        header("Location: /index.php?login=erro");
    }
}
?>