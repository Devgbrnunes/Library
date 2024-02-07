<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO atendente (
			nome_atendente,
			cpf_atendente,
			email_atendente,
			fone_atendente	
		) VALUES (
			'".$_POST["nome_atendente"]."',
			'".$_POST["cpf_atendente"]."',
			'".$_POST["email_atendente"]."',
			'".$_POST["fone_atendente"]."'
		)";
        
        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=atendente-listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=atendente-listar';</script>";
        }
        break;
    
    case 'editar':
        $sql = "UPDATE atendente SET
					nome_atendente='".$_POST['nome_atendente']."',
					cpf_atendente='".$_POST['cpf_atendente']."',
					email_atendente='".$_POST['email_atendente']."',
					fone_atendente='".$_POST['fone_atendente']."'
				WHERE
					id_atendente=".$_POST['id_atendente'];

		$res = $conn->query($sql);

		if ($res==true) {
			print "<script>alert('Editou com sucesso!');</script>";
			print "<script>location.href='?page=atendente-listar';</script>";
		} else {
			print "<script>alert('Não foi possível!');</script>";
			print "<script>location.href='?page=atendente-listar';</script>";
		}
        break;

    case 'excluir':
        $sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST['id_atendente'];

		$res = $conn->query($sql);

		if ($res==true) {
			print "<script>alert('Excluio com sucesso!');</script>";
			print "<script>location.href='?page=atendente-listar';</script>";
		} else {
			print "<script>alert('Não foi possível!');</script>";
			print "<script>location.href='?page=atendente-listar';</script>";
		}
        break;
}
