<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Blog</title>
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
            background-size: 225%;
          }
        }
        .artigo button{
            margin-left: 0px;
            height: 40px;
            margin-top: 0px;
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
          background-image: url('fundo.jpg');
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

        .artigo .container .row .col:first-child{
          text-indent: 1%;
          letter-spacing: 1px;
          border: 1px solid #ffffff;
          height: 300px;
          line-height: 30px;
          text-align: left;
          border-radius: 3px 3px 3px 3px;
          color: #fff;
        }

        /* @media(max-width:800px){
          .artigo .container .row .col:first-child{
            width: 100%;
          }
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
          .news .row {
            padding: 5%;
          }
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
              margin-top: 70px;
          }
        }

        .nesto{
          height: 500px;
          background-color: #eee;
        }
        @media(max-width:1200px){
          .nesto{
            float: right;
            width: 100%;
            height: auto;
            text-align: center;
          }
        }

        .laster .row .card-group .card{
          width: 300px;
          height: 200px;
        }
        
         .container button{
            width: 100%;
            max-width: inherit;
            border: none;
            background: none;
        }
        
        button:focus{
            outline: none; 
        }

        @media(max-width:1200px){

          .laster .row h5{
            display: none;
          }

        .laster .row .card-group .card{
          width: 400px;
          height: 200px;
        }

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
  
    <div class="container news mt-5 mb-5">
      <div class="row">

      <?php
    if(isset($_POST['res'])){
        
     $w = mysqli_query($con,"SELECT * FROM `news` WHERE `id_news` LIKE '%".$_POST['res']."%'") or die('erro tabela');
     
    if($nov = mysqli_fetch_array($w)){
        if($nov['id_news'] == $_POST['res']){

           echo '
          <h2 class="text-left mt-5 mb-4">'.$nov['titulo'].'</h2>
          
          <img class="imgblog w-100" src="/adm/'.$nov['img'].'"/>
          <br/>
          <p>'.$nov['subtitulo'].': '.$nov['create_time'].'</p>

          <p class="mt-4">'.$nov['texto'].'</p>
        <!-- <div class="w-100"></div> -->
        ';

        }
    }
}else{
    

    $w = mysqli_query($con,"SELECT * FROM `news` ORDER BY `news`.`id_news` LIMIT 1");
    if($nov = mysqli_fetch_array($w)){
        

           echo '
          <h2 class="text-left mt-5 mb-4">'.$nov['titulo'].'</h2>
          
          <img class="imgblog w-100" src="/adm/'.$nov['img'].'"/>
          <br/>
          <p>'.$nov['subtitulo'].': '.$nov['create_time'].'</p>

          <p class="mt-4">'.$nov['texto'].'</p>
        <!-- <div class="w-100"></div> -->
        ';

        }

}
?>
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

    <div class="container">
        <div class="row justify-content-center">    
    <div class="col-md-5 p-4 text-center mr-1 nesto">
        <p>Top Noticias</p>
        <?php


        ###fazer algoritmo mais visitados#####
    

        $w = mysqli_query($con,"SELECT * FROM `news` ORDER BY `news`.`id_news` ASC LIMIT 4");
        while($nov = mysqli_fetch_array($w)){

            echo '
        <p>
        <form action="/result_blog/" method="post">
            <input type="hidden" value="'.$nov['id_news'].'" id="res" name="res"/>
                <button type="submit">
            <img style="width: 50px;height: 50px;" src="/adm/'.$nov['img'].'">
            '.$nov['titulo'].'
        </p>
        </button>
        </form>
        
        ';
        }
        ?>

          </div>
    </div>
    </div>
    

  <?php require_once "estrutura/rodape.php"; ?>
</body>
</html>