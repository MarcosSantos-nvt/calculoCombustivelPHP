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

                $mensagemResultado.= "<div class='sucesso'>";
                $mensagemResultado.= "O resultado dos calculos são:";
                $mensagemResultado.= "<ul>";
                $mensagemResultado.= "<li><b>Consumo Gasolina: </b>".$calculoGasolina."</li>";
                $mensagemResultado.= "<li><b>Consumo Alcool: </b>" .$calculoAcool."</li>";
                $mensagemResultado.= "</ul>";
                $mensagemResultado.= "</div>";
                echo "</br>";
                
        } else{
            $mensagemResultado.= "<div class = 'erro'>";
            $mensagemResultado.= "<b>Os valores setados devem ser maior do que zero!</b>";
            $mensagemResultado.= "</div>";
        }

    } else{
        $mensagemResultado.= "<div class = 'erro'>";
            $mensagemResultado.= "<b>Os valores setados incorretos para calculo!</b>";
            $mensagemResultado.= "</div>";
    }

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de Combustível</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <main>
            <div class="painel">
                <h2>Resultado dos calculos:</h2>
            
                <div class="conteudo-painel">
                    <?php
                        echo $mensagemResultado;
                    ?>
                    <a class="botao" href="index.php">Voltar</a>
                </div>
            </div>
        </main>
        
    </body>
    </html>