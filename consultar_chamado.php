<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>


  <?php
  session_start();
  require_once('validado_de_sessao.php');  
  ?>
    
  <?php
  $arquivo = fopen("listaDeChamados", "r");
  $arrayDeChamados = array();
    
    while(!feof($arquivo)){
      $texto = fgets($arquivo);
      $arrayDeChamados[] = $texto; 

    }
    fclose($arquivo);
  ?>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
            <?php  
            foreach($arrayDeChamados as $chamado){
              

              $chamadosDados = explode('#', $chamado);
              if($chamadosDados[3] == $_SESSION['id'] || $_SESSION['id'] == '1'){   
              
            ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamadosDados[0]; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamadosDados[1]; ?></h6>
                  <p class="card-text"><?php echo $chamadosDados[2]; ?></p>

                </div>
              </div>
            <?php } } ?>  
              
            <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>