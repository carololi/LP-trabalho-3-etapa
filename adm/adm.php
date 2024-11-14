<?php
    include "topo.php";
    include "segurancaAdm.php";
?>

<div class="row text-center quadro">

    <div class="col-12 col-md-6">
        <a href="../usuarios/listar_usuarios.php">
            <img src="../img/usuarios.png" alt="">
            <p>USUÁRIOS</p>
        </a>
    </div>

    <div class="col-12 col-md-6">
        <a href="../produtos/listar_produtos.php">
            <img src="../img/produtos.png" alt="">
            <p>PRODUTOS</p>
        </a>
    </div>

    <div class="col-12 col-md-6">
        <a href="../aluno/listar_aluno.php">
            <img src="../img/aluno.png" alt="">
            <p>ALUNO</p>
        </a>
    </div>

    <div class="col-12 col-md-6">
        <a href="../professor/listar_professor.php">
            <img src="../img/professor.png" alt="">
            <p>PROFESSOR</p>
        </a>
    </div>

</div>

<?php
    include "rodape.php";
?>