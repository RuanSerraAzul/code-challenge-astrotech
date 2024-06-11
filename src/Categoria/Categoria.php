<?php

namespace Projeto\Categoria;

/**
 * Classe Categoria.
 * 
 * Representa uma categoria de produtos, contendo nome e taxa de imposto.
 */
class Categoria
{

    /**
     * Construtor da classe Categoria.
     * 
     * @param string $nome O nome da categoria.
     * @param float $imposto A taxa de imposto da categoria.
     */
    public function __construct(
        private string $nome,
        private float $imposto
    ) {
    }

    /**
     * Obtém o nome da categoria.
     * 
     * @return string O nome da categoria.
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Obtém a taxa de imposto da categoria.
     * 
     * @return float A taxa de imposto da categoria.
     */
    public function getImposto(): float
    {
        return $this->imposto;
    }
}
