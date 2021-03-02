<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pesquisa: <?php echo $_POST['resulta_pesquisa']?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
        html,body{
            background-color: rgba(255, 255, 255,.1);
        }
        .artigo{
            width: 100%;
            height: 600px;
            background-image: url('des.jpg');
            background-size: 100%;
            /* opacity: 0.9; */
            text-align: center;
            float: left;
            margin-bottom: 10px;
        }
        .artigo h1{
            font-size: 60px;
            font-family:  Verdana, Geneva, Tahoma, sans-serif;
            color: #ffffff;
            text-transform: uppercase;
            margin-top: 290px;
            margin-bottom: 100px;
            text-align: center;
            text-indent: 10px;

            letter-spacing: 6px;

            mix-blend-mode: exclusion;
        }
        .artigo button{
            margin-left: 40px;
            height: 40px;
            margin-top: 100px;
            border: 1px solid rgba(55, 50, 155,.7);
            border-radius: 5px 5px 5px 5px;
            background: #929292;
            font-weight: 600;
        }
        .card{
            /* background-image: url('des.jpg');
            background-size: 130%;
            border-left: 1px solid white;
            margin-right: 3px;
            float: left;
            bottom: 30px; */
            width: 100%;
         }
        #cards{
            background-image: url('des.jpg');
            background-size: 130%;
            border-left: 1px solid white;
            margin-right: 3px;
            float: left;
            margin: 20px;
            bottom: 0px;
        }
        @media(max-width:1000px){
          #cards{
            width: 80%;
          }
        }
        @media(max-width:700px){
          #cards{
            background-image: url('des.jpg');
            background-size: 130%;
            margin-right: 3px;
            float: left;
            bottom: 0px;
            width: 80%;
            margin-left: 10%;
          }
        }
        .embed-responsive{
          margin-top: 80px;
        }
        .row > button{
          margin-top: 40px;
        }
        .list-group-item img{
          width: auto;
          height: 70px;
        }
        @media(max-width: 700px){
          .list-group-item img{
            width: auto;
            height: 40px;
          }
        }
        .navbar{
          background-color: #000;
        }

        .navbar .navbar-brand{
            /* background-size: 200%; */
            /* background-image: url('dd.jpg'); */
            text-transform: uppercase;

            /* mix-blend-mode: exclusion; */
            letter-spacing: 2px; 
            /* background-image: red; */
            text-shadow: 1px 0 0 #fff, -1px 0 0 #fff, 0 1px 0 #fff, 0 -1px 0 #fff, 0.5px 0.5px #fff, -0.5px -0.5px 0 #fff, 0.5px -0.5px 0 #fff, -0.5px 0.5px 0 #fff;
        }
        
        
        .circle{
          position: absolute;
          transform: translate(-50%, -50%);
          background: #929292;
          width: 100px;
          height: 100px;
          border-radius: 50%;
          animation: animate 0.5s linear forwards;
        }
        @keyframes animate{
          0%{
            width: 0px;
            height: 0px;
            opacity: 1;
          }
          100%{
            width: 100px;
            height: 100px;
            opacity: 0;
          }
        }

        @media(max-width: 600px){
          /*circle*/
          .circle{
            position: absolute;
            transform: translate(-50%, -50%);
            background: #929292;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            animation: animate 0.5s linear forwards;
          }
          @keyframes animate{
            0%{
              width: 0px;
              height: 0px;
              opacity: 1;
            }
            100%{
              width: 70px;
              height: 70px;
              opacity: 0;
            }
          }
        }
    </style>
  </head>
  <body>

    <?php require_once "estrutura/cabecario.php"; ?>
  
      <!-- <article class="artigo">
          <h1>Games</h1>
          <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
          <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
      </article> -->
      <h1 class="mt-5 mb-3 p-3 pt-5 text-center bg-dark text-light">Pesquisa : 
      <?php 
        if(isset($_POST['resulta_pesquisa'])){
            echo $_POST['resulta_pesquisa'];
        }
      ?>
      </h1>
      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card-group">
        <?php
        ##usar SQL ->> LINk = `$_POST['resulta_pesquisa']`
        
        if(isset($_POST['resulta_pesquisa'])){
            $w = mysqli_query($con,"SELECT * FROM `projetos` WHERE `titulo` LIKE    '%".$_POST['resulta_pesquisa']."%'") or die('erro tabela');
            // $w = mysqli_query($con,"SELECT * FROM `projetos` WHERE `id_projetos` LIKE `%".$_POST['resulta_pesquisa']."%`")or die('erro tabela');
            while($nov = mysqli_fetch_array($w)){
        echo '
          
              <div id="cards" class="card" style="background-image: url(/adm/'.$nov['id_img'].');background-size: '.$nov['size'].';">
                <div class="card-body">
                  <h5 class="card-title text-light">'.$nov['titulo'].'</h5>
                  <p class="card-text text-light">'.$nov['descricao'].'</p>
                </div>
                <div class="card-footer">
                <form action="/result_obter/" method="post">
                    <input type="hidden" name="result" value="'.$nov['id_projeto'].'"/>
                  <small class="text-muted">
                    <button type="submit" class="btn btn-primary bg-primary">Obter</button>
                  </small>
                
                </form>
                </div>
                
              </div>
            ';
            }
        }else{
            echo '<h4 class="mt-5 mb-3 p-3  text-center bg-dark text-light">Sem pesquisa</h4>';
        }
            ?>
            
            </div>

        </div>
    </div>
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-group">
        <?php
        ##usar SQL ->> LINk = `$_POST['resulta_pesquisa']`
        
        if(isset($_POST['resulta_pesquisa'])){
            $w = mysqli_query($con,"SELECT * FROM `solucoes` WHERE `titulo` LIKE    '%".$_POST['resulta_pesquisa']."%'") or die('erro tabela');
            // $w = mysqli_query($con,"SELECT * FROM `projetos` WHERE `id_projetos` LIKE `%".$_POST['resulta_pesquisa']."%`")or die('erro tabela');
            while($nov = mysqli_fetch_array($w)){
        echo '
          
              <div id="cards" class="card" style="background-image: url(/adm/'.$nov['img'].');background-size: 160%;">
                <div class="card-body">
                  <h5 class="card-title text-light">'.$nov['titulo'].'</h5>
                  <p class="card-text text-light">'.$nov['descricao'].'</p>
                </div>
                <div class="card-footer">
                <form action="/solucoes/" method="post">
                    <input type="hidden" name="result" value="'.$nov['id_solucoes'].'"/>
                    <input type="hidden" name="resulta_solucao" value="'.$nov['id_solucoes'].'"/>
                  <small class="text-muted">
                    <button type="submit" class="btn btn-primary bg-primary">Ver</button>
                  </small>
                
                </form>
                </div>
                
              </div>
            ';
            }
        }/*else{
            echo 'erro';
        }*/
            ?>
            
            </div>

        </div>
    </div>


  <?php require_once "estrutura/rodape.php"; ?>
</body>
</html>