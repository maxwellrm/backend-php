<?php

namespace Moovin\Job\Backend;

class Conta{
    protected function tipoConta($tipo){
        if($tipo == 'cc'){
            return $this->corrente();
        }else {
            return $this->poupanca();
        }
    }
    protected function corrente(){
        return (object)array('limite'=>600,'taxa'=>2.5);
    }
    protected function poupanca(){
        return (object)array('limite'=>1000,'taxa'=>0.8);
    }
}