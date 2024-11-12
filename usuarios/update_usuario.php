<?php

include "../adm/conexao.php";
include "../adm/topo.php";

if (isset($_POST['id'])) {
    // Entrada
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    // Se a senha foi alterada, criptografa a nova senha
    if (!empty($senha)) {
        $senha = password_hash($senha, PASSWORD_DEFAULT); // Criptografa a senha
    } else {
        // Caso a senha não tenha sido alterada, mantém a senha original
        $senha = $_POST['senha_antiga']; 
    }

    // Processamento 
    $sql = "UPDATE usuario SET nome = '$nome', senha = '$senha', email = '$email', foto = '$foto', nivel = '$nivel' WHERE login = '$id'";
    $alterar = mysqli_query($conexao, $sql);

    // Saída
    if ($alterar) {
        echo "
            <script>
                alert('Registro Alterado com Sucesso!');
                window.location = 'listar_usuarios.php';
            </script>
        ";
    } else {
        echo "
            <p> Banco de Dados Temporariamente fora do ar. Tente novamente em breve. </p>
            <p> Entre em contato com o administrador do Site  para solicitar ajuda... </p>
        ";
        echo mysqli_error($conexao);
    }
} else { // Tratamento de erro e redirecionamento
    echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listar_usuarios.php'> aqui </a> para acessar a lista de usuários cadastrados. </p>
    ";
}

include "../adm/rodape.php";
?>
