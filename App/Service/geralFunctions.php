<?php

    include ('../Database/conexao.php');

    function periodoAtual() {

        echo "".date("01/m/Y")." à ".date("t/m/Y")."";

    }

    function valorTotalRecebimentoMes() {

        global $pdo;
        $consulta = $pdo->query("SELECT SUM(valor_titulo) AS totalRecebido FROM tb_recebimento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

            if ($linha['totalRecebido'] === NULL) { return 0; } else { return "{$linha['totalRecebido']}"; }

        }

    }

    function totalRecebimentosMes() {

        global $pdo;
        $consulta = $pdo->query("SELECT COUNT(seq_titulo) AS totalTitulosMes FROM tb_recebimento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

            if ($linha['totalTitulosMes'] === NULL) { return 0; } else { return "{$linha['totalTitulosMes']}<br/>"; }

        }

    }

    function valorTotalPagamentosMes() {

        global $pdo;
        $consulta = $pdo->query("SELECT SUM(valor_titulo) AS totalPago FROM tb_pagamento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

            if ($linha['totalPago'] === NULL) { return 0; } else { return "{$linha['totalPago']}"; }

        }

    }
    
    function totalPagamentosMes() {

        global $pdo;
        $consulta = $pdo->query("SELECT COUNT(seq_titulo) AS totalTitulosMes FROM tb_pagamento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

            if ($linha['totalTitulosMes'] === NULL) { return 0; } else { return "{$linha['totalTitulosMes']}<br/>"; }

        }

    }

    function valorTotalMes() {

        return valorTotalRecebimentoMes() - valorTotalPagamentosMes();
        
    }

    function totalTransacoesMes() {

        return (int) totalRecebimentosMes() + (int) totalPagamentosMes();

    }

    function maiorTitulo() {

        global $pdo;
        $consultaOne = $pdo->query("SELECT MAX(valor_titulo) AS maiorValorMesPg FROM tb_pagamento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");
        $consultaTwo = $pdo->query("SELECT MAX(valor_titulo) AS maiorValorMesRe FROM tb_recebimento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");

        while ($linhaOne = $consultaOne->fetch(PDO::FETCH_ASSOC)) {
            $maiorValorMesPg = $linhaOne['maiorValorMesPg'];
        }

        while ($linhaTwo = $consultaTwo->fetch(PDO::FETCH_ASSOC)) {
            $maiorValorMesRe = $linhaTwo['maiorValorMesRe'];
        }

        if ($maiorValorMesRe && $maiorValorMesPg !== NULL) {

            if ($maiorValorMesRe > $maiorValorMesPg) { 

                return $maiorValorMesRe; 

            } else { 

                return $maiorValorMesPg; 

            }

        } else {

            return 0;

        }

    }
    
    function menorTitulo() {

        global $pdo;
        $consultaOne = $pdo->query("SELECT MIN(valor_titulo) AS menorValorMesPg FROM tb_pagamento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");
        $consultaTwo = $pdo->query("SELECT MIN(valor_titulo) AS menorValorMesRe FROM tb_recebimento WHERE data_titulo >= '".date('Y-m-01')."' AND data_titulo <= '".date('Y-m-t')."'");

        while ($linhaOne = $consultaOne->fetch(PDO::FETCH_ASSOC)) {
            $menorValorMesPg = $linhaOne['menorValorMesPg'];
        }

        while ($linhaTwo = $consultaTwo->fetch(PDO::FETCH_ASSOC)) {
            $menorValorMesRe = $linhaTwo['menorValorMesRe'];
        }

        if ($menorValorMesPg && $menorValorMesRe !== NULL) {

            if ($menorValorMesRe < $menorValorMesPg) { 
                
                return $menorValorMesRe; 
            
            } else { 
                
                return $menorValorMesPg; 
            
            }

        } else {

            return 0;

        }

    }