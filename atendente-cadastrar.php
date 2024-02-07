<h1>Cadastrar Atendentes</h1>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Atendente</label>
		<input type="text" placeholder="xxxxxxxxxxxxx" name="nome_atendente" class="form-control">
	</div>
    <div class="mb-3">
		<label>CPF</label>
		<input type="number" placeholder="000.000.000-00" name="cpf_atendente" class="form-control">
	</div>
    <div class="mb-3">
		<label>Email</label>
		<input type="text" placeholder="emailtest@test.com" name="email_atendente" class="form-control">
	</div>
    <div class="mb-3">
		<label>Telefone</label>
		<input type="number" placeholder="(00)00000-0000" name="fone_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>  