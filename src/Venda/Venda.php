<?php

namespace Projeto\Venda;

use Projeto\Produto\Produto;
use Projeto\Imposto\CalculadoraDeImposto;

/**
 * Classe Venda.
 * 
 * Representa uma venda contendo uma lista de produtos e uma calculadora de imposto.
 */
class Venda
{

    /**
     * Construtor da classe Venda.
     * 
     * @param Produto[] $produtos A lista de produtos na venda.
     * @param CalculadoraDeImposto $calculadoraDeImposto A calculadora de imposto.
     */
    public function __construct(
        private array $produtos = [],
        private CalculadoraDeImposto $calculadoraDeImposto
    ) {
    }

    /**
     * Adiciona um produto à lista de produtos na venda.
     * 
     * @param Produto $produto O produto a ser adicionado.
     * @return void
     */
    public function adicionarProduto(Produto $produto): void
    {
        $this->produtos[] = $produto;
    }

    /**
     * Gera o resumo da venda.
     * 
     * Calcula o total bruto, impostos e total líquido e exibe o resumo da venda.
     * 
     * @return void
     */
    public function resumoVenda(): void
    {
        $numeroPedidos = count($this->produtos);
        $totalBruto = 0.0;
        $totalImpostos = 0.0;

        foreach ($this->produtos as $produto) {
            $totalBruto += $produto->getPreco();
            $totalImpostos += $this->calculadoraDeImposto->calcular($produto); // Usando CalculadoraDeImposto
        }

        $totalLiquido = $totalBruto + $totalImpostos;

        echo "Número de Pedidos: " . $numeroPedidos . PHP_EOL;
        echo "Total Bruto: R$ " . number_format($totalBruto, 2, ',', '.') . PHP_EOL;
        echo "Impostos: R$ " . number_format($totalImpostos, 2, ',', '.') . PHP_EOL;
        echo "Total Líquido: R$ " . number_format($totalLiquido, 2, ',', '.') . PHP_EOL;
    }
}
