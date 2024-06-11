<?php

namespace Projeto\Imposto;

use Projeto\Produto\Produto;

/**
 * Classe CalculadoraDeImposto.
 * 
 * Responsável por calcular o imposto de um produto com base em sua categoria.
 */
class CalculadoraDeImposto
{

    /**
     * Calcula o imposto para um produto.
     * 
     * @param Produto $produto O produto para o qual o imposto será calculado.
     * @return float O valor do imposto calculado.
     */
    public function calcular(Produto $produto): float
    {
        return $produto->getPreco() * ($produto->getCategoria()->getImposto() / 100);
    }
}
