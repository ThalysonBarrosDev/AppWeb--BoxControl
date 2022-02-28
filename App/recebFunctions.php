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

    function numeroTitulo() {
        
        global $pdo;
        $consultaOne = $pdo->query("SELECT MAX(num_titulo) AS ultNumTituloRe FROM tb_recebimento");
        $consultaTwo = $pdo->query("SELECT MAX(num_titulo) AS ultNumTituloPg FROM tb_pagamento");

        while ($linhaOne = $consultaOne->fetch(PDO::FETCH_ASSOC)) {
            $ultimo_titulo_rece = $linhaOne['ultNumTituloRe'];
        }

        while ($linhaTwo = $consultaTwo->fetch(PDO::FETCH_ASSOC)) {
            $ultimo_titulo_paga = $linhaTwo['ultNumTituloPg'];
        }

        if ($ultimo_titulo_rece > $ultimo_titulo_paga) { return $ultimo_titulo_rece + 1; } else { return $ultimo_titulo_paga + 1; }

    }