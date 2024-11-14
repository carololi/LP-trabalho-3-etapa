<?php
  include "../adm/topo.php";
?>
        <h1 class="mt-3 text-center">Cadastro de Produtos</h1>
        <hr>
        <form name="cadastro" method="post" action="cadastrar_produtos.php">

            <div class="mb-3">
                <label for="descricao" class="form-label">Descriçao</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" required>
            </div>

            <div class="mb-3">
                <label for="estoque" class="form-label">Estoque</label>
                <input type="number" class="form-control" id="estoque" name="estoque" required>
            </div> 

            <div class="mb-3 text-end">
                <button type="reset" class="btn btn-warning">Limpar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>

<?php
  include "../adm/rodape.php";
?>