<h1>Empréstimo Cadastrar</h1>
<form action="?page=emprestimo-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Livro</label>
        <select name="livro_id_livro" class="form-control">
            <option>-=Selecione=-</option>
        <?php
            $sql = "SELECT * FROM livro";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while($row = $res->fetch_object()) {
                    print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
                }
            }else{
                print "<option>Não possui Livros</option>";
            }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Usuário</label>
        <select name="usuario_id_usuario" class="form-control">
            <option>-=Selecione=-</option>
        <?php
            $sql = "SELECT * FROM usuario";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while($row = $res->fetch_object()) {
                    print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
                }
            }else{
                print "<option>Não possui Usuário</option>";
            }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Atendente</label>
        <select name="atendente_id_atendente" class="form-control">
            <option>-=Selecione=-</option>
        <?php
            $sql = "SELECT * FROM atendente";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while($row = $res->fetch_object()) {
                    print "<option value='".$row->id_atendente."'>".$row->nome_atendente."</option>";
                }
            }else{
                print "<option>Não possui Atendentes</option>";
            }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Data do Emprestimo</label>
        <input type="date" placeholder="00/00/0000" name="data_emprestimo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da Devolução</label>
        <input type="date" placeholder="00/00/0000" name="data_devolucao" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>