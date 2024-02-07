<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO usuario (
			nome_usuario,
			email_usuario,
			fone_usuario,
			cpf_usuario	,
			dt_nasc_usuario	
		) VALUES (
			'".$_POST["nome_usuario"]."',
			'".$_POST["email_usuario"]."',
			'".$_POST["fone_usuario"]."',
			'".$_POST["cpf_usuario"]."',
			'".$_POST["dt_nasc_usuario"]."'
		)";
        
        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        }
        break;
    
    case 'editar':
        $sql = "UPDATE usuario SET
					nome_usuario='".$_POST['nome_usuario']."',
					email_usuario='".$_POST['email_usuario']."',
					fone_usuario='".$_POST['fone_usuario']."',
					cpf_usuario='".$_POST['cpf_usuario']."',
					dt_nasc_usuario='".$_POST['dt_nasc_usuario']."'
				WHERE
					id_usuario=".$_POST['id_usuario'];

		$res = $conn->query($sql);

		if ($res==true) {
			print "<script>alert('Editou com sucesso!');</script>";
			print "<script>location.href='?page=usuario-listar';</script>";
		} else {
			print "<script>alert('Não foi possível!');</script>";
			print "<script>location.href='?page=usuario-listar';</script>";
		}
        break;

    case 'excluir':
        $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];

		$res = $conn->query($sql);

		if ($res==true) {
			print "<script>alert('Excluio com sucesso!');</script>";
			print "<script>location.href='?page=usuario-listar';</script>";
		} else {
			print "<script>alert('Não foi possível!');</script>";
			print "<script>location.href='?page=usuario-listar';</script>";
		}
        break;
}
