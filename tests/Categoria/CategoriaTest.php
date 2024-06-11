<?php

use PHPUnit\Framework\TestCase;
use Projeto\Categoria\Categoria;


/**
 * Classe de teste para a classe Categoria.
 * 
 * Esta classe testa os métodos da classe Categoria.
 */
class CategoriaTest extends TestCase {

    /**
     * Testa o método getNome().
     * 
     * Este teste verifica se o método getNome().
     * 
     * @return void
     */
    public function testGetNome() {
        $categoria = new Categoria("Notebooks", 6);
        $this->assertEquals("Notebooks", $categoria->getNome());
    }


    
    /**
     * Testa o método getImposto().
     * 
     * Este teste verifica se o método getImposto().
     * 
     * @return void
     */
    public function testGetImposto() {
        $categoria = new Categoria("Notebooks", 6);
        $this->assertEquals(6, $categoria->getImposto());
    }
}
