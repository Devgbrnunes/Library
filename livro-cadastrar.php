<h1>Livro Cadastrar</h1>
<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Categoria</label>
        <select name="categoria_id_categoria" class="form-control">
            <option>-=Selecione=-</option>
        <?php
            $sql = "SELECT * FROM categoria";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while($row = $res->fetch_object()) {
                    print "<option value='".$row->id_categoria."'>".$row->nome_categoria."</option>";
                }
            }else{
                print "<option>Não possui categoria</option>";
            }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Título do Livro</label>
        <input type="text" placeholder="Livro teste" name="titulo_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Autor do Livro</label>
        <input type="text" placeholder="xxxxxxxx xxxxxx" name="autor_livro" class="form-control">
    </div>
    <div>    
        <label>Editora do Livro</label>
        <input type="text" placeholder="xxxxxxxx" name="editora_livro" class="form-control">
    </div>
    <div>
        <label>Edição do Livro</label>
        <input type="text" placeholder="xxxxxxxx" name="edicao_livro" class="form-control">
    </div>
    <div>
        <label>Localidade do Livro</label>
        <input type="text" placeholder="xxxxxxxx" name="localidade_livro" class="form-control">
    </div>
    <div>
        <label>Ano do Livro</label>
        <input type="number" placeholder="0000" name="ano_livro" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>