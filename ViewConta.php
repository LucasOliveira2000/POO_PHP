<?php

require_once 'ViewConta.php';
require_once 'Conta.php';

class ViewConta
{
    public function exibirConta(Conta $conta)
    {
        echo "CPF Titular: " . $conta->cpfTitular . PHP_EOL;
        echo "Nome Titular: " . $conta->nomeTitular . PHP_EOL;
        echo "Saldo: " . $conta->saldo . PHP_EOL;
    }
}



