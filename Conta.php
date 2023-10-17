<?php

require_once 'ViewConta.php';
require_once 'Conta.php';

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 100;

    public function __construct(string $cpfTitular, string $nomeTitular, float $saldo)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
    }

    public function getCpf (){
		return $this->cpfTitular;
	}
	
	public function getNome(){
		return $this->nomeTitular;
	}
	
	function getSaldo(){
		return $this->saldo;
    }

    
}


