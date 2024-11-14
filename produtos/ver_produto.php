<?php

    include "../adm/conexao.php";
    include "../adm/topo.php";

    if(isset($_GET['id'])){
        //entrada
        $id = $_GET['id'];

        //processamento
        $sql = "select * from produto where id = '$id'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

        //carregar as variaveis
        $descricao = $exibe['descricao'];
        $preco = $exibe['preco'];
        $estoque = $exibe['estoque'];

?>



        <h1 class="mt-3 text-center"> Produto: <?php echo $descricao ?></h1>
        <hr>
        <p> Preço: <?php echo $preco ?> </p>
        <p> Estoque: <?php echo $estoque ?> </p>
    

        <hr>

        <div class="row">
            <div class="col text-start">
                    <button type="button" class="btn btn-warning" onclick="history.go(-1)">Voltar</button>
            </div>
            <div class="col text-end">
                    <button type="button" class="btn btn-primary" onclick="location.href='editar_produto.php?id=<?php echo $id ?>'">Editar</button>
            </div>
        </div>
        
<?php
    
    }

    else{//tratamento de erro e redirecionamento
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listar_produtos.php'> aqui </a> para a acessar a lista de produtos cadastrados. </p>
        ";
    }

    include "../adm/rodape.php";
?>
