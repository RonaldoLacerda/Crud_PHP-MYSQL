<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];

            $sql = "INSERT INTO tb_usuarios (nome, email, telefone) VALUES ('{$nome}', '{$email}', '{$telefone}')";

            $res = $conn->query($sql);


            if ($res==true) {
                print "<script>alert('Cadastro realizado com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Cadastro não efetuado! Tente novamente. ')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];

            $sql = "UPDATE tb_usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        telefone='{$telefone}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);


            if ($res==true) {
                print "<script>alert('Editado com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Não foi possível editar! Tente novamente. ')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
        break;
        case 'excluir':
            $sql = "DELETE FROM tb_usuarios WHERE id= ".$_REQUEST["id"];
            $res = $conn->query($sql);


            if ($res==true) {
                print "<script>alert('Excluido com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Não foi possível excluir! Tente novamente. ')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
        break;          
        
    }

?>
