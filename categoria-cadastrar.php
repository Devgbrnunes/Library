<h1>Cadastrar Categoria</h1>
<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome da Categoria</label>
		<input type="text" placeholder="Teste" name="nome_categoria" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>