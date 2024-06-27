<!-- Faça uma página de login e cadastro em php, utilizando o css para estilizar. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login e cadastro </title>
</head>
<style>
    body {
        padding: 0;
        margin: 250px;
        background-color: #454d6b;
        display: flex;
        flex-direction: center;
        justify-content: center;
    }

    div {
        background-color: rgba(19, 19, 19, 0.3);
        padding: 40px;
        border-radius: 2px;
        width: 280px;
    }

    form {
        display: flex;
        flex-direction: column;
        padding: 10px 0;
    }

    .submit {
        width: 100%;
        height: 40px;
        background-color: #a13854;
        border: none;
        color: #e1e1e1;
        margin: 10px 0;
    }

    input {
        margin-top: 10px;
        padding: 0 5px;
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #e1e1e1;
        outline: none;
        color: #fff;
    }

    label {
        color: #fff;
        font-size: 18px;
        opacity: 0.8;
    }
</style>

<body>
    <div class="container">
        <form action="Desafiophp1.php" method="post">

            <h1>Login</h1>
            <label for="Usuario">Usuario</label>
            <input type="text" name="Usuario" id="login" placeholder="Digite seu login">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            <input type="submit" class="submit" value="login">
        </form>
    </div>
</body>

</html>