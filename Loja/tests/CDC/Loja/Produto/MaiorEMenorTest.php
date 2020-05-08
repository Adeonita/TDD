<?php
    namespace CDC\Loja\Produto;

    require './vendor/autoload.php';

    use CDC\Loja\Carrinho\CarrinhoDeCompras,
        CDC\Loja\Produto\Produto,
        CDC\Loja\Produto\MaiorEMenor;
        
    use PHPUnit\Framework\TestCase ;
    
    class MaiorEMenorTest extends TestCase
    {

        public function testOrdemDescrescente()
        {

            $carrinho = new CarrinhoDeCompras();

            $carrinho->adiciona(
                new Produto("Geladeira", 450.00)
            );
            $carrinho->adiciona(
                new Produto("Liquidificador", 200.00)
            );
            $carrinho->adiciona(
                new Produto("Jogo de Pratos", 70.00)
            );

            $maiorMenor = new MaiorEMenor();
            $maiorMenor->encontra($carrinho);

            $this->assertEquals("Jogo de Pratos", $maiorMenor->getMenor()->getNome());
            $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
        }
    }

    
?>