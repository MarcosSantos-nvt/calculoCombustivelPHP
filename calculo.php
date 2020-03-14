<?php

    $mensagemResultado = "";

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

                $mensagemResultado.= "<p>OS GASTOS COM GASOLINA SERÃO: R$" .$calculoGasolina."</p>";
                echo "</br>";
                $mensagemResultado.= "<p>OS GASTOS COM ALCOOL SERÃO: R$" .$calculoAcool."</p>";
        } else{
            echo "OS FORMULARIOS ANTERIORES POSSUEM VALORES ZERADOS OU NEGATIVOS O QUE IMPEDE O CALCULO!";
        }

    } else{
        echo "OS FORMULARIOS ANTERIORES DEVEM SER PREENCHIDOS COM VALORES VALIDOS PARA O CALCULO!";
    }

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de Combustível</title>
    </head>
    <body>
        <main>
            <div class="painel">
                <h1>Resultado dos calculos:</h1>
            </div>
            <div class="conteudo-painel">
                <?php
                    echo $mensagemResultado;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </main>
        
    </body>
    </html>