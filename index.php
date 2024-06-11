<?php

require __DIR__ . '/vendor/autoload.php';

use Projeto\Categoria\Categoria;
use Projeto\Produto\Produto;
use Projeto\Venda\Venda;
use Projeto\Imposto\CalculadoraDeImposto;

/**
 * Script principal para executar a lógica de venda.
 * 
 * Este script cria instâncias de categorias, produtos e venda, adiciona os produtos à venda
 * e exibe o resumo da venda.
 */


// Instanciando categorias
$categoriaNotebooks = new Categoria("Notebooks", 6);
$categoriaSmartPhones = new Categoria("Smart Phones", 8);
$categoriaEletrodomesticos = new Categoria("Eletrodomésticos", 10);

// Instanciando produtos
$produto1 = new Produto("Notebook Dell", 3000, $categoriaNotebooks);
$produto2 = new Produto("iPhone", 4000, $categoriaSmartPhones);
$produto3 = new Produto("Geladeira", 2000, $categoriaEletrodomesticos);

// Instanciando CalculadoraDeImposto
$calculadoraDeImposto = new CalculadoraDeImposto();

// Instanciando a venda
$venda = new Venda([], $calculadoraDeImposto);
$venda->adicionarProduto($produto1);
$venda->adicionarProduto($produto2);
$venda->adicionarProduto($produto3);

// Exibindo o resumo da venda
$venda->resumoVenda();

?>
