<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Produtos</title>
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
        .artigo > button{
            margin-left: 40px;
            height: 40px;
            margin-top: 100px;
            border: 1px solid rgba(55, 50, 155,.7);
            border-radius: 5px 5px 5px 5px;
            background: #929292;
            font-weight: 600;
        }
        .card{
            background-image: url('des.jpg');
            background-size: 130%;
            border-left: 1px solid white;
            margin-right: 3px;
            float: left;
            bottom: 30px;
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
        .embed-responsive{
          margin-top: 80px;
        }
        .row > button{
          /*margin-top: 40px;*/
        }
        .list-group-item img{
          width: auto;
          height: 100px;
        }
        @media(max-width: 700px){
          .list-group-item img{
            width: auto;
            height: 70px;
          }
        }
        .navbar{
          background-color: #000;
        }
        /* @media(max-width: 600px){
          
        } */

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

      <div class="container p-4 mt-5">
        <div class="row justify-content-center mt-5">
            
            <div class="container">
                <div class="row">
                    <div class="col">
                    <ul class="list-group list-group-horizontal">

        <?php
            if(isset($_POST['result'])){
                
                $r = mysqli_query($con,"SELECT * FROM `projetos` WHERE `id_projeto` LIKE '%".$_POST['result']."%'") or die('erro tabela');
                
                if($nov = mysqli_fetch_array($r)){
                    if($nov['id_projeto'] == $_POST['result'] ){
                    echo '
                    
                                <li class="list-group-item"><img src="/adm/'.$nov['id_img'].'"></li>
                                <li class="list-group-item"> 
                                    <h3 class="text-primary">'.$nov['titulo'].'
                                        <a class="text-dark float-right">'.$nov['categoria'].'</a>
                                    </h3>
                                    <hr/>
                                    <p>'.$nov['descricao'].'</p>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Adquirir</button>
                                </li>
                    ';
                    }
                }
                echo '        </ul>
                
                            </div>
                        </div>
                    </div>';
                
            }else{
                echo '<div class="container">
                        <div class="row">
                            <div class="col">
                            <ul class="list-group list-group-horizontal">';
                $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto`");
                if($nov = mysqli_fetch_array($w)){
                   
                    
                    }
                    
                echo '</ul>
                
                            </div>
                        </div>
                    </div>';
                
            }
            ?>
      </ul>
          
        </div>
      </div>
      
      </div>


   
        </div>
        
    </div>

      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <?php
        $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC  LIMIT 1");
          if($nov = mysqli_fetch_array($w)){
            echo '
          <div class="carousel-item active">
            <img class="d-block w-100" src="/adm/'.$nov['id_img'].'" alt="First slide">
          </div>';
          }
          ?>
          <?php
          $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC  LIMIT 1,2");
          
          if($nov = mysqli_fetch_array($w)){
            echo '
          <div class="carousel-item ">
            <img class="d-block w-100" src="/adm/'.$nov['id_img'].'" alt="First slide">
          </div>';
          }
          ?>
          <?php
          $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC  LIMIT 3,2");
          if($nov = mysqli_fetch_array($w)){
            echo '
          <div class="carousel-item ">
            <img class="d-block w-100" src="'.$nov['id_img'].'" alt="First slide">
          </div>';
          }
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          

          <div class="card-group">
              <div id="cards" class="card-group">
          <?php
            $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 1,9");
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
                    <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Obter</button>
                    </form>
                </div>
                </div>
              
            ';
            }
            ?>
            </div>

            
            
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitar Site</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="#" method="post">

          <div class="form-group">
            <label for="exampleInputPassword1">Nome</label>
            <input type="text" class="form-control" name="nome" id="exampleInputPassword1" placeholder="Nome">
            <small id="nameHelp" class="form-text text-muted">Nome e sobrenome</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemplo@email.com">
            <small id="emailHelp" class="form-text text-muted">E-mail atual</small>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="tel" class="form-control" name="tel" id="exampleInputTel1" placeholder="(98) 9 0000-0000">
            <small id="emailHelp" class="form-text text-muted">whatsaap</small>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Como deseja?(Opcional)</label>
            <textarea class="form-control" name="desejo" id="message-text"></textarea>
            <small id="emailHelp" class="form-text text-muted">você pode colocar a sua proposta de lance.</small>
            
            
          </div>
        
      </div>
      
      <?php echo ' <input type="hidden" name="id_projeto" value=" '.$_POST['result'].'"> '?>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Enviar</button>
      </div>
      
      </form>
    </div>
  </div>
</div>


</div>
</div>
</div>

<?php require_once "estrutura/rodape.php"; ?>

</body>
</html>

<?php
if(isset($_POST['nome']) && isset($_POST['email'])){

    // $id = time();
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $desejo =$_POST['desejo'];
    $tel =$_POST['tel'];
    
    $id_projeto = $_POST['id_projeto'];
    
    
    // $w = mysqli_query($con,"SELECT * FROM `solicitacao");
    
    $in = mysqli_query($con, "INSERT INTO `solicitacao`(`id_projeto`,`nome`, `email`, `tel`, `desejo`, `cep`, `endereco`, `cidade`, `estado`, `updated_at`, `created_at`, `create_time`) VALUES ('$id_projeto','$nome','$email','$tel','$desejo', '---', '---', '---', '---', current_timestamp(), current_timestamp(), current_timestamp() )")or die('erro table');
    if($in){
        // echo "sucesso";
    }else{
        echo "erro";
    }
}