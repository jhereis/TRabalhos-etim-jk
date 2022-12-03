<?php
    include 'conexao.php';
    class produtoDAO{
        public function cadastrarProduto(produto $p){
            $sql='insert into produto (cod_prod, descricao, valor, quantidade, pag) values(?,?,?,?,?)';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1,$p->getCod_p());
            $resultado-> bindValue(2,$p->getDesc_p());
            $resultado-> bindValue(3,$p->getValor_p());
            $resultado-> bindValue(4,$p->getQuant_p());
            $resultado-> bindValue(5,$p->getPgt());

            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Produto cadastrado com sucesso');
            window.location.href='index.php';</script>");
            }
        }

        public function consultarProduto(){
            $sql = 'select * from produto';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado->execute();
            if($resultado->rowCount()>0){
                $valor=$resultado->fetchAll(\PDO::FETCH_ASSOC);
                return $valor;
            }
        }

        public function atualizarProduto(produto $p){
            $sql='update produto set descricao=?, valor=?, quantidade=?, pag=?  where cod_prod=?';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1,$p->getDesc_p());
            $resultado-> bindValue(2,$p->getValor_p());
            $resultado-> bindValue(3,$p->getQuant_p());
            $resultado-> bindValue(4,$p->getPgt());
            $resultado-> bindValue(5,$p->getCod_p());

            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Produto atualizado com sucesso');
            window.location.href='index.php';</script>");
            }
        }

        public function deletarProduto($cod_p){
            $sql='delete from produto where codigo_prod=?';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1, $cod_p); 
            
            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Produto deletado com sucesso');
            window.location.href='index.php';</script>");
            }
        }
    }
?>