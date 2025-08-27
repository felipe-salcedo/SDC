<?php include "../conecta.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>SQLi Teste</title></head>
<body>
    <form action="" method="GET">
        Nome do usuário: <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    if (isset($_GET["nome"])) {
        $nome = $_GET["nome"];
        $sql = "SELECT * FROM usuarios WHERE nome = '$nome' ";
        echo $sql . "<br>";
        $dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        while ($linha = mysqli_fetch_assoc($dados)) {
            echo "<pre>Endereco: {$linha["endereco"]}<br>Telefone: {$linha["telefone"]}</pre>";
        }
        mysqli_close($conexao);
    }
    ?>
</body>
</html>
