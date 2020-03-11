<?php

    if(isset($_POST['distancia']) && isset($_POST['autonomia'])) {
        if ($_POST['distancia'] > 0 && $_POST['autonomia'] > 0){            
                $distancia = $_POST['distancia'];
                $autonomia = $_POST['autonomia'];
                $precoGasolina = $_POST['precoGasolina'];
                $precoAlcool = $_POST['precoAlcool'];
                
        
                $calculoGasolina = ($distancia / $autonomia)*$precoGasolina;
                $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');
                $calculoAcool = ($distancia / $autonomia) * $precoAlcool;
                $calculoAcool= number_format($calculoAcool, 2, ',', '.');

                echo "OS GASTOS COM GASOLINA SERÃO: R$" .$calculoGasolina;
                echo "</br>";
                echo "OS GASTOS COM ALCOOL SERÃO: R$" .$calculoAcool;
        } else{
            echo "OS FORMULARIOS ANTERIORES POSSUEM VALORES ZERADOS OU NEGATIVOS O QUE IMPEDE O CALCULO!";
        }

    } else{
        echo "OS FORMULARIOS ANTERIORES DEVEM SER PREENCHIDOS COM VALORES VALIDOS PARA O CALCULO!";
    }