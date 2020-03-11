<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Calculadora de Combustível</title>
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções de uso:</h2>
            <div class="conteudo-painel">
                <p>
                    Esta aplicação serve para calcular o valor de combustível </br>que será gasto conforme o tipo de 
                    combustível.</br> Para isso basta preencher o fomulário com a distância e autonomia do veiculo. 
                </p>
                <p>
                    Os combustíveis calculados são:
                </p>
                <ul>
                    <li>Gasolina</li>
                    <li>Alcool</li>
                </ul>
            </div>
        </div>
        <div class="painel">
            <h2>Calculo do valor (R$) do combustível:</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="distancia">Distância em Km:</label>
                    <input type="number" name="distancia" class="campo-texto" required/>
                    </br>
                    <label for="autonomia">Autonomia(Km/lts):</label>
                    <input type="number" name="autonomia" class="campo-texto" required/>
                    </br>
                    <label for="precoGasolina">Preço da Gasolina:</label>
                    <input type="number" name="precoGasolina" class="campo-texto" required/>
                    </br>
                    <label for="precoAlcool">Preço do Alcool</label>
                    <input type="number"  name="precoAlcool" class="campo-texto" required/>
                    </br>
                    <button class="botao" type="submit">Calcular</button> 
                </form>
            </div>
        </div>
    </main>
</body>
</html>