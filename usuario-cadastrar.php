<h1>Usuário Cadastrar</h1>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Usuário</label>
		<input type="text" placeholder="xxxxxxxxxxxxx" name="nome_usuario" class="form-control">
	</div>
    <div class="mb-3">
		<label>Email</label>
		<input type="text" placeholder="emailtest@test.com" name="email_usuario" class="form-control">
	</div>
    <div class="mb-3">
		<label>Telefone</label>
		<input type="tel" id="tel" placeholder="(00)00000-0000" name="fone_usuario" class="form-control">
	</div>
    <div class="mb-3">
		<label>CPF</label>
		<input type="number" placeholder="000.000.000-00" name="cpf_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" placeholder="00/00/000" name="dt_nasc_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>  