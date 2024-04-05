<?php

    include 'conexao.php';


    $nome_adm = $_POST['nome'];
    $senha_adm = $_POST['senha'];
    $email_adm = $_POST['email'];
    $cpf_adm = $_POST['cpf'];
    $telefone_adm = $_POST['telefone'];
    $aniversario_adm = $_POST['aniversario'];
    $dataInicio_adm = $_POST['data'];

    $sql = ("INSERT INTO empresa (nome_adm,senha,email,cpf,telefone,aniversario,datainicio) VALUES ('$nome_adm', '$senha_adm', '$email_adm', '$cpf_adm', '$telefone_adm', '$aniversario_adm', '$dataInicio_adm')");

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if($rows > 0) {
    echo "<script>alert('Adm Cadastrado!');window.location.href='http://localhost/barbearia_alunos/cadastrar.php'</script>";
    }

    else{
    echo "ERRO AO CADASTRAR ADM";
    }



?>
