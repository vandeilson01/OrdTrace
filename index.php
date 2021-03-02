<!-- <script>
    window.location.href = 'index-home';
</script> -->

<?php
//echo $_SERVER['HTTP_USER_AGENT'] . "";
//echo $_SERVER["REMOTE_ADDR"];

?>

<?php

#pegando IP do usuario e salvando
$arquivo = fopen("texto.php", "r+");
fputs($arquivo, md5($_SERVER["REMOTE_ADDR"])."\n");
fclose($arquivo);


// if(){
    
// }
#

#informações do browser
echo $_SERVER['HTTP_USER_AGENT'] . "<hr />\n";
$browser = get_browser();
foreach ($browser as $name => $value) {
    echo "<b>$name</b> $value <br />\n";
}
#

session_start();

echo 'Bem vindo à página #2<br />';

echo $_SESSION['favcolor']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);

session_destroy();
?>