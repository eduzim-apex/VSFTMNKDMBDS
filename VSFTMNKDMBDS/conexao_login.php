
<?php
$host = "localhost";
$user = "root";
$senha = "";
$bd = "sistema_horarios";

$mysqli= new mysqli($host,$user,$senha,$bd);
if (empty($mysqli)){
    echo "erro";
}
?>