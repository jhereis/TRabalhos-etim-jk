<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Informações do Produto</h1>
        <form action="controle_prod.php" method="GET">
            <br><label for="cod_p">Cód. Produto: </label>
            <input id="cod_p" type="number" name="cod_p" placeholder="Código do produto"></br>

            <br><label for="desc_p">Descrição do Produto: </label>
            <input id="desc_p" type="text" name="desc_p" placeholder="Descrição do produto"></br>

            <br><label for="valor_p">Valor R$: </label>
            <input id="valor_p" type="number" name="valor_p" placeholder="Valor do produto"></br>

            <br><label for="quant_p">Quantidade: </label>
            <input id="quant_p" type="number" name="quant_p" placeholder="Quantidade"></br>

            <br><label>Tipo de Pagamento: </label></br>
            <br><label for="vis">Pagamento à vista</label>
            <input id="vis" type="radio" name="pgt" value="vis"></br>
            <br><label for="praz">Pagamento à prazo</label>
            <input id="praz" type="radio" name="pgt" value="praz"></br>
            
            <tr class='botoes'>
                    <td><input type='submit' name= 'botao_produto'value='cadastrar produto'></td>
                    <td><input type='submit' name= 'botao_produto'value='atualizar produto'></td>
                    <td><input type='submit' name= 'botao_produto'value='deletar produto'></td>
                    <td><input type='submit' name= 'botao_produto' value='consultar produto'></td>
            </tr>   

        </form>
    </div>
</body>
</html>
