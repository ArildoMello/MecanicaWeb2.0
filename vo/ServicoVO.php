<?php
require_once 'SistemaVO.php';
    class ServicoVO extends SistemaVO{

        private $idUsuario;
        private $nomeServico;
               
        public function setidUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function getidUsuario(){
            return $this->idUsuario;
        }

        public function setnomeServico($nomeServico){
            $this->nomeServico = ltrim(trim($nomeServico));
        }

        public function getnomeServico(){
            return $this->nomeServico;
        }
           
    }
?>