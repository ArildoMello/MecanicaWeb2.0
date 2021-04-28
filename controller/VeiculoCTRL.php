<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/MecanicaWeb2.0/dao/VeiculoDAO.php';
require_once 'UtilCTRL.php';

define('CadastrarVeiculo', 'CadastrarVeiculo');

class VeiculoCTRL{

    public function CadastrarVeiculo(VeiculoVO $vo)
    {

        if (
            $vo->getIdCliente() == '' ||
            $vo->getidModelo() == '' ||
            $vo->getPlaca() == '' ||
            $vo->getCor() == ''
        ) {
            return 0;
        }
        $dao = new veiculoDAO();

        $vo->setData(UtilCTRL::DataAtual());
        $vo->setHora(UtilCTRL::HoraAtual());
        $vo->setFuncao(CadastrarVeiculo);
        $vo->setidLogado(UtilCTRL::CodigoUserLogado());

        return $dao->CadastrarVeiculo($vo);
    }
}
