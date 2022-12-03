<?php
     class Compra{
        private $valor, $total;
       
        public function valor_total($quant_p,$valor_p,$pgt){
       
         $valor= $valor_p*$quant_p ;
       
         if($pgt=='vis'){
            $total=$valor-($valor*0.05);
            return $total;
         }else{
            $total=$valor+($valor*0.075);
            return $total;
         }
       
      }
     }
?>