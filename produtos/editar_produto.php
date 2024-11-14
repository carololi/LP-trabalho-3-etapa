<?php
    include "../adm/conexao.php";
    include "../adm/topo.php";


    if(isset($_GET['id'])){
        //entrada
        $id = $_GET['id'];

        //processamento
        $sql = "select * from produto where id = $id";
        $seleciona = mysqli_query($conexao,$sql); //executa a sql
        $exibe = mysqli_fetch_array($seleciona); //carrega o vetor com o banco de dados

        //carrega as variaveis com dados do banco - opcional
        $descricao = $exibe['descricao'];
        $preco = $exibe['preco'];
        $estoque = $exibe['estoque'];

?>
        <h1 class="mt-3 text-center">Editar Produtos</h1>
        <hr>
        <form name="cadastro" method="post" action="update_produto.php">
            <input type="hidden" name="id" value="<?=$id?>">

            <div class="mb-3">
                <label for="descricao" class="form-label">Descriçao</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?=$descricao?>" required>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" 
                value="<?php echo $preco?>" required>
            </div>

            <div class="mb-3">
                <label for="estoque" class="form-label">Estoque</label>
                <input type="number" class="form-control" id="estoque" name="estoque" value="<?=$estoque?>"required>
            </div> 

            <div class="mb-3 text-end">
                <button type="button" class="btn btn-warning" onclick="history.go(-1)">Voltar</button>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>

<?php
    }
    else{//tratamento de erro e redirecionamento
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listar_produtos.php'> aqui </a> para a acessar a lista de produtos cadastrados. </p>
        ";
    }
?>

<?php
  include "../adm/rodape.php";
?>