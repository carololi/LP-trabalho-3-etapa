<?php
    include "../adm/topo.php";
?>
    <div class="login">

        <h1> Area de Login </h1>
        <hr>
        <form name="form" method="post" action="#">
            <div class="mb-3">
                <label for="login" class="form-label">login</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <div class="mb-3 text-center"> 
                <a href="../usuarios/usuarios.php"> Nao possuo cadastro </a>
            </div>

            <div class="text-center text-danger">
                <?php include "valida.php"; ?>
            </div>

            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
            
        </form>
    </div>
    
    
    <?php
    include "../adm/rodape.php";
    ?>