<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Aplicações</title>
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
            /*background-image: url('des.jpg');*/
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
            margin-top: 240px;
            margin-bottom: 100px;
            text-align: center;
            text-indent: 10px;

            letter-spacing: 6px;

            mix-blend-mode: exclusion;
        }
        @media(max-width:1200px){
          .artigo{
            background-size: 110%;
          }
        }

        @media(max-width:1100px){
          .artigo{
            background-size: 155%;
          }
        }

        @media(max-width:800px){
          .artigo{
            background-size: 175%;
          }
        }

        @media(max-width:700px){
          .artigo{
            background-size: 195%;
          }
          .artigo h1{
            font-size: 33px;
          }
        }

        @media(max-width:505px){
          .artigo{
            background-size: 325%;
          }
        }
        .artigo button{
            
            height: 40px;
            /*margin-top: 100px;*/
            border: 1px solid rgba(55, 50, 155,.7);
            border-radius: 5px 5px 5px 5px;
            background: #929292;
            font-weight: 600;
            line-height: 10px;
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
          margin-top: 40px;
        }
        .list-group-item img{
          width: auto;
          height: 100px;
          border-radius: 100% 100%;
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

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
          background-color: #ffffff;
        }

        .list-group-item .nav-link.active{
          background-color: transparent;
        }
        .list-group-item .nav-link img{
          border: 3px solid #ffffff;
        }
        .list-group-horizontal .list-group-item:last-child{
          border-top-right-radius: 0; 
          border-bottom-right-radius: 0;
        }
        .list-group-item{
          border: none;
          background-color: transparent;
        }

        #pacs{
          background-image: url('/img/fundo.png');
          background-size: 120%;
          
          height: auto;
          width: 100%;
        }
        #pacs .container{
          margin-top: 70px;
          margin-bottom: 70px;
        }

        @media(max-width: 922px){
          #pacs .container .row .col img{
            width: 70px;
            height: auto;
          }
        }
        @media(max-width: 800px){
          #pacs .container .row .col img{
            width: 70px;
            height: auto;
          }
          #pacs .container .row .col ul li{
            width: 70px;
            height: auto;
            float: left;
          }
        }

        @media(max-width: 590px){
          /* #pacs .container .row .col img{
            width: 70px;
            height: auto;
          } */
          #pacs .container .row .col ul li{
            width: 170px;
            height: auto;
            float: left;
          }
        }

        .tab-content{
          background-color: transparent;
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

        /* .navbar-brand{
            display: block;
        }
        @media(max-width:989px){
          .navbar-brand{
            display: block;
          }
        } */

        .dropdown-menu{width: 300px;}

        @media(max-width:989px){
          .dropdown-menu{
            width: 100%;
          }
        }

        .dropdown-menu input{
          width: 80%;
        }

        /* ul[name=pesquisa]{

        } */
        
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
  

    <?php
    $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 1");
    while($nov = mysqli_fetch_array($w)){
    echo '
      <article style="background-image:url(/adm/'.$nov['id_img'].');" class="artigo mt-5">
          <h1>'.$nov['titulo'].'</h1>
          <form action="/result_obter/" method="post">
            <input type="hidden" name="result" value="'.$nov['id_projeto'].'"/>
            <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Obter</button>
            </form>
      </article>
      ';
    }
?>


      <div class="container">
          <div class="row justify-content-center">
              <div class="card-group">
          <?php
            $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 0,3");
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
            ?>
            
              
              </div>
              
          </div>
      </div>
      
        <div class="container">
          <div class="row justify-content-center">
              <div class="card-group">
          <?php
            $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 3,6");
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
            ?>
            
              
              </div>
              
          </div>
      </div>
      
      <?php
    $w = mysqli_query($con,"SELECT * FROM `video` ORDER BY `video`.`id_video` DESC LIMIT 1");
    while($nov = mysqli_fetch_array($w)){
    echo '
      <div class="embed-responsive embed-responsive-16by9" style="margin-top: 100px;margin-bottom: 100px;">
        <!--<iframe class="embed-responsive-item" src="'.$nov['video'].'" allowfullscreen></iframe>-->
        <iframe class="embed-responsive-item" src="/video/covid-19.html" allowfullscreen></iframe>
      </div>
      ';
    }
?>
      

    <div  id="pacs" style="display: none;">
      <div  class="container">
        <div class="row justify-content-center">
        
        
        <!--<div class="container">
            <div class="row">
              <div class="col">


                <ul class="nav nav-pills list-group list-group-horizontal" id="pills-tab" role="tablist">

                <?php
                    $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 1");
                    if($nov = mysqli_fetch_array($w)){
                echo '
                    <li class="nav-item list-group-item">
                    <a class="nav-link active" id="pills-'.$nov['titulo'].'-tab" data-toggle="pill" href="#pills-'.$nov['titulo'].'" role="tab" aria-controls="pills-'.$nov['titulo'].'" aria-selected="true">
                      <img src="/adm/'.$nov['id_img'].'">
                    </a>
                  </li>
                    ';
                    }
                ?>
                
                <?php
                    $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 2,9");
                    while($nov = mysqli_fetch_array($w)){
                echo '
                    <li class="list-group-item">
                    <a class="nav-link" id="pills-'.$nov['titulo'].'-tab" data-toggle="pill" href="#pills-'.$nov['titulo'].'" role="tab" aria-controls="pills-'.$nov['titulo'].'" aria-selected="false">
                      <img src="/adm/'.$nov['id_img'].'">
                    </a>
                  </li>
                    ';
                    }
                ?>
                    
                  </ul>

              </div>
              
              <div class="col tab-content" id="pills-tabContent">

              <?php
                    $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 1");
                    if($nov = mysqli_fetch_array($w)){
                echo '

                <div class="tab-pane fade active show" id="pills-'.$nov['titulo'].'" role="tabpanel" aria-labelledby="pills-'.$nov['titulo'].'-tab">
                      <img style="width: 100%" id="'.$nov['titulo'].'" class="float-left" src="/adm/'.$nov['id_img'].'">
                  </div>
                  ';
                    }
                    ?>
                    
                    <?php
                    $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` ASC LIMIT 2,9");
                    while($nov = mysqli_fetch_array($w)){
                echo '

                <div class="tab-pane fade" id="pills-'.$nov['titulo'].'" role="tabpanel" aria-labelledby="pills-'.$nov['titulo'].'-tab">
                      <img style="width: 100%" id="'.$nov['titulo'].'" class="float-left" src="/adm/'.$nov['id_img'].'">
                  </div>
                  ';
                    }
                    ?>

              </div>
            </div>
            
          </div>-->
    
        </div>
      </div>
    </div>


  <?php require_once "estrutura/rodape.php"; ?>
</body>
</html>