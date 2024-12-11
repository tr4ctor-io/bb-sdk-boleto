# Swagger\Client\BoletosApi

All URIs are relative to *https://api.sandbox.bb.com.br/cobrancas/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alteraBoletoBancarioId**](BoletosApi.md#alteraboletobancarioid) | **PATCH** /boletos/{id} | Altera um boleto bancário
[**boletosBaixaOperacional**](BoletosApi.md#boletosbaixaoperacional) | **GET** /boletos-baixa-operacional | Informações de Baixa Operacional de Boletos
[**cancelarPixBoletoId**](BoletosApi.md#cancelarpixboletoid) | **POST** /boletos/{id}/cancelar-pix | Cancelar Pix de Boleto
[**consultarPixBoletoId**](BoletosApi.md#consultarpixboletoid) | **GET** /boletos/{id}/pix | Consultar Pix de Boleto
[**detalhaBoletoBancarioId**](BoletosApi.md#detalhaboletobancarioid) | **GET** /boletos/{id} | Detalha um boleto bancário
[**gerarPixBoletoId**](BoletosApi.md#gerarpixboletoid) | **POST** /boletos/{id}/gerar-pix | Gerar Pix de Boleto
[**incluiBoletoBancarioId**](BoletosApi.md#incluiboletobancarioid) | **POST** /boletos | Registra Boleto de Cobrança
[**listaBoletosId**](BoletosApi.md#listaboletosid) | **GET** /boletos | Lista Boletos
[**permitirBaixaCancelamentoId**](BoletosApi.md#permitirbaixacancelamentoid) | **POST** /boletos/{id}/baixar | Permitir a baixa/cancelamento de um  título de cobrança.

# **alteraBoletoBancarioId**
> \Swagger\Client\Model\RespostaAlterarBoleto alteraBoletoBancarioId($body, $authorization, $gw_dev_app_key, $id)

Altera um boleto bancário

Realiza alterações nos valores dos campos presentes em um boleto bancário já criado.

### Example
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
$body = new \Swagger\Client\Model\RequisicaoAlterarBoleto(); // \Swagger\Client\Model\RequisicaoAlterarBoleto | Representação dos campos de requisição de uma solicitação de alteração dos dados de boletos bancários.
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.    Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número do título de cobrança.

try {
    $result = $apiInstance->alteraBoletoBancarioId($body, $authorization, $gw_dev_app_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->alteraBoletoBancarioId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequisicaoAlterarBoleto**](../Model/RequisicaoAlterarBoleto.md)| Representação dos campos de requisição de uma solicitação de alteração dos dados de boletos bancários. |
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.    Example: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **id** | **string**| Número do título de cobrança. |

### Return type

[**\Swagger\Client\Model\RespostaAlterarBoleto**](../Model/RespostaAlterarBoleto.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boletosBaixaOperacional**
> \Swagger\Client\Model\RespostaBoletosBaixaOperacional boletosBaixaOperacional($gw_dev_app_key, $authorization, $agencia, $conta, $carteira, $variacao, $data_inicio_agendamento_titulo, $data_fim_agendamento_titulo, $estado_baixa_operacional, $modalidade_titulo, $data_inicio_vencimento_titulo, $data_fim_vencimento_titulo, $data_inicio_registro_titulo, $data_fim_registro_titulo, $horario_inicio_agendamento_titulo, $horario_fim_agendamento_titulo, $id_proximo_titulo)

Informações de Baixa Operacional de Boletos

Lista as informações de baixa operacional de boletos de uma carteira de cobrança.  OBS: A utilização do recurso depende da habilitação através do PATCH /convenios/{id}/ativar-consulta-baixa-operacional.  Para desativar o o recurso, utilize o PATCH /convenios/{id}/desativar-consulta-baixa-operacional.

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **authorization** | **string**| É um \&quot;token\&quot; de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN] |
 **agencia** | **int**| Número da agência do beneficiário, sem o dígito verificador. |
 **conta** | **int**| Número da conta do beneficiário, sem o dígito verificador. |
 **carteira** | **int**| Número da carteira do convênio de cobrança. |
 **variacao** | **int**| Número da variação da carteira do convênio de cobrança. |
 **data_inicio_agendamento_titulo** | **string**| Data de agendamento inicial para delimitar período da consulta. |
 **data_fim_agendamento_titulo** | **string**| Data de agendamento final para delimitar período da consulta. |
 **estado_baixa_operacional** | **int**| Código para identificar o estado da baixa operacional. Domínio:1 - BAIXA OPERACIONAL BB; 2 - BAIXA OPERACIONAL OUTROS BANCOS; 10- CANCELAMENTO DE BAIXA OPERACIONAL | [optional]
 **modalidade_titulo** | **int**| Código para identificar a característica dos boletos dentro das modalidades de cobrança existentes no banco.  Domínio: 1 - SIMPLES 4 - VINCULADA | [optional]
 **data_inicio_vencimento_titulo** | **string**| Data de vencimento inicial para delimitar período da consulta. | [optional]
 **data_fim_vencimento_titulo** | **string**| Data de vencimento final para delimitar período da consulta. | [optional]
 **data_inicio_registro_titulo** | **string**| Data de registro inicial para delimitar período da consulta. | [optional]
 **data_fim_registro_titulo** | **string**| Data de registro final para delimitar período da consulta. | [optional]
 **horario_inicio_agendamento_titulo** | **string**| Hora de agendamento inicial para delimitar período da consulta. | [optional]
 **horario_fim_agendamento_titulo** | **string**| Hora de agendamento final para delimitar período da consulta. | [optional]
 **id_proximo_titulo** | **string**| Identificador do próximo título da próxima paginação a ser consultado. Somente deve ser utilizado em caso de pesquisas que retornem mais de 650 boletos. Se na resposta da primeira consulta, ou consulta anterior, o campo \&quot;possuiMaisTitulos\&quot; retorne o valor \&quot;S\&quot;, então na próxima chamada, o usuário deve informar o valor do campo \&quot;proximoTitulo\&quot; que veio na resposta, a partir do qual será iniciada nova consulta. | [optional]

### Return type

[**\Swagger\Client\Model\RespostaBoletosBaixaOperacional**](../Model/RespostaBoletosBaixaOperacional.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelarPixBoletoId**
> \Swagger\Client\Model\InlineResponse200 cancelarPixBoletoId($authorization, $gw_dev_app_key, $id, $body)

Cancelar Pix de Boleto

Cancelar Pix vinculado a um boleto de cobrança existente.

### Example
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
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma: “000” + (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório.
$body = new \Swagger\Client\Model\IdCancelarpixBody(); // \Swagger\Client\Model\IdCancelarpixBody | 

try {
    $result = $apiInstance->cancelarPixBoletoId($authorization, $gw_dev_app_key, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->cancelarPixBoletoId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **id** | **string**| Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma: “000” + (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório. |
 **body** | [**\Swagger\Client\Model\IdCancelarpixBody**](../Model/IdCancelarpixBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consultarPixBoletoId**
> \Swagger\Client\Model\RespostaConsultaPixBoleto consultarPixBoletoId($id, $gw_dev_app_key, $authorization, $numero_convenio)

Consultar Pix de Boleto

Consultar os dados de um Pix vinculado a um boleto de cobrança.

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma:  “000” +  (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório. |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.    Example: Bearer [ACCESS_TOKEN] |
 **numero_convenio** | **float**| Número do convênio de Cobrança do Cliente |

### Return type

[**\Swagger\Client\Model\RespostaConsultaPixBoleto**](../Model/RespostaConsultaPixBoleto.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detalhaBoletoBancarioId**
> \Swagger\Client\Model\RespostaDetalhamentoBoleto detalhaBoletoBancarioId($id, $gw_dev_app_key, $authorization, $numero_convenio)

Detalha um boleto bancário

Consulta detalhes de um boleto bancário.

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Número do título de cobrança. |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.    Example: Bearer [ACCESS_TOKEN] |
 **numero_convenio** | **float**| Número do convênio. |

### Return type

[**\Swagger\Client\Model\RespostaDetalhamentoBoleto**](../Model/RespostaDetalhamentoBoleto.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gerarPixBoletoId**
> \Swagger\Client\Model\InlineResponse200 gerarPixBoletoId($authorization, $gw_dev_app_key, $id, $body)

Gerar Pix de Boleto

Gerar Pix vinculado a um boleto de cobrança através de um QRCode Dinâmico ou Estático.

### Example
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
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma: “000” + (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório.
$body = new \Swagger\Client\Model\IdGerarpixBody(); // \Swagger\Client\Model\IdGerarpixBody | 

try {
    $result = $apiInstance->gerarPixBoletoId($authorization, $gw_dev_app_key, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->gerarPixBoletoId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **id** | **string**| Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma: “000” + (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório. |
 **body** | [**\Swagger\Client\Model\IdGerarpixBody**](../Model/IdGerarpixBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incluiBoletoBancarioId**
> \Swagger\Client\Model\RespostaRegistroBoletos incluiBoletoBancarioId($body, $authorization, $gw_dev_app_key)

Registra Boleto de Cobrança

Permite incluir um novo boleto de cobrança

### Example
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
$body = new \Swagger\Client\Model\RequisicaoRegistroBoletos(); // \Swagger\Client\Model\RequisicaoRegistroBoletos | 
$authorization = "authorization_example"; // string | É um \"token\" de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.

try {
    $result = $apiInstance->incluiBoletoBancarioId($body, $authorization, $gw_dev_app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->incluiBoletoBancarioId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequisicaoRegistroBoletos**](../Model/RequisicaoRegistroBoletos.md)|  |
 **authorization** | **string**| É um \&quot;token\&quot; de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |

### Return type

[**\Swagger\Client\Model\RespostaRegistroBoletos**](../Model/RespostaRegistroBoletos.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listaBoletosId**
> \Swagger\Client\Model\RespostaListaBoletos[] listaBoletosId($gw_dev_app_key, $authorization, $indicador_situacao, $agencia_beneficiario, $conta_beneficiario, $conta_caucao, $carteira_convenio, $variacao_carteira_convenio, $modalidade_cobranca, $cnpj_pagador, $digito_cnpj_pagador, $cpf_pagador, $digito_cpf_pagador, $data_inicio_vencimento, $data_fim_vencimento, $data_inicio_registro, $data_fim_registro, $data_inicio_movimento, $data_fim_movimento, $codigo_estado_titulo_cobranca, $boleto_vencido, $indice)

Lista Boletos

Listar títulos de cobrança - Em Ser, Baixados, Liquidados e Com Protesto por Beneficiário.

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **authorization** | **string**| É um \&quot;token\&quot; de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN] |
 **indicador_situacao** | **string**| Situação do boleto. Campo obrigatoriamente MAIÚSCULO. Domínios: A - Em ser B - Baixados/Protestados/Liquidados |
 **agencia_beneficiario** | **int**| Número da agência do beneficiário, sem o dígito verificador. Ex: 452. CAMPO OBRIGATÓRIO. |
 **conta_beneficiario** | **int**| Número da conta do beneficiário, sem o dígito verificador. Ex: 123873. CAMPO OBRIGATÓRIO. |
 **conta_caucao** | **int**| Número da conta caução.  Domínio: 1 - Compõe Garantia; 2 - Não Compõe Garantia; 4 - Não Compõe Garantia (vencimento superior a 180 dias); 5 - Não Compõe Garantia (Vedado); 6 - Em análise; 7 - Em análise; 8 - Não Compõe Garantia. | [optional]
 **carteira_convenio** | **int**| Número da carteira do convênio de cobrança. Ex: 17 | [optional]
 **variacao_carteira_convenio** | **int**| Número da variação da carteira do convênio de cobrança. Ex: 35 | [optional]
 **modalidade_cobranca** | **int**| Código para identificar a característica dos boletos dentro das modalidades de cobrança existentes no BB. Domínio: 1 - SIMPLES COM REGISTRO 2 - SIMPLES SEM REGISTRO 4 - VINCULADA 6 - DESCONTADA 8 - FINANCIADA VENDOR | [optional]
 **cnpj_pagador** | **int**| CNPJ do pagador Ex: 123456789012 | [optional]
 **digito_cnpj_pagador** | **int**| Dígito verificador do CNPJ do pagador Ex: 12 | [optional]
 **cpf_pagador** | **int**| CPF do pagador sem o dígito. Ex: 711285901 | [optional]
 **digito_cpf_pagador** | **int**| Dígito verificador do CPF do pagador. Ex: 82 | [optional]
 **data_inicio_vencimento** | **string**| Data inicial de vencimento do boleto que delimita o período da consulta. Campo não obrigatório. Se informado Data Início, deixando em branco a Data Fim, o sistema deve assumir a data atual como Data Fim. Ex: 22.04.2020 | [optional]
 **data_fim_vencimento** | **string**| Data final de vencimento do boleto que delimita o período da consulta - deverá ser maior que a data de início. Campo não obrigatório. Se informado, deverá ser preenchido dataInicioVencimento. Ex: 28.04.2020 | [optional]
 **data_inicio_registro** | **string**| Data inicial do registro do boleto que delimita o período da consulta. Ex: 22.04.2020 | [optional]
 **data_fim_registro** | **string**| Data final do registro do boleto que delimita o período da consulta - deverá ser maior que a data de início. Campo não obrigatório. Se informado, deverá ser preenchido dataInicioRegistro. Ex: 28.04.2020 | [optional]
 **data_inicio_movimento** | **string**| Delimita o período da consulta  de boletos liquidados, baixados ou protestados, caso seja informado, no campo codigoEstadoTituloCobranca os códigos 05, 06, 07 ou 09. Ex: 22.04.2020 | [optional]
 **data_fim_movimento** | **string**| Data final do movimento que delimita o período da consulta  de boletos liquidados, baixados ou protestados, caso seja informado, no campo codigoEstadoTituloCobranca os códigos 05, 06, 07 ou 09. Data fim deverá ser maior que a data de início. Campo não obrigatório. Se informado, deverá ser preenchido dataInicioMovimento. Ex: 28.04.2020 | [optional]
 **codigo_estado_titulo_cobranca** | **int**| Código da situação atual do boleto.   Domínios:  01 - NORMAL 02 - MOVIMENTO CARTORIO 03 - EM CARTORIO 04 - TITULO COM OCORRENCIA DE CARTORIO 05 - PROTESTADO ELETRONICO 06 - LIQUIDADO 07 - BAIXADO 08 - TITULO COM PENDENCIA DE CARTORIO 09 - TITULO PROTESTADO MANUAL 10 - TITULO BAIXADO/PAGO EM CARTORIO 11 - TITULO LIQUIDADO/PROTESTADO 12 - TITULO LIQUID/PGCRTO 13 - TITULO PROTESTADO AGUARDANDO BAIXA 14 - TITULO EM LIQUIDACAO 15 - TITULO AGENDADO 16 - TITULO CREDITADO 17 - PAGO EM CHEQUE - AGUARD.LIQUIDACAO 18 - PAGO PARCIALMENTE CREDITADO 80 - EM PROCESSAMENTO (ESTADO TRANSITÓRIO) | [optional]
 **boleto_vencido** | **string**| Indica se o Boleto está vencido ou não. Campo obrigatoriamente MAIÚSCULO. Domínio: S para boletos vencidos N para boletos não vencidos | [optional]
 **indice** | **int**| Somente deve ser utilizado em caso de pesquisas que retornem mais de 300 boletos. Caso o campo RPST \&quot;Indicador Continuidade\&quot; retorne com o valor \&quot;S\&quot;, o usuário deve informar o conteúdo do campo RPST \&quot;Numero Ultimo Registro\&quot; a partir do qual será iniciada nova consulta. | [optional]

### Return type

[**\Swagger\Client\Model\RespostaListaBoletos[]**](../Model/RespostaListaBoletos.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permitirBaixaCancelamentoId**
> \Swagger\Client\Model\RespostaBaixaBoleto permitirBaixaCancelamentoId($body, $authorization, $gw_dev_app_key, $id)

Permitir a baixa/cancelamento de um  título de cobrança.

Permite a baixa/cancelamento de um  título de cobrança.

### Example
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
$body = new \Swagger\Client\Model\RequisicaoBaixaBoleto(); // \Swagger\Client\Model\RequisicaoBaixaBoleto | 
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequisicaoBaixaBoleto**](../Model/RequisicaoBaixaBoleto.md)|  |
 **authorization** | **string**| É um \&quot;token\&quot; de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **id** | **string**| Número do boleto bancário (único e exclusivo) que identifica o título e é usado para pagá-lo. |

### Return type

[**\Swagger\Client\Model\RespostaBaixaBoleto**](../Model/RespostaBaixaBoleto.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

