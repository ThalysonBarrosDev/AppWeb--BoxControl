<?php

    require ('../Database/conexao.php');

    function periodoAtual() {
        echo "".date("01/m/Y")." à ".date("t/m/Y")."";
    }

    function valorTotalPagamentosMes() {

        global $pdo;
        $consulta = $pdo->query("SELECT SUM(valor_titulo) AS totalPago FROM tb_pagamento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalPago']}";
        }

    }

    function totalPagamentosMes() {

        global $pdo;
        $consulta = $pdo->query("SELECT COUNT(seq_titulo) AS totalTitulosMes FROM tb_pagamento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalTitulosMes']}<br/>";
        }

    }