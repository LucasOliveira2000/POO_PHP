<?php

require_once 'ViewConta.php';
require_once 'Conta.php';

class CriarConta
{
    public function criarConta()
    {
        $cpf = readline("Digite o CPF do titular: ");
        $nome = readline("Digite o nome do titular: ");
        $saldoInput = readline("Digite o saldo inicial (pressione Enter para usar o saldo padrão de 100): ");
        $saldo = !empty($saldoInput) ? (float)$saldoInput : 100.0;

        // Criar uma instância de Conta
        $conta = new Conta($cpf, $nome, $saldo);

        // Criar uma instância de ViewConta
        $viewConta = new ViewConta();

        // Exibir as informações da conta usando ViewConta
        $viewConta->exibirConta($conta);
    }
}

