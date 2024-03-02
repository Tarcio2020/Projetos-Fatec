<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form action="" method="post">
        <p>Nome: <br><input type="text" name="nome"></p>
        <p>Telefone: <br><input type="text" name="telefone"></p>
        <p>Endereço: <br><input type="text" name="endereco"></p>
        <p>E-mail: <br><input type="email" name="email"></p>
        <p>Enviar<input type="submit" name="enviar" value="Enviar"></p>
    </form>
    <?php
        $conexao=mysqli_connect('localhost', 'root','', 'ideal');

        if(isset($_POST['enviar'])){
            $nome=$_POST['nome'];
            $telefone=$_POST['telefone'];
            $endereco=$_POST['endereco'];
            $email=$_POST['email'];
            $sql="insert into cliente (nome,telefone,endereco,email) values('$nome','$telefone','$endereco','$email')";
            mysqli_query($conexao,$sql);
        }
    ?> 
</body>
</html>