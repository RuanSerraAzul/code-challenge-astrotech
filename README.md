# Code Challenge AstroTech

## Descrição

Este projeto é uma implementação de um sistema básico de venda de produtos utilizando PHP 8+. O sistema permite adicionar produtos a uma venda, calcular impostos com base nas categorias dos produtos e gerar um resumo da venda. Este projeto foi desenvolvido como parte de um desafio técnico para demonstrar habilidades em PHP, orientação a objetos, e testes automatizados.

## Pré-requisitos

- PHP 8+
- Composer

## Instalação

1. Clone o repositório:

2. Instale as dependências via Composer:
    ```bash
    composer install
    ```

## Code Challenge

### O que você vai precisar executar

Você deverá desenvolver um código seguindo as especificações abaixo:
- Você terá que representar um produto que deverá ser vinculado a alguma categoria, assim como tem nos e-commerces;
- Você deverá ter as categorias: Notebooks, Smart Phones e Eletrodomésticos;
- Você deve criar uma rotina de venda, onde será recebido um Produto ou mais produtos;
- Com essa lista de produtos, você deverá obter a categoria de cada um deles e aplicar um acréscimo no valor total que simule um imposto sendo:
  - Notebooks: 6%
  - Smart Phones: 8%
  - Eletrodomésticos: 10%

### A rotina de venda deverá mostrar da sua saída o resumo do pedido, mostrando:
- Número de Pedidos
- Total Bruto (Somatório sem os acréscimos)
- Impostos (Somatório dos impostos)
- Total Líquido (Somatório com os acréscimos)

### Regras

- Você deverá usar os novos recursos do PHP 8+ e Testes Automatizados com PHPUnit.
- PHP: você NÃO PODERÁ usar nenhum microframework ou um fullstack, como Laravel, Symfony e etc. A ideia é que você construa o código do zero explorando todo o seu conhecimento com a linguagem;
- Orientação a Objetos: é muito importante que você mostre tudo o que você sabe do paradigma OO aqui, para que possamos entender em que nível você está no momento;
- Testes Automatizados: você deverá criar testes automatizados para esse teste, usando a biblioteca PHPUnit.


## Como Usar

### Executando o Script Principal

1. Navegue até o diretório do projeto.
2. Execute o script `index.php` para ver a funcionalidade principal:
    ```bash
    php index.php
    ```

### Executando os testes

1. Navegue até o diretório do projeto.
2. Execute o seguinte comando para rodar executar os testes feitos em PHPUnit:
    ```bash
    vendor/bin/phpunit
    ```
3.Os testes cobrem todas as funcionalidades principais do sistema, garantindo que cada componente funciona conforme esperado.