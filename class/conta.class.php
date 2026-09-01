<?php
    class Contas{
        private $numero;
        private $titular;
        private $saldo;

        public function __construct
        ($numero, $titular, $saldo){
            $this->numero =$numero;
            $this->numero =$titular;
            $this->numero =$saldo;
        }

        public function getTitular(){
            return $this->numero;
        }

    }

    ?>