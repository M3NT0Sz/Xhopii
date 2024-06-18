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

function inserirProdutos($nome, $fabricante, $descricao, $valor, $quantidade, $imgP)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO produto(nome, fabricante, descricao, valor, quantidade, imgP) VALUES ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade', '$imgP')";

    $_SESSION['cadastro'] = "Produto Cadastrados com sucesso";

    mysqli_query($conexao, $consulta);
}

function verificarFuncionarios($email, $senha)
{
    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionarios WHERE fu_email = '$email' and fu_senha = '$senha'";
    $resultado = mysqli_query($conexao, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['logado'] = "Sim";
    } else {
        $_SESSION['cadastro'] = "Funcionario não cadastrado";
    }
}

function verificarEmail($email){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionarios WHERE fu_email = '$email'";
    $resultado = mysqli_query($conexao, $consulta);
    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['achou'] = "Sim";
    } else {
        $_SESSION['cadastro'] = "Funcionario não cadastrado";
    }
}

function alterarSenha($senha){
    $email = $_SESSION['email'];
    unset($_SERVER['email']);
    $conexao = conectarBD();
    $consulta = "UPDATE funcionarios SET fu_senha = '$senha' WHERE fu_email = '$email'";

    $_SESSION['cadastro'] = "Senha alterada com sucesso";

    mysqli_query($conexao, $consulta);
}