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
