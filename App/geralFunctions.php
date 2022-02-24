<?php

    function periodoAtual() {
        echo "".date("01/m/Y")." à ".date("t/m/Y")."";
    }

    function valorTotalRecebimentoMes() {
        
        require 'Database/conexao.php';
        $consulta = $pdo->query("SELECT SUM(valor_titulo) AS totalRecebido FROM tb_recebimento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalRecebido']}";
        }

    }

    function totalRecebimentosMes() {

        require 'Database/conexao.php';
        $consulta = $pdo->query("SELECT COUNT(seq_titulo) AS totalTitulosMes FROM tb_recebimento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalTitulosMes']}<br/>";
        }

    }

    function valorTotalPagamentosMes() {

        require 'Database/conexao.php';
        $consulta = $pdo->query("SELECT SUM(valor_titulo) AS totalPago FROM tb_pagamento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalPago']}";
        }

    }
    
    function totalPagamentosMes() {

        require 'Database/conexao.php';
        $consulta = $pdo->query("SELECT COUNT(seq_titulo) AS totalTitulosMes FROM tb_pagamento WHERE data_titulo >= ".date("01/m/Y")."");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            return "{$linha['totalTitulosMes']}<br/>";
        }

    }

    function valorTotalMes() {

        $total_recebido = valorTotalRecebimentoMes();
        $total_pago = valorTotalPagamentosMes();
        $total_geral = $total_recebido - $total_pago;

        return $total_geral;
    }

    function totalTransacoesMes() {

        $totalTitulos_recebido = totalRecebimentosMes();
        $totalTitulos_pagos = totalPagamentosMes();
        $totalTitulosGeral = (int) $totalTitulos_recebido + (int) $totalTitulos_pagos;

        return $totalTitulosGeral;

    }