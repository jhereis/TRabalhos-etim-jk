<?php
    $cod_p= filter_input(INPUT_GET,'cod_p');
    $desc_p= filter_input(INPUT_GET,'desc_p');
    $valor_p= filter_input(INPUT_GET,'valor_p');
    $quant_p= filter_input(INPUT_GET, 'quant_p');
    $pgt= filter_input(INPUT_GET,'pgt');

    $botao_produto= filter_input(INPUT_GET, '$botao_produto');

    include_once 'compra.php';
    $compra= new compra();

    include_once 'produto.php';
    $prod = new produto();

    $prod->setCod_p($cod_p);
    $prod->setDesc_p($desc_p);
    $prod->setValor_p($valor_p);
    $prod->setQuant_p($quant_p);
    $prod->setPgt($pgt);

    include 'produtoDAO.php';
    $prodDAO = new produtoDAO();

    if($botao_produto=='cadastrar produto'){
    $prodDAO->cadastrarProduto($prod);
    }else if ($botao_produto=='consultar produto'){
        $prodDAO->consultarProduto();
        foreach($prodDAO->consultarProduto() as $res){
            echo $res ['cod_p']."<br>";
            echo $res ['desc_p']."<br>";
            echo $res ['valor_p']."<br>";
            echo $res ['quant_p']."<br>";
            echo $res ['pgt']."<br><br>";
        }
    }else if ($botao_produto=='atualizar produto'){
            $prodDAO->atualizarProduto($prod);
        }else if ($botao_produto=='deletar produto'){
            $prodDAO->deletarProduto($cod_p);
        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></p>
    <p>Código do produto <?php echo $cod_p;?></p>
    
    <p>Valor total: <?php echo $compra-> valor_total($quant_p, $valor_p,$pgt);?></p>
</body>
</html>