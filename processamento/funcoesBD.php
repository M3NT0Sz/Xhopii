<?php
function conectarBD()
{
    $conexao = mysqli_connect("localhost", "root", "", "xhopii");
    return $conexao;
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha, $img)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha, img) VALUES ('$cpf', '$nome', '$sobrenome', '$dataNasc', '$telefone', '$email', '$senha', '$img')";

    $_SESSION['cadastro'] = "Cliente cadastrado com sucesso";

    mysqli_query($conexao, $consulta);
}

function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $cargoFuncao, $salario, $telefone, $email, $senha, $imagem)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionarios (fu_cpf, fu_nome, fu_sobrenome, fu_datanasc, fu_cargo, fu_salario, fu_telefone, fu_email, fu_senha, fu_imagem) VALUES ('$cpf', '$nome', '$sobrenome', '$dataNasc', '$cargoFuncao', '$salario', '$telefone', '$email', '$senha', '$imagem')";

    $_SESSION['cadastro'] = "Funcionario cadastrado com sucesso";

    mysqli_query($conexao, $consulta);
}

function inserirProdutos($nome, $fabricante, $descricao, $valor, $quantidade, $imgP){
    $conexao = conectarBD();
    $consulta = "INSERT INTO produto(nome, fabricante, descricao, valor, quantidade, imgP) VALUES ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade', '$imgP')";

    $_SESSION['cadastro'] = "Produto Cadastrados com sucesso";

    mysqli_query($conexao, $consulta);
}
