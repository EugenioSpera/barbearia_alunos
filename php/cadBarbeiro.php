<?php

    include 'conexao.php';


    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $aniversario = $_POST['aniversario'];
    $dataInicio = $_POST['data'];

    $sql = ("INSERT INTO barbeiro (nome,senha,email,cpf,telefone,aniversario,datainicio) VALUES ('$nome', '$senha', '$email', '$cpf', '$telefone', '$aniversario', '$dataInicio')");

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if($rows > 0) {
    echo "<script>alert('barbeiro cadastrado!');window.location.href='http://localhost/barbearia/cadastrar.php'</script>";
    }

    else{
    echo "ERRO AO CADASTRAR BARBEIRO";
    }



?>
