<?php

session_start();

require_once "funcoesBD.php";

//Cadastro de Funcionarios
if (
    !empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) &&
    !empty($_POST['inputCPF']) && !empty($_POST['inputData']) && !empty($_POST['inputCargoFuncao']) && !empty($_POST['inputSalario']) &&
    !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
    !empty($_POST['inputSenha'])
) {

    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputData'];
    $cargoFuncao = $_POST['inputCargoFuncao'];
    $salario = $_POST['inputSalario'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $imagem = addslashes(file_get_contents($_FILES['inputFile']['tmp_name']));

    inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $cargoFuncao, $salario, $telefone, $email, $senha, $imagem);

    header("Location: ../cadastroFuncionarios.php");
    die();
}


if (
    !empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) &&
    !empty($_POST['inputCPF']) && !empty($_POST['inputData']) &&
    !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
    !empty($_POST['inputSenha'])
) {
    $nome =  $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputData'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));

    inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha, $img);

    header("Location: ../cadastroCliente.php");
    die();
}

if (
    !empty($_POST['nome']) && !empty($_POST['fabricante']) &&
    !empty($_POST['descricao']) && !empty($_POST['valor']) &&
    !empty($_POST['quantidade'])
) {
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $imgP = addslashes(file_get_contents($_FILES['imgP']['tmp_name']));

    inserirProdutos($nome, $fabricante, $descricao, $valor, $quantidade, $imgP);

    header("Location: ../cadastroProduto.php");
    die();
}

if (
    !empty($_POST['inputEmail']) && !empty($_POST['inputSenha'])
) {
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    verificarFuncionarios($email, $senha);

    if (isset($_SESSION['logado']) != "") {
        header("Location: ../home.php");
    } else {
        header("Location: ../login.php");
    }
    die();
}

if (isset($_SESSION['logado']) == "Sim") {
    session_destroy();
    header("Location: ../home.php");
    die();
}

if (
    !empty($_POST['inputEmail'])
) {
    $email = $_POST['inputEmail'];

    verificarEmail($email);

    if (isset($_SESSION['achou']) == "Sim") {
        header("Location: ../senha.php");
        $_SESSION['email'] = $email;
    } else {
        header("Location: ../login.php");
    }
    die();
}

if (
    !empty($_POST['inputSenha']) && !empty($_POST['inputSenhaDenovo'])
) {
    $senha = $_POST['inputSenha'];
    $senhaDeNovo = $_POST['inputSenhaDenovo'];

    if ($senha == $senhaDeNovo) {
        alterarSenha($senha);
        header("Location: ../login.php");
    } else {
        $_SESSION['senhaErrada'] = "Senha Errada";
        header("Location: ../senha.php");
    }
    die();
}
