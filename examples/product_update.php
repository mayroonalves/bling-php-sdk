<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Product;

$product = new Product(Config::configure('api-token'));

$product->setCode('asdasdmirao');
$product->setBody([
    'codigo' => 'asdasdmirao',
    'descricao' => 'asdasdads',
    // 'tipo' => '',
    // 'situacao' => '',
    // 'descricaoCurta' => '',
    // 'descricaoComplementar' => '',
    // 'un' => '',
    // 'vlr_unit' => '',
    // 'preco_custo' => '',
    // 'peso_bruto' => '',
    // 'peso_liq' => '',
    // 'class_fiscal' => '',
    // 'cest' => '',
    // 'origem' => '',
    // 'idGrupoProduto' => '',
    // 'condicao' => '',
    // 'freteGratis' => '',
    // 'linkExterno' => '',
    // 'observacoes' => '',
    // 'producao' => '',
    // 'unidadeMedida' => '',
    // 'dataValidade' => '',
    // 'descricaoFornecedor' => '',
    // 'idFabricante' => '',
    // 'codigoFabricante' => '',
    // 'estoque' => '',
    // 'deposito' => '',
    // 'gtin' => '',
    // 'gtinEmbalagem' => '',
    // 'largura' => '',
    // 'altura' => '',
    // 'profundidade' => '',
    // 'estoqueMinimo' => '',
    // 'estoqueMaximo' => '',
    // 'itensPorCaixa' => '',
    // 'volumes' => '',
    // 'urlVideo' => '',
    // 'localizacao' => '',
]);
echo $product->update();
