<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Usuario = $_POST['Usuario'];
    $senha = $_POST['senha'];


    if (!empty($Usuario) && !empty($senha)) {

        $valid_username = "admin";
        $valid_password = "password123";


        if ($Usuario === $valid_username && $senha === $valid_password) {
            echo "<script>alert('Login successful. Welcome, $Usuario!');</script>";
        } else {
            echo "<script>alert('Usuário ou senha incorretos.');</script>";
        }
    } else {
        echo "<script>alert('Por favor, preencha todos os campos.');</script>";
    }
}
?>