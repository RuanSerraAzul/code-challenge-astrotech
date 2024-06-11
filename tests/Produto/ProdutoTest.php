<?php

use PHPUnit\Framework\TestCase;
use Projeto\Produto\Produto;
use Projeto\Categoria\Categoria;

/**
 * Classe de teste para a classe Produto.
 * 
 * Esta classe testa os métodos da classe Produto.
 */
class ProdutoTest extends TestCase {

     /**
     * Testa o método getNome().
     * 
     * Este teste verifica se o método getNome() da classe Produto retorna
     * o nome correto do produto.
     * 
     * @return void
     */
    public function testGetNome(): void {
        $categoria = new Categoria("Notebooks", 6);
        $produto = new Produto("Notebook Dell", 3000, $categoria);
        $this->assertEquals("Notebook Dell", $produto->getNome());
    }

    /**
     * Testa o método getPreco().
     * 
     * Este teste verifica se o método getPreco() da classe Produto retorna
     * o preço correto do produto.
     * 
     * @return void
     */
    public function testGetPreco(): void {
        $categoria = new Categoria("Notebooks", 6);
        $produto = new Produto("Notebook Dell", 3000, $categoria);
        $this->assertEquals(3000, $produto->getPreco());
    }

    /**
     * Testa o método getCategoria().
     * 
     * Este teste verifica se o método getCategoria() da classe Produto retorna
     * a categoria correta do produto.
     * 
     * @return void
     */
    public function testGetCategoria(): void {
        $categoria = new Categoria("Notebooks", 6);
        $produto = new Produto("Notebook Dell", 3000, $categoria);
        $this->assertEquals($categoria, $produto->getCategoria());
    }
}
