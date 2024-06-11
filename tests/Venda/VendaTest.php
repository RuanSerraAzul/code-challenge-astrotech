<?php

use PHPUnit\Framework\TestCase;
use Projeto\Venda\Venda;
use Projeto\Produto\Produto;
use Projeto\Categoria\Categoria;
use Projeto\Imposto\CalculadoraDeImposto;


/**
 * Classe de teste para a classe Venda.
 * 
 * Esta classe testa os métodos da classe Venda.
 */
class VendaTest extends TestCase {

    /**
     * Testa o método adicionarProduto().
     * 
     * Este teste verifica se o método adicionarProduto() adiciona corretamente um produto
     * à lista de produtos da venda.
     * 
     * @return void
     */
    public function testAdicionarProduto() {
        $categoria = new Categoria("Notebooks", 6);
        $produto = new Produto("Notebook Dell", 3000, $categoria);
        $calculadoraDeImposto = new CalculadoraDeImposto();
        $venda = new Venda([], $calculadoraDeImposto);
        $venda->adicionarProduto($produto);
        
        $this->assertCount(1, $this->getVendaProdutos($venda));
    }

    /**
     * Testa o método resumoVenda().
     * 
     * Este teste verifica se o método resumoVenda() gera corretamente o resumo do pedido,
     * incluindo o número de pedidos, total bruto, impostos e total líquido.
     * 
     * @return void
     */
    public function testResumoVenda() {
        $categoriaNotebooks = new Categoria("Notebooks", 6);
        $categoriaSmartPhones = new Categoria("Smart Phones", 8);
        $categoriaEletrodomesticos = new Categoria("Eletrodomésticos", 10);
        
        $produto1 = new Produto("Notebook Dell", 3000, $categoriaNotebooks);
        $produto2 = new Produto("iPhone", 4000, $categoriaSmartPhones);
        $produto3 = new Produto("Geladeira", 2000, $categoriaEletrodomesticos);
        
        $calculadoraDeImposto = new CalculadoraDeImposto();
        $venda = new Venda([], $calculadoraDeImposto);
        $venda->adicionarProduto($produto1);
        $venda->adicionarProduto($produto2);
        $venda->adicionarProduto($produto3);
        
        
        ob_start(); // Captura a saída
        $venda->resumoVenda();
        $output = ob_get_clean(); //limpa a saída
        
        $this->assertStringContainsString("Número de Pedidos: 3", $output);
        $this->assertStringContainsString("Total Bruto: R$ 9.000,00", $output);
        $this->assertStringContainsString("Impostos: R$ 700,00", $output); 
        $this->assertStringContainsString("Total Líquido: R$ 9.700,00", $output);
    }


    /**
     * Método auxiliar para obter a lista de produtos da venda.
     * 
     * Este método utiliza reflexão para acessar a propriedade privada 'produtos'
     * da classe Venda.
     * 
     * @param Venda $venda A instância da classe Venda.
     * @return array A lista de produtos na venda.
     */
    private function getVendaProdutos(Venda $venda) {
        $reflection = new ReflectionClass($venda);
        $property = $reflection->getProperty('produtos');
        $property->setAccessible(true);
        return $property->getValue($venda);
    }
}
