<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tela_login/estilos.css">
</head>

<body>
    <div class="caixa__login">
   
        <form action="recebe-cadastro.php" method="post">

            <div class="caixa__login-input">
                <input type="text" name="nome" required />
                <label>Nome</label>
            </div>

            <div class="caixa__login-input">
                <input type="email" name="email" required />
                <label>Email</label>
            </div>
            <div class="caixa__login-input">
                <input type="password"  name="senha" minlength="6" required />
                <label>Senha</label>
            </div>
           <button class="botao">cadastrar</button>
        </form>
    </div>
</body>

</html>