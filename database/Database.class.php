<?php

    class Database {

        public static function getConnectMySQL() {

            $env_file = realpath(dirname(__FILE__) . '/../.env');
            $env = parse_ini_file($env_file);

            try {

                $pdo = new PDO('mysql:host='.$env['host'].';dbname='.$env['database'].'', ''.$env['username'].'', ''.$env['password'].'');

                return $pdo;

            } catch (PDOException $e) {

                echo $e->getMessage();
                
            }

        }

    }