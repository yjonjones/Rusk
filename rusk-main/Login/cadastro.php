<?php
include_once 'conexao.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="imgs/logo.png">
        <h1>Cadastro</h1>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (empty($nome) || empty($email) || empty($senha)) {
        echo "<p style='color: #ff0000'>Por favor, preencha todos os campos.</p>";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if ($conexao->query($sql) === TRUE) {
            echo "<p>O seu cadastro foi realizado com sucesso!</p>";
            header("location: /");
        } else {
            echo "<p style='color: #ff0000'>Desculpe, ocorreu um erro ao realizar o cadastro.</p>";
        }
        $conexao->close();
    }
}
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label>Nome:</label>
    <input type="text" name="nome"><br><br>

    <label>Email:</label>
    <input type="email" name="email"><br><br>

    <label>Senha:</label>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Cadastrar">
</form>


</body>
</html>