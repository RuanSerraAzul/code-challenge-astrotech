<?php

namespace Projeto\Produto;

use Projeto\Categoria\Categoria;

/**
 * Classe Produto.
 * 
 * Representa um produto com nome, preço e categoria.
 */
class Produto
{

    /**
     * Construtor da classe Produto.
     * 
     * @param string $nome O nome do produto.
     * @param float $preco O preço do produto.
     * @param Categoria $categoria A categoria do produto.
     */
    public function __construct(
        private string $nome,
        private float $preco,
        private Categoria $categoria
    ) {
    }

    /**
     * Obtém o nome do produto.
     * 
     * @return string O nome do produto.
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Obtém o preço do produto.
     * 
     * @return float O preço do produto.
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * Obtém a categoria do produto.
     * 
     * @return Categoria A categoria do produto.
     */
    public function getCategoria(): Categoria
    {
        return $this->categoria;
    }
}
