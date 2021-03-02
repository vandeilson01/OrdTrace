<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Sobre</title>
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


      <div class="container mt-5 p-3">
        <div class="row justify-content-center mt-5">
          
          <div class="card text-left mt-5" style="background-image: none;width: 100%;">
            
            <div class="card-header">
                <h5 class="card-title">OrdTrace</h5>
            </div>
            <div class="card-body">

            <p class="card-text text-left">
                Inovar um futuro mais moderno e promissor em temos de visibilidade e facilidade.
            </p>
            </div>


          </div>
          
          
          <div class="card text-left" style="background-image: none;width: 100%;">
            
            <div class="card-header">
                <h5 class="card-title">Quem somos</h5>
            </div>
            <div class="card-body">

            <p class="card-text text-left">
                Somos ...
            </p>
            </div>


          </div>

          <div class="card text-left" style="background-image: none;width: 100%;">
            
            <div class="card-header">
                <h5 class="card-title">Objetivo</h5>
            </div>
            <div class="card-body">

            <p class="card-text text-left">
                O objetivo
            </p>
            </div>


          </div>

          <div class="card text-left" style="background-image: none;width: 100%;">
            
            <div class="card-header">
                <h5 class="card-title">História</h5>
            </div>
            <div class="card-body">

            <p class="card-text text-left">
                Tudo comesou...
            </p>
            </div>


          </div>

         </div>
        </div>
    </div>

  <?php require_once "estrutura/rodape.php"; ?>
</body>
</html>