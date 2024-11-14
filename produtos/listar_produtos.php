<?php
    include "../adm/conexao.php";
    include "../adm/topo.php";

    $sql = "select * from produto order by descricao";
    $seleciona = mysqli_query($conexao,$sql);

?>

        <div class="text-end mt-5">
            <a href="produtos.php">
                <button class="btn btn-success">
                    Cadastrar Novo 
                </button>
            </a>
        </div>

        <h1 class="text-center mt-2"> Lista de Produtos </h1>

        <!-- ********************************* Cabeçalho da Lista -->
        <div class="row mb-2 bg-dark text-light text-center p-3">
            <div class="col-2"> id </div>
            <div class="col-3"> Descrição</div>
            <div class="col-3"> Preço </div>
            <div class="col-2"> Estoque </div>
            <div class="col-2"> Controle </div>
        </div>

        <!-- ************************* Lista direta do banco de dados -->
        <?php
            while ($exibe = mysqli_fetch_array($seleciona)){
                $id = $exibe['id'];
        ?>
                <div class="row text-center p-1">
                    <div class="col-2"> <?php echo $exibe['id'] ?> </div>
                    <div class="col-3"> <?php echo $exibe['descricao'] ?></div>
                    <div class="col-3"> <?php echo $exibe['preco'] ?> </div>
                    <div class="col-2"> <?php echo $exibe['estoque'] ?> </div>
                    <div class="col-2 icones"> 
                        <a href="ver_produto.php?id=<?php echo $id?>"><img src="../img/ver.png"></a> 
                        <a href="editar_produto.php?id=<?php echo $id?>"><img src="../img/editar.png"></a>
                        <a href="excluir_produto.php?id=<?php echo $id?>" onclick="return confirm('Confirma a Exclusão do Registro?')"><img src="../img/delete.png"></a>
                    </div>
                </div>
        <?php
            }
        ?>

<?php
  include "../adm/rodape.php";
?>