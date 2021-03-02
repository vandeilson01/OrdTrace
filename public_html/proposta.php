<?php

include('connect.php');

if(isset($_POST['nome']) && isset($_POST['email'])){

    $id = time();
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $desejo =$_POST['desejo'];
    $tel =$_POST['tel'];
    
    
    // $w = mysqli_query($con,"SELECT * FROM `solicitacao");
    
    $in = mysqli_query($con, "INSERT INTO `solicitacao`(`id_solicitacoes`, `nome`, `email`, `tel`, `desejo`, `cep`, `endereco`, `cidade`, `estado`, `updated_at`, `created_at`, `create_time`) VALUES ('$id', '$nome','$email','$tel','$desejo', '---', '---', '---', '---', current_timestamp(), current_timestamp(), current_timestamp() )")or die('erro table');
    if($in){
        echo "sucesso";
    }else{
        echo "erro";
    }
}