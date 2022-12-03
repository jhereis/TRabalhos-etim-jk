<?php
    class Produto{
        private $cod_p, $desc_p, $valor_p, $quant_p, $pgt;

        public function getCod_p(){
            return $this->cod_p;
        }
        public function setCod_p($cod_p){
            $this->cod_p= $cod_p;
        }

        public function getDesc_p(){
            return $this->desc_p;
        }
        public function setDesc_p($desc_p){
            $this->desc_p= $desc_p;
        }

        public function getValor_p(){
            return $this->valor_p;
        }
        public function setValor_p($valor_p){
            $this->valor_p= $valor_p;
        }

        public function getQuant_p(){
            return $this->quant_p;
        }
        public function setQuant_p($quant_p){
            $this->quant_p= $quant_p;
        }

        public function getPgt(){
            return $this->pgt;
        }
        public function setPgt($pgt){
            $this->pgt= $pgt;
        }
    }
?>