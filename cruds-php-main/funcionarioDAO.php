<?php
include 'conexao.php';

class funcionarioDao{
    public function cadastrarFuncionario(Funcionario $f){
        $sql = 'insert into funcionario (codigo_funcionario, nome, cargo) values(?,?,?)';

        $bank = new conexao();
        $con = $bank->getConexao();
        $result = $con->prepare($sql);
        $result->bindValue(1, $f->getCodigo());
        $result->bindValue(2, $f->getNome());
        $result->bindValue(3, $f->getCargo());
        $final = $result->execute();

        if($final){
             echo ("<script LANGUAGE='JavaScript'>
             window.alert('cadastrado com sucesso');
             window.location.href ='index.php';
             </script>"); 
        }

    }

    
    public function atualizarFuncionario(Funcionario $f){
        $sql = 'update funcionario set nome=?, cargo=? where codigo_funcionario=?';

        $bank = new conexao();
        $con = $bank->getConexao();
        $result = $con->prepare($sql);
        $result->bindValue(3, $f->getCodigo());
        $result->bindValue(1, $f->getNome());
        $result->bindValue(2, $f->getCargo());

        $final = $result->execute();

        if($final){
             echo ("<script LANGUAGE='JavaScript'>
             window.alert('Atualizado com sucesso');
             window.location.href ='index.php';
             </script>"); 
        }
    }


    public function deletarFuncionario($codigo){
        $sql = 'delete from funcionario where codigo_funcionario=?';

        $bank = new conexao();
        $con = $bank->getConexao();
        $result = $con->prepare($sql);
        $result->bindValue(1, $codigo);

        $final = $result->execute();

        if($final){
             echo ("<script LANGUAGE='JavaScript'>
             window.alert('Deletado com sucesso');
             window.location.href ='index.php';
             </script>"); 
        }
    }

    public function consultarFuncionario(){
        $sql = 'select * from funcionario';

        $bank = new conexao();
        $con = $bank->getConexao();
        $result = $con->prepare($sql);
        $result->execute();

        if($result->rowCount()>0){
            $valor = $result->fetchAll(\PDO::FETCH_ASSOC);
            return $valor;
        }
    }
}
?>