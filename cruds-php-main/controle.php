<?php
    $codigo = filter_input(INPUT_GET,'codigo');
    $nome = filter_input(INPUT_GET,'nome');
    $cargo = filter_input(INPUT_GET,'cargo');
    $button = filter_input(INPUT_GET,'botao');


    include 'funcionario.php';
    $func = new funcionario();

    $func->setCodigo($codigo);
    $func->setNome($nome);
    $func->setCargo($cargo);

    include 'funcionarioDAO.php';
    $funcDao = new funcionarioDao();

    if($button=='cadastrar'){
        $funcDao->cadastrarFuncionario($func);
    }else if($button=='consultar'){
        $funcDao->consultarFuncionario();
        foreach($funcDao->consultarFuncionario() as $res){
            echo $res['codigo_funcionario']."<br>";
            echo $res['nome']."<br>";
            echo $res['cargo']."<br><br>";
        }
    }else if($button=='atualizar'){
        $funcDao->atualizarFuncionario($func);
    }else if($button=='deletar'){
        $funcDao->deletarFuncionario($codigo);
    }
?>