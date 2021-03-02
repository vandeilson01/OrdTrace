<?php
session_start();
    $pesquisa = time();
          if(isset($_SESSION['nomes'])){
				if (!array_key_exists('visitas', $_SESSION)){
			        $_SESSION['visitas'] = 1;
			        //echo '<a style="color:#eee">Acesso '.$_SESSION['visitas'].'</a>';
			        
			        
			        $up = mysqli_query($con, "UPDATE ´historico´ SET time_final='current_timestamp()' 
                        WHERE id ='".$_SESSION['visitas']."'");
                        
                         if($up){
                             echo $_SESSION['vis'];
                         }
			        
			        
		        }else {
			        $d = $_SESSION['visitas']++;
			       // echo '<a style="color:#eee">Acesso '.$d.'</a>';
			        
			        
			        //$news = mysqli_query("INSERT INTO `historico`(pesquisa, create_time, time_final) 
                        //VALUES('$pesquisa', current_timestamp(), current_timestamp())");
                        
                        /*if($news)
                            echo '1';
                        else
                            echo '2';
                            */
                        
                        $_SESSION['visitas'] = mysqli_insert_id($con);
			
        		}
		#}else if(isset($_SESSION['adm'])){
			#echo "Bem vindo".$_SESSION['adm'];
		}
         /*           session_start();
                    
                    $pesquisa = time();
                    
                    if(isset($_SESSION['vis'])){
                        
                            
                            
                        $up = mysqli_query($con, "UPDATE ´historico´ SET time_final='current_timestamp()' 
                        WHERE id ='".$_SESSION['vis']."'");
                        
                         if($up){
                             echo $_SESSION['vis'];
                         }
                            
                    }else{
                        
                        $news = mysqli_query("INSERT INTO `historico`(pesquisa, create_time, time_final) 
                        VALUES('$pesquisa', current_timestamp(), current_timestamp())");
                        
                        
                        // current_timestamp()
                        if($news)
                            echo '1';
                        else
                            echo '2';
                        
                        $_SESSION['vis'] = mysqli_insert_id($con);
                    }
                    */
                    
 