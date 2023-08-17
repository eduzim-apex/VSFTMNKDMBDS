
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferindo login</title>
    <script type="text/javascript">
    function ok(){
        setTimeout("window.location='index.php'");
    }
    function error(){
        setTimeout("window.location='tela_login/login.php'");
    }
</script>
</head>
<body>
    <?php

session_start();
    require './conexao_login.php';
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $resultado = "SELECT * FROM aluno WHERE nome = '$nome' AND senha= '$senha'";

    if($resultado>0){
      $_SESSION['nome'] = $nome;
      $_SESSION['senha'] = $senha;
      echo"<script>ok()</script>";
    }else{
        unset ($_SESSION['nome']);
        unset ($_SESSION['senha']);
        echo"<script>error()</script>";
    }

    ?>
</body>
</html>