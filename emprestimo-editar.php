<h1>Empréstimo Editar</h1>
<h1>Livro Editar</h1>
<?php
    $sql_4 = "SELECT * FROM emprestimo WHERE id_emprestimo=".$_REQUEST["id_emprestimo"];
    $res_4 = $conn->query($sql_4);
    $row_4 = $res_4->fetch_object();
?>
<form action="?page=emprestimo-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_livro" value="<?php print $row_4->id_livro ?>">
    <input type="hidden" name="id_usuario" value="<?php print $row_4->id_usuario ?>">
    <input type="hidden" name="id_atendente" value="<?php print $row_4->id_atendente ?>">
    <div class="mb-3">
        <label>Livro</label>
        <select name="livro_id_livro" class="form-control">
            <option>-=Selecione=-</option>
        <?php
            $sql = "SELECT * FROM livro";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_object()) {
                    if($row_4->livro_id_livro == $row->id_livro) {
                        print "<option value='".$row->id_livro."' selected>".$row->titulo_livro."</option>";
                    } else {
                        print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
                    }
                }
            } else {
                print "<option>Não possui Livro</option>";
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
                while ($row = $res->fetch_object()) {
                    if($row_4->usuario_id_usuario == $row->id_usuario) {
                        print "<option value='".$row->id_usuario."' selected>".$row->nome_usuario."</option>";
                    } else {
                        print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
                    }
                }
            } else {
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
                while ($row = $res->fetch_object()) {
                    if($row_4->atendente_id_atendente == $row->id_atendente) {
                        print "<option value='".$row->id_atendente."' selected>".$row->nome_atendente."</option>";
                    } else {
                        print "<option value='".$row->id_atendente."'>".$row->nome_atendente."</option>";
                    }
                }
            } else {
                print "<option>Não possui atendente</option>";
            }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Data do Emprestimo</label>
        <input type="date" name="data_emprestimo" value="<?php print $row_4->data_emprestimo; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da Devolução</label>
        <input type="date" name="data_devolucao" value="<?php print $row_4->data_devolucao; ?>" class="form-control">
    </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>