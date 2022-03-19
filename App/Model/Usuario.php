<?php

class Usuario {

    public function validaLogin($email, $senha) {

        global $pdo;

        $sql = "SELECT * FROM tb_usuario WHERE email_usuario = :email_usuario AND pass_usuario = MD5(:pass_usuario);";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('email_usuario', $email);
        $sql->bindValue('pass_usuario', $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $dado = $sql->fetch();
            $_SESSION['idUserSession'] = $dado['id_usuario'];
            return TRUE;

        } else {

            return FALSE;

        }

    }

    public function usuarioLogado($id) {

        global $pdo;

        $array = array();

        $sql = "SELECT nome_usuario FROM tb_usuario WHERE id_usuario = :id_usuario;";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('id_usuario', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $array = $sql->fetch();

        } 

        return $array;

    }

}