<?php
    include "../adm/conexao.php";
    include "../adm/topo.php";

    $sql = "select * from usuario order by login";
    $seleciona = mysqli_query($conexao,$sql);

?>

        <div class="text-end mt-5">
            <a href="usuarios.php">
                <button class="btn btn-success">
                    Cadastrar Novo 
                </button>
            </a>
        </div>

        <h1 class="text-center mt-2"> Lista de Usuários </h1>

        <!-- ********************************* Cabeçalho da Lista -->
        <div class="row mb-2 bg-dark text-light text-center p-3">
            <div class="col-1"> Foto </div>
            <div class="col-2"> Login </div>
            <div class="col-1"> Senha </div>
            <div class="col-2"> Nome </div>
            <div class="col-2"> Email </div>
            <div class="col-2"> Nivel </div>
            <div class="col-2"> Controle </div>
        </div>

        <!-- ************************* Lista direta do banco de dados -->
        <?php
            while ($exibe = mysqli_fetch_array($seleciona)){
                $login = $exibe['login'];
        ?>
                <div class="row text-center p-1">
                    <div class="col-1 foto"> <img src="<?php echo $exibe['foto'] ?>"> </div>
                    <div class="col-2"> <?php echo $exibe['login'] ?></div>
                    <div class="col-1"> *** </div>
                    <div class="col-2"> <?php echo $exibe['nome'] ?> </div>
                    <div class="col-2"> <?php echo $exibe['email'] ?> </div>
                    <div class="col-2"> <?php echo $exibe['nivel'] ?> </div>
                    <div class="col-2 icones"> 
                        <a href="ver_usuario.php?id=<?php echo $id?>"><img src="../img/ver.png"></a> 
                        <a href="editar_usuario.php?id=<?php echo $id?>"><img src="../img/editar.png"></a>
                        <a href="excluir_usuario.php?id=<?php echo $id?>" onclick="return confirm('Confirma a Exclusão do Registro?')"><img src="../img/delete.png"></a>
                    </div>
                </div>
        <?php
            }
        ?>

<?php
    include "rodape.php";
?>
