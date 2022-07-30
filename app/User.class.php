<?php

    class User {

        public static function validateCreateUser($mail) {

            $pdo = Database::getConnectMySQL();

            $sql = "SELECT email FROM tb_user WHERE email = :mail;";
            $sql = $pdo->prepare($sql);
            $sql->bindValue('mail', $mail);
            $sql->execute();

            if ($sql->rowCount() > 0) {

                return TRUE;

            } else {

                return FALSE;

            }

        }

        public static function createUser($code, $name, $mail, $pass) {

            $pdo = Database::getConnectMysql();

            $sql = "INSERT INTO tb_user (code_user, name, email, password, date_change) VALUES (:code, :name, :mail, MD5(:pass), NOW());";
            $sql = $pdo->prepare($sql);
            $sql->bindValue('code', $code);
            $sql->bindValue('name', $name);
            $sql->bindValue('mail', $mail);
            $sql->bindValue('pass', $pass);
            $sql->execute();

            if ($sql->rowCount() > 0) {

                return TRUE;

            } else {

                return FALSE;

            }

        }

        public static function validateLogin($mail, $pass) {

            $pdo = Database::getConnectMySQL();

            $sql = "SELECT * FROM tb_user WHERE email = :mail AND password = MD5(:pass);";
            $sql = $pdo->prepare($sql);
            $sql->bindValue('mail', $mail);
            $sql->bindValue('pass', $pass);
            $sql->execute();

            if ($sql->rowCount() > 0) {

                $dado = $sql->fetch();
                $_SESSION['idUserSession'] = $dado['id'];
                return TRUE;

            } else {

                return FALSE;

            }

        }

        public static function loggedUser($id) {

            $pdo = Database::getConnectMySQL();

            $array = array();

            $sql = "SELECT name FROM tb_user WHERE id = :id;";
            $sql = $pdo->prepare($sql);
            $sql->bindValue('id', $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {

                $array = $sql->fetch();

            }

            return $array;
            
        }

        public static function getLastCodeUser() {

            $pdo = Database::getConnectMySQL();

            $array = array();

            $sql = "SELECT sequence FROM tb_increment WHERE codefunction = 'US' AND id = 1";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0) {

                $array = $sql->fetch();

            }

            return $array['sequence'];
            
        }

    }

?>