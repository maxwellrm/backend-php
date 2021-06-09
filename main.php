<?php

require_once __DIR__ . '/vendor/autoload.php';

use Moovin\Job\Backend;


$caixaEletronico = new Backend\CaixaEletronico('1111', 'cc');

$caixaEletronico->depositar('600');
$caixaEletronico->depositar('600');
$caixaEletronico->saque('600');
$caixaEletronico->transferir('222','200');
$caixaEletronico->saldo();

/*
print '----------------------' . PHP_EOL;

$caixaEletronico = new Backend\CaixaEletronico('2222', 'po');
$caixaEletronico->depositar('2600');
$caixaEletronico->saque('12');
$caixaEletronico->saldo();
*/