<?php

require_once 'Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/MecanicaWeb2.0/controller/UtilCTRL.php';

class VeiculoDAO extends Conexao{

    /** @var PDO */
    private $conexao;
    /** @var PDOStatement */
    private $sql;

    public function __construct()
    {
        $this->conexao = parent::retornaConexao();
        $this->sql = new PDOException();
    }
    private function ColetarErro(SistemaVO $vo, $ex)
    {
        parent::GravarErro(
            $ex->getMessage(), //getmessage é o erro apresentado
            $vo->getidLogado(),
            $vo->getFuncao(),
            $vo->getHora(),
            $vo->getData(),
            $vo->getiP()
        );
    }
    public function CadastrarVeiculo(VeiculoVO $vo)
    {

        $comando = 'insert into 
                             tb_veiculo 
                             (placa_veiculo,
                             cor_veiculo,
                             id_cliente, 
                             id_modelo, 
                             id_usuario) 
                      values (?,?,?,?,?)';
        $this->sql = new PDOStatement();
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getPlaca());
        $this->sql->bindValue(2, $vo->getCor());
        $this->sql->bindValue(3, $vo->getIdCliente());
        $this->sql->bindValue(4, $vo->getidModelo());
        $this->sql->bindValue(5, $vo->getidLogado());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $ex) {
            //chamando pelo parent a função gravar erro da VO
            parent::GravarErro(
                $ex->getMessage(), //getmessage é o erro apresentado
                $vo->getidLogado(),
                $vo->getFuncao(),
                $vo->getHora(),
                $vo->getData(),
                $vo->getiP()
            );
            return -1;
        }
    }

}