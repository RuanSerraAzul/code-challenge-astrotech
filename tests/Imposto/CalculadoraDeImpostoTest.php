<?php

use PHPUnit\Framework\TestCase;
use Projeto\Imposto\CalculadoraDeImposto;
use Projeto\Produto\Produto;
use Projeto\Categoria\Categoria;

class CalculadoraDeImpostoTest extends TestCase {
    
    
    /**
     * Testa o método calcular().
     * 
     * Este teste verifica se o método calcular() da classe CalculadoraDeImposto retorna
     * o valor correto do imposto para um determinado produto.
     * 
     * @return void
     */
    public function testCalcularImposto(): void {
        $categoria = new Categoria("Notebooks", 6);
        $produto = new Produto("Notebook Dell", 3000, $categoria);
        $calculadora = new CalculadoraDeImposto();
        $this->assertEquals(180.0, $calculadora->calcular($produto));
    }
}
