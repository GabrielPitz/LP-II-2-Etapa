<?php
    include "../adm/topo.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="login-box p-5 shadow-lg rounded" style="max-width: 700px; width: 100%; background-color: #fff;">
        
        <h2 class="text-center text-primary mb-4">Bem-vindo!</h2>
        <h4 class="text-center mb-4 text-secondary">Área de Login</h4>
        <h4 class="text-center mb-4 text-secondary">Acesse Nosso Universo Musical</h4>
      
        <form name="form" method="post" action="#">
            <div class="mb-4">
                <label for="login" class="form-label">Usuário</label>
                <input type="text" class="form-control border-primary" id="login" name="login" placeholder="Digite seu usuário">
            </div>
            <div class="mb-4">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control border-primary" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <div class="text-center my-3">
                <a href="../usuarios/usuarios.php" class="text-decoration-none text-secondary"><u>Não Possuo Cadastro</u></a>
            </div>
            <div class="text-center text-danger mb-3">
                <?php include "valida.php"; ?>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
            </div>
        </form>
    </div>
</div>
<?php include "../adm/rodape.php"; ?>
