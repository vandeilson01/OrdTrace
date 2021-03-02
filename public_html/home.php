<?php
    include('connect.php');
    
    include('php/visitas.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>OrdTrace</title>
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
            background-size: 100%;
            /* opacity: 0.9; */
            text-align: center;
            float: left;
            margin-bottom: 0px;
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

        @media(max-width:605px){
          .artigo{
            background-size: 255%;
          }
        }
        
        
        @media(max-width:400px){
          .artigo{
            background-size: 400%;
          }
        }
        .artigo button{
            margin-left: 0px;
            height: 40px;
            margin-top: 10px;
            border: 1px solid rgba(55, 50, 155,.7);
            border-radius: 5px 5px 5px 5px;
            background: #929292;
            font-weight: 600;
            line-height: 10px;
        }
        .container:last-child .card{
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
          background-image: url('/img/fundo.jpg');
          background-size: 120%;
          
          height: 700px;
          width: 100%;
        }
        #pacs .container{
          margin-top: 70px;
          margin-bottom: 70px;
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
        /* news */
        .news{
          width: 100%;
          height: auto;
        }
        .news .row .col{
          border-radius: 3px 3px 3px 3px;

          filter: brightness(80%);
        }
        
        
        
        .news .row button{
            background: none;
            border: none;
            float: left;
            height: 100%;
        }
        .news .row button:focus{
            background: none;
            border: none;
            outline: none;
        }
        
        .news .row > .col:nth-child(1){
          width: auto;
          height: auto;
          background-color: #eee;
        }
        .news .row .col:nth-child(2){
          float: right;
          height: auto;
          /* line-height: 40px; */
        }

        .news .row .col:nth-child(2) .col{
          float: right;
          height: 47%;
          width: 100%;
          background-color: #eee;
          margin-top: 0px;
          /* line-height: 40px; */
          text-align: left;
        }
        .news .row .col:nth-child(2) .col:nth-child(2){
          margin-top: 4%;
        }
        /* .news .row .col:nth-child(5){
          float: right;
          height: 400px;
          line-height: 400px;
          background: yellow;
        } */

        .news .row > .col:nth-child(1):hover{
          filter: brightness(100%);
          cursor: pointer;
        }
        .news .row .col:nth-child(2) .col:nth-child(1):hover{
          filter: brightness(100%);
          cursor: pointer;
        }
        .news .row .col:nth-child(2) .col:nth-child(2):hover{
          filter: brightness(100%);
          cursor: pointer;
        }

        @media(max-width:548px){
          /*.news .row {*/
          /*  padding: 5%;*/
          /*}*/
          .news .row > .col:nth-child(1){
            width: 80%;
            padding: 2%;
            height: auto;
            background-color: #eee;
            margin-bottom: 20px;
          }
          .news .row .col:nth-child(2){
            float: right;
            height: 100%;
            /* line-height: 40px; */
          }

          .news .row .col:nth-child(2) .col{
              float: right;
              height: auto;
              width: 100%;
              margin-top: 60px;
          }
        }

        .ves article:nth-child(1){
          background-color: rgba(25, 25, 125,.9);
          width: 100%;
          color: #ffffff;
        }
        .ves article h4{
          width: 50%;
        }

        .ves article:nth-child(2){
          background-color: rgba(245, 58, 11,.8);
          width: 100%;
          color: #ffffff;
        }

        @media(max-width: 1016px){
          .ves article h4{
            width: 100%;
            text-align: center;
            font-size: 20px;
          }
          .ves article:nth-child(2){
            background-color: rgba(245, 58, 11,.8);
            width: 100%;
            color: #ffffff;
          }
        }

        .artigo .container .row .col:first-child{
          text-indent: 1%;
          letter-spacing: 1px;
          
          width: 50%;
          height: 300px;
          line-height: 30px;
          text-align: left;
          border-radius: 3px 3px 3px 3px;
          color: #fff;
        }

        .artigo .container .row .col:first-child h5{
          width: 50%;
        }

        @media(max-width: 1016px){
          .artigo .container .row .col:first-child{
            width: 100%;
            height: auto;
            font-size: 17px;
          }
          .artigo .container .row .col:first-child h5{
            width: 100%;
          }
        }
        /* @media(max-width:800px){
          .artigo .container .row .col:first-child{
            width: 100%;
          }
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
            <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Obter
                </button>
            </form>
      </article>
      ';
    }
?>


      <div class="ves">
        <article class="float-left">
          <h4 class="float-left p-3">Ter uma indentidade online para ver e ser visto pelo público alvo.</h4>
        </article>
  
        <article class="float-right text-right mb-5">
          <h4 class="float-right p-3 ">A ivonação bate a porta, e é oferecida aos que querem se destacarem e progredirem.</h4>
        </article>
      </div>


      <div class="container" style="margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="card-group">
        <?php
            $w = mysqli_query($con,"SELECT * FROM `projetos` ORDER BY `projetos`.`id_projeto` LIMIT 3");
            while($nov = mysqli_fetch_array($w)){
        echo '
              <div id="cards" class="card" style="background-image: url(/adm/'.$nov['id_img'].');">
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
                </div>
                </form>
              </div>
            ';
            }
            ?>

            
            </div>
            <a p class="btn btn-outline-dark mt-2" href="/aplicacoes/">Mais</a>
        </div>
        
    </div>


    <div class="container news mb-5">
      <div class="row justify-content-center">
          
      <?php
            $w = mysqli_query($con,"SELECT * FROM `news` ORDER BY `news`.`id_news` ASC LIMIT 1");
            if($nov = mysqli_fetch_array($w)){
            echo '
            <form  action="/result_blog/" method="post">
            <input type="hidden" value="'.$nov['id_news'].'" id="res" name="res"/>
            <button style="background-image: url(/adm/'.$nov['img'].');background-size:150%;" type="submit">
                <div value="'.$nov['id_news'].'" name="news_res"  class="col">
                    <!-- Column -->
                    <h2 class="text-light">'.$nov['titulo'].'</h2>

                    <h4 class="text-light p-5 mt-5">'.$nov['descricao'].'</h4>
                </div>
                </button>
                </form>
                ';
        
            }
        ?>
        <div class="col">
        <?php
            $s = mysqli_query($con,"SELECT * FROM `news` ORDER BY `news`.`id_news` ASC LIMIT 1,2");
            if($nov = mysqli_fetch_array($s)){
            echo '
            <form action="/result_blog/" method="post">
            <input type="hidden" value="'.$nov['id_news'].'" id="res" name="res"/>
            <button type="submit">
                <div value="'.$nov['id_news'].'" name="news_res" style="background-image: url(/adm/'.$nov['img'].');background-size: 140%;" class="col">
                    <h4 class="text-light">'.$nov['titulo'].'</h4>
                    <h6 class="p-5 text-light">'.$nov['descricao'].'</h6>
                </div>
                </button>
            </form>
                ';
            }
        ?>

        <?php
            $w = mysqli_query($con,"SELECT * FROM `news` ORDER BY `news`.`id_news` ASC LIMIT 2,3");
            if($nov = mysqli_fetch_array($w)){
            echo '
            <form action="/result_blog/" method="post">
            <input type="hidden" value="'.$nov['id_news'].'" id="res" name="res"/>
                <button type="submit">
                <div style="background-image: url(/adm/'.$nov['img'].');background-size: 140%;" class="col">
                    <h4 class="text-light">'.$nov['titulo'].'</h4>
                    <h6 class="p-5 text-light">'.$nov['descricao'].'</h6>
                </div>
                </button>
            </form>
                ';
            }
        ?>

        <!-- <div class="w-100"></div> -->
        
      </div>
    </div>
    </div>

    <article class="artigo mt-5" style="background-image: url('/img/fundo4.jpg');">

        <div class="container mt-5 mb-5">
          <div class="row">
            <div class="col mt-5 mb-5">
                <h5 class="p-5" style="font-weight: 400;">
                  A fluidez de uma convicção sempre irar promover á abertura de novos mares de oportunidades.
                </h5>
              </div>

              

          </div>
        </div>
    </article>
    
     <div class="container">
        <div class="row justify-content-center">
          <div class="card-group mt-5">
          <?php
            $w = mysqli_query($con,"SELECT * FROM `solucoes` ORDER BY `solucoes`.`id_solucoes` ASC LIMIT 0,3");
            while($nov = mysqli_fetch_array($w)){
        echo '
        
              <div id="cards" class="card" style="background-image: url(/adm/'.$nov['img'].');">
                <div class="card-body">
                  <h5 class="card-title text-light">'.$nov['titulo'].'</h5>
                  <p class="card-text text-light">'.$nov['descricao'].'</p>
                </div>
                <div class="card-footer">
                    <form action="/solucoes/" method="post">
                    <input type="hidden" name="resulta_solucao" value="'.$nov['id_solucoes'].'"/>
                        <small class="text-muted">
                            <button type="submit" class="btn btn-primary bg-primary">Ver</button>
                        </small>
                    </form>
                </div>
              </div>
              
            ';
            }
            ?>
            
        </div>
        
            <a p class="btn btn-outline-dark mt-2" href="/solucoes/">Mais</a>
            
            </div>
        </div>
    
          <div class="container mt-5 mb-5">
            <div class="row">
                
            <?php
            $w = mysqli_query($con,"SELECT * FROM `depoimento` ORDER BY `depoimento`.`id_depoimento` ASC LIMIT 2");
            while($nov = mysqli_fetch_array($w)){
            echo '
            
            <div class="col mt-5 mb-5">
                <ul class="list-group list-group-horizontal mt-5 mb-5">
                    <li class="list-group-item"><img src="/adm/'.$nov['img_autor'].'"></li>
                    <li class="list-group-item"> 
                        <h4 class="mb-4">'.$nov['autor'].'</h4>
                        <p>'.$nov['texto'].'</p>
                    </li>
                  </ul>
                  </div>
    
                ';
            }
            ?>
            </div>
            </div>
            
          
        

          <?php
          
          require_once "estrutura/rodape.php"; ?>
          
          
          <script>
            //   $('[name*="news_res"]').click(function(){
            //       $(this).submit();
            //   });
          </script>
</body>
</html>