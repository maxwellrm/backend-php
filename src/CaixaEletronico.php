<?php

namespace Moovin\Job\Backend;

class CaixaEletronico extends Conta{
    public $sigla = 'B$ ';
    public $saldo;
    private $valorSacado = 0;
    private $conta;
    private $tipo;

    function __construct($conta,$tipo){
        $this->conta = $conta;
        $this->tipo = $tipo;
    }
    public function depositar($valor){
        print 'Depositado ' . $this->sigla . $valor . PHP_EOL;
        $this->saldo += $valor;
    }
    public function saque($valor){
        $this->valorSacado += $valor;
        $conta = $this->tipoConta($this->tipo);
        if($this->valorSacado > $conta->limite){
            print 'Valor de saque acima do limite disponivel..' . PHP_EOL;
        }
        else if($valor > $conta->limite){
            print 'Acima do limite de saque.' . PHP_EOL;
        }
        else if($valor > $this->saldo){
            print 'Saldo Insuficiente.' . PHP_EOL;
        }
        else{
            $this->valorSacado += $valor; 
            $this->saldo -= $conta->taxa;
            $this->saldo -= $valor;
        }
    }
    public function transferir($contadestino, $valor){
        if($valor > $this->saldo){
            print 'Saldo Insuficiente.' . PHP_EOL;
        }
        else{
            $this->saldo -= $valor;
            print 'Transferido para conta ' . $contadestino . ' o valor de ' . $this->sigla . $valor . PHP_EOL;
        }
    }
    public function saldo(){
        print 'Seu saldo é ' . $this->sigla . $this->saldo . PHP_EOL;
    }

}