# SwaggerClient-php
API para gerenciar os serviços de cobranças de cliente do Banco do Brasil S.A.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.17.3
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
For more information, please visit [https://developers.bb.com.br](https://developers.bb.com.br)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Boleto\Model\RequisicaoAlterarBoleto(); // \Swagger\Client\Boleto\Model\RequisicaoAlterarBoleto | Representação dos campos de requisição de uma solicitação de alteração dos dados de boletos bancários.
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.    Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número do título de cobrança.

try {
    $result = $apiInstance->alteraBoletoBancarioId($body, $authorization, $gw_dev_app_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->alteraBoletoBancarioId: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$authorization = "authorization_example"; // string | É um \"token\" de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN]
$agencia = 56; // int | Número da agência do beneficiário, sem o dígito verificador.
$conta = 789; // int | Número da conta do beneficiário, sem o dígito verificador.
$carteira = 56; // int | Número da carteira do convênio de cobrança.
$variacao = 56; // int | Número da variação da carteira do convênio de cobrança.
$data_inicio_agendamento_titulo = "data_inicio_agendamento_titulo_example"; // string | Data de agendamento inicial para delimitar período da consulta.
$data_fim_agendamento_titulo = "data_fim_agendamento_titulo_example"; // string | Data de agendamento final para delimitar período da consulta.
$estado_baixa_operacional = 56; // int | Código para identificar o estado da baixa operacional. Domínio:1 - BAIXA OPERACIONAL BB; 2 - BAIXA OPERACIONAL OUTROS BANCOS; 10- CANCELAMENTO DE BAIXA OPERACIONAL
$modalidade_titulo = 56; // int | Código para identificar a característica dos boletos dentro das modalidades de cobrança existentes no banco.  Domínio: 1 - SIMPLES 4 - VINCULADA
$data_inicio_vencimento_titulo = "data_inicio_vencimento_titulo_example"; // string | Data de vencimento inicial para delimitar período da consulta.
$data_fim_vencimento_titulo = "data_fim_vencimento_titulo_example"; // string | Data de vencimento final para delimitar período da consulta.
$data_inicio_registro_titulo = "data_inicio_registro_titulo_example"; // string | Data de registro inicial para delimitar período da consulta.
$data_fim_registro_titulo = "data_fim_registro_titulo_example"; // string | Data de registro final para delimitar período da consulta.
$horario_inicio_agendamento_titulo = "horario_inicio_agendamento_titulo_example"; // string | Hora de agendamento inicial para delimitar período da consulta.
$horario_fim_agendamento_titulo = "horario_fim_agendamento_titulo_example"; // string | Hora de agendamento final para delimitar período da consulta.
$id_proximo_titulo = "id_proximo_titulo_example"; // string | Identificador do próximo título da próxima paginação a ser consultado. Somente deve ser utilizado em caso de pesquisas que retornem mais de 650 boletos. Se na resposta da primeira consulta, ou consulta anterior, o campo \"possuiMaisTitulos\" retorne o valor \"S\", então na próxima chamada, o usuário deve informar o valor do campo \"proximoTitulo\" que veio na resposta, a partir do qual será iniciada nova consulta.

try {
    $result = $apiInstance->boletosBaixaOperacional($gw_dev_app_key, $authorization, $agencia, $conta, $carteira, $variacao, $data_inicio_agendamento_titulo, $data_fim_agendamento_titulo, $estado_baixa_operacional, $modalidade_titulo, $data_inicio_vencimento_titulo, $data_fim_vencimento_titulo, $data_inicio_registro_titulo, $data_fim_registro_titulo, $horario_inicio_agendamento_titulo, $horario_fim_agendamento_titulo, $id_proximo_titulo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->boletosBaixaOperacional: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma: “000” + (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório.
$body = new \Swagger\Client\Boleto\Model\IdCancelarpixBody(); // \Swagger\Client\Boleto\Model\IdCancelarpixBody |

try {
    $result = $apiInstance->cancelarPixBoletoId($authorization, $gw_dev_app_key, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->cancelarPixBoletoId: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma:  “000” +  (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório.
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.    Example: Bearer [ACCESS_TOKEN]
$numero_convenio = 1.2; // float | Número do convênio de Cobrança do Cliente

try {
    $result = $apiInstance->consultarPixBoletoId($id, $gw_dev_app_key, $authorization, $numero_convenio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->consultarPixBoletoId: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Número do título de cobrança.
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.    Example: Bearer [ACCESS_TOKEN]
$numero_convenio = 1.2; // float | Número do convênio.

try {
    $result = $apiInstance->detalhaBoletoBancarioId($id, $gw_dev_app_key, $authorization, $numero_convenio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->detalhaBoletoBancarioId: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma: “000” + (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório.
$body = new \Swagger\Client\Boleto\Model\IdGerarpixBody(); // \Swagger\Client\Boleto\Model\IdGerarpixBody |

try {
    $result = $apiInstance->gerarPixBoletoId($authorization, $gw_dev_app_key, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->gerarPixBoletoId: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Boleto\Model\RequisicaoRegistroBoletos(); // \Swagger\Client\Boleto\Model\RequisicaoRegistroBoletos |
$authorization = "authorization_example"; // string | É um \"token\" de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.

try {
    $result = $apiInstance->incluiBoletoBancarioId($body, $authorization, $gw_dev_app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->incluiBoletoBancarioId: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$authorization = "authorization_example"; // string | É um \"token\" de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN]
$indicador_situacao = "indicador_situacao_example"; // string | Situação do boleto. Campo obrigatoriamente MAIÚSCULO. Domínios: A - Em ser B - Baixados/Protestados/Liquidados
$agencia_beneficiario = 56; // int | Número da agência do beneficiário, sem o dígito verificador. Ex: 452. CAMPO OBRIGATÓRIO.
$conta_beneficiario = 789; // int | Número da conta do beneficiário, sem o dígito verificador. Ex: 123873. CAMPO OBRIGATÓRIO.
$conta_caucao = 56; // int | Número da conta caução.  Domínio: 1 - Compõe Garantia; 2 - Não Compõe Garantia; 4 - Não Compõe Garantia (vencimento superior a 180 dias); 5 - Não Compõe Garantia (Vedado); 6 - Em análise; 7 - Em análise; 8 - Não Compõe Garantia.
$carteira_convenio = 56; // int | Número da carteira do convênio de cobrança. Ex: 17
$variacao_carteira_convenio = 56; // int | Número da variação da carteira do convênio de cobrança. Ex: 35
$modalidade_cobranca = 56; // int | Código para identificar a característica dos boletos dentro das modalidades de cobrança existentes no BB. Domínio: 1 - SIMPLES COM REGISTRO 2 - SIMPLES SEM REGISTRO 4 - VINCULADA 6 - DESCONTADA 8 - FINANCIADA VENDOR
$cnpj_pagador = 789; // int | CNPJ do pagador Ex: 123456789012
$digito_cnpj_pagador = 56; // int | Dígito verificador do CNPJ do pagador Ex: 12
$cpf_pagador = 789; // int | CPF do pagador sem o dígito. Ex: 711285901
$digito_cpf_pagador = 56; // int | Dígito verificador do CPF do pagador. Ex: 82
$data_inicio_vencimento = "data_inicio_vencimento_example"; // string | Data inicial de vencimento do boleto que delimita o período da consulta. Campo não obrigatório. Se informado Data Início, deixando em branco a Data Fim, o sistema deve assumir a data atual como Data Fim. Ex: 22.04.2020
$data_fim_vencimento = "data_fim_vencimento_example"; // string | Data final de vencimento do boleto que delimita o período da consulta - deverá ser maior que a data de início. Campo não obrigatório. Se informado, deverá ser preenchido dataInicioVencimento. Ex: 28.04.2020
$data_inicio_registro = "data_inicio_registro_example"; // string | Data inicial do registro do boleto que delimita o período da consulta. Ex: 22.04.2020
$data_fim_registro = "data_fim_registro_example"; // string | Data final do registro do boleto que delimita o período da consulta - deverá ser maior que a data de início. Campo não obrigatório. Se informado, deverá ser preenchido dataInicioRegistro. Ex: 28.04.2020
$data_inicio_movimento = "data_inicio_movimento_example"; // string | Delimita o período da consulta  de boletos liquidados, baixados ou protestados, caso seja informado, no campo codigoEstadoTituloCobranca os códigos 05, 06, 07 ou 09. Ex: 22.04.2020
$data_fim_movimento = "data_fim_movimento_example"; // string | Data final do movimento que delimita o período da consulta  de boletos liquidados, baixados ou protestados, caso seja informado, no campo codigoEstadoTituloCobranca os códigos 05, 06, 07 ou 09. Data fim deverá ser maior que a data de início. Campo não obrigatório. Se informado, deverá ser preenchido dataInicioMovimento. Ex: 28.04.2020
$codigo_estado_titulo_cobranca = 56; // int | Código da situação atual do boleto.   Domínios:  01 - NORMAL 02 - MOVIMENTO CARTORIO 03 - EM CARTORIO 04 - TITULO COM OCORRENCIA DE CARTORIO 05 - PROTESTADO ELETRONICO 06 - LIQUIDADO 07 - BAIXADO 08 - TITULO COM PENDENCIA DE CARTORIO 09 - TITULO PROTESTADO MANUAL 10 - TITULO BAIXADO/PAGO EM CARTORIO 11 - TITULO LIQUIDADO/PROTESTADO 12 - TITULO LIQUID/PGCRTO 13 - TITULO PROTESTADO AGUARDANDO BAIXA 14 - TITULO EM LIQUIDACAO 15 - TITULO AGENDADO 16 - TITULO CREDITADO 17 - PAGO EM CHEQUE - AGUARD.LIQUIDACAO 18 - PAGO PARCIALMENTE CREDITADO 80 - EM PROCESSAMENTO (ESTADO TRANSITÓRIO)
$boleto_vencido = "boleto_vencido_example"; // string | Indica se o Boleto está vencido ou não. Campo obrigatoriamente MAIÚSCULO. Domínio: S para boletos vencidos N para boletos não vencidos
$indice = 789; // int | Somente deve ser utilizado em caso de pesquisas que retornem mais de 300 boletos. Caso o campo RPST \"Indicador Continuidade\" retorne com o valor \"S\", o usuário deve informar o conteúdo do campo RPST \"Numero Ultimo Registro\" a partir do qual será iniciada nova consulta.

try {
    $result = $apiInstance->listaBoletosId($gw_dev_app_key, $authorization, $indicador_situacao, $agencia_beneficiario, $conta_beneficiario, $conta_caucao, $carteira_convenio, $variacao_carteira_convenio, $modalidade_cobranca, $cnpj_pagador, $digito_cnpj_pagador, $cpf_pagador, $digito_cpf_pagador, $data_inicio_vencimento, $data_fim_vencimento, $data_inicio_registro, $data_fim_registro, $data_inicio_movimento, $data_fim_movimento, $codigo_estado_titulo_cobranca, $boleto_vencido, $indice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->listaBoletosId: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Boleto\Model\RequisicaoBaixaBoleto(); // \Swagger\Client\Boleto\Model\RequisicaoBaixaBoleto |
$authorization = "authorization_example"; // string | É um \"token\" de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número do boleto bancário (único e exclusivo) que identifica o título e é usado para pagá-lo.

try {
    $result = $apiInstance->permitirBaixaCancelamentoId($body, $authorization, $gw_dev_app_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->permitirBaixaCancelamentoId: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.sandbox.bb.com.br/cobrancas/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BoletosApi* | [**alteraBoletoBancarioId**](docs/Api/BoletosApi.md#alteraboletobancarioid) | **PATCH** /boletos/{id} | Altera um boleto bancário
*BoletosApi* | [**boletosBaixaOperacional**](docs/Api/BoletosApi.md#boletosbaixaoperacional) | **GET** /boletos-baixa-operacional | Informações de Baixa Operacional de Boletos
*BoletosApi* | [**cancelarPixBoletoId**](docs/Api/BoletosApi.md#cancelarpixboletoid) | **POST** /boletos/{id}/cancelar-pix | Cancelar Pix de Boleto
*BoletosApi* | [**consultarPixBoletoId**](docs/Api/BoletosApi.md#consultarpixboletoid) | **GET** /boletos/{id}/pix | Consultar Pix de Boleto
*BoletosApi* | [**detalhaBoletoBancarioId**](docs/Api/BoletosApi.md#detalhaboletobancarioid) | **GET** /boletos/{id} | Detalha um boleto bancário
*BoletosApi* | [**gerarPixBoletoId**](docs/Api/BoletosApi.md#gerarpixboletoid) | **POST** /boletos/{id}/gerar-pix | Gerar Pix de Boleto
*BoletosApi* | [**incluiBoletoBancarioId**](docs/Api/BoletosApi.md#incluiboletobancarioid) | **POST** /boletos | Registra Boleto de Cobrança
*BoletosApi* | [**listaBoletosId**](docs/Api/BoletosApi.md#listaboletosid) | **GET** /boletos | Lista Boletos
*BoletosApi* | [**permitirBaixaCancelamentoId**](docs/Api/BoletosApi.md#permitirbaixacancelamentoid) | **POST** /boletos/{id}/baixar | Permitir a baixa/cancelamento de um  título de cobrança.
*ConvnioApi* | [**ativarConsultaBaixaOperacional**](docs/Api/ConvnioApi.md#ativarconsultabaixaoperacional) | **PATCH** /convenios/{id}/ativar-consulta-baixa-operacional | Habilitar Consulta de Baixa Operacional
*ConvnioApi* | [**desativaConsultaBaixaOperacional**](docs/Api/ConvnioApi.md#desativaconsultabaixaoperacional) | **PATCH** /convenios/{id}/desativar-consulta-baixa-operacional | Desativar Consulta Baixa Operacional
*MovimentoApi* | [**postConveniosIdListarRetornoMovimento**](docs/Api/MovimentoApi.md#postconveniosidlistarretornomovimento) | **POST** /convenios/{id}/listar-retorno-movimento | Listar Dados do Retorno do Convênio

## Documentation For Models

 - [Abatimento](docs/Model/Abatimento.md)
 - [AlteracaoAbatimento](docs/Model/AlteracaoAbatimento.md)
 - [AlteracaoData](docs/Model/AlteracaoData.md)
 - [AlteracaoDataDesconto](docs/Model/AlteracaoDataDesconto.md)
 - [AlteracaoDesconto](docs/Model/AlteracaoDesconto.md)
 - [AlteracaoEndereco](docs/Model/AlteracaoEndereco.md)
 - [AlteracaoPrazo](docs/Model/AlteracaoPrazo.md)
 - [AlteracaoSeuNumero](docs/Model/AlteracaoSeuNumero.md)
 - [AlterarValorNominal](docs/Model/AlterarValorNominal.md)
 - [Desconto](docs/Model/Desconto.md)
 - [Erro](docs/Model/Erro.md)
 - [ErroErrors](docs/Model/ErroErrors.md)
 - [ErroOAuthNaoAutorizado](docs/Model/ErroOAuthNaoAutorizado.md)
 - [ErroOAuthNaoAutorizadoAttributes](docs/Model/ErroOAuthNaoAutorizadoAttributes.md)
 - [ErroV2](docs/Model/ErroV2.md)
 - [ErroV4](docs/Model/ErroV4.md)
 - [Errov2Erros](docs/Model/Errov2Erros.md)
 - [Errov4Erros](docs/Model/Errov4Erros.md)
 - [IdCancelarpixBody](docs/Model/IdCancelarpixBody.md)
 - [IdGerarpixBody](docs/Model/IdGerarpixBody.md)
 - [IdListarretornomovimentoBody](docs/Model/IdListarretornomovimentoBody.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2001ListaRegistro](docs/Model/InlineResponse2001ListaRegistro.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse200Pix](docs/Model/InlineResponse200Pix.md)
 - [InlineResponse200QrCode](docs/Model/InlineResponse200QrCode.md)
 - [Juros](docs/Model/Juros.md)
 - [Multa](docs/Model/Multa.md)
 - [Negativacao](docs/Model/Negativacao.md)
 - [Protesto](docs/Model/Protesto.md)
 - [RequisicaoAlterarBoleto](docs/Model/RequisicaoAlterarBoleto.md)
 - [RequisicaoBaixaBoleto](docs/Model/RequisicaoBaixaBoleto.md)
 - [RequisicaoRegistroBoletos](docs/Model/RequisicaoRegistroBoletos.md)
 - [RequisicaoRegistroBoletosBeneficiarioFinal](docs/Model/RequisicaoRegistroBoletosBeneficiarioFinal.md)
 - [RequisicaoRegistroBoletosDesconto](docs/Model/RequisicaoRegistroBoletosDesconto.md)
 - [RequisicaoRegistroBoletosJurosMora](docs/Model/RequisicaoRegistroBoletosJurosMora.md)
 - [RequisicaoRegistroBoletosMulta](docs/Model/RequisicaoRegistroBoletosMulta.md)
 - [RequisicaoRegistroBoletosPagador](docs/Model/RequisicaoRegistroBoletosPagador.md)
 - [RequisicaoRegistroBoletosSegundoDesconto](docs/Model/RequisicaoRegistroBoletosSegundoDesconto.md)
 - [RequisicaoRegistroBoletosTerceiroDesconto](docs/Model/RequisicaoRegistroBoletosTerceiroDesconto.md)
 - [RespostaAlterarBoleto](docs/Model/RespostaAlterarBoleto.md)
 - [RespostaBaixaBoleto](docs/Model/RespostaBaixaBoleto.md)
 - [RespostaBoletosBaixaOperacional](docs/Model/RespostaBoletosBaixaOperacional.md)
 - [RespostaBoletosBaixaOperacionalLista](docs/Model/RespostaBoletosBaixaOperacionalLista.md)
 - [RespostaBoletosBaixaOperacionalTitulo](docs/Model/RespostaBoletosBaixaOperacionalTitulo.md)
 - [RespostaBoletosBaixaOperacionalTituloAgendamentoPagamento](docs/Model/RespostaBoletosBaixaOperacionalTituloAgendamentoPagamento.md)
 - [RespostaConsultaPixBoleto](docs/Model/RespostaConsultaPixBoleto.md)
 - [RespostaConsultaPixBoletoPix](docs/Model/RespostaConsultaPixBoletoPix.md)
 - [RespostaConsultaPixBoletoQrCode](docs/Model/RespostaConsultaPixBoletoQrCode.md)
 - [RespostaDetalhamentoBoleto](docs/Model/RespostaDetalhamentoBoleto.md)
 - [RespostaListaBoletos](docs/Model/RespostaListaBoletos.md)
 - [RespostaListaBoletosBoletos](docs/Model/RespostaListaBoletosBoletos.md)
 - [RespostaRegistroBoletos](docs/Model/RespostaRegistroBoletos.md)
 - [RespostaRegistroBoletosBeneficiario](docs/Model/RespostaRegistroBoletosBeneficiario.md)
 - [RespostaRegistroBoletosQrCode](docs/Model/RespostaRegistroBoletosQrCode.md)

## Documentation For Authorization


## OAuth2

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**:
- **Scopes**:
 - **cobrancas.boletos-requisicao**: Permite registrar e baixar boletos de cobrança.
 - **cobrancas.boletos-info**: Permite consultar detalhes de boletos de cobrança.


## Author
