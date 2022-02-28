<?php

    require ('../Database/conexao.php');

    function periodoAtual() {
        echo "".date("01/m/Y")." à ".date("t/m/Y")."";
    }

    function valorTotalRecebimentoMes() {
        
        global $pdo;
        $consulta = $pdo->query("SELECT SUM(valor_titulo) AS totalRecebido FROM tb_recebimento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalRecebido']}";
        }

    }
    
    function totalRecebimentosMes() {

        global $pdo;
        $consulta = $pdo->query("SELECT COUNT(seq_titulo) AS totalTitulosMes FROM tb_recebimento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalTitulosMes']}<br/>";
        }

    }