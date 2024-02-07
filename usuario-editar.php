<h1>Usuário Editar</h1>
<?php
    $sql_3 = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];
    $res_3 = $conn->query($sql_3);
    $row_3 = $res_3->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value="<?php print $row_3->id_usuario ?>">
    <div class="mb-3">
        <label>Nome do Usuário</label>
        <input type="text" name="nome_usuario" value="<?php print $row_3->nome_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email_usuario" value="<?php print $row_3->email_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" id="tel" name="fone_usuario" value="<?php print $row_3->fone_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf_usuario" value="<?php print $row_3->cpf_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="dt_nasc_usuario" value="<?php print $row_3->dt_nasc_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>