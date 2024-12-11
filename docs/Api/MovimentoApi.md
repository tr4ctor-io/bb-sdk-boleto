# Swagger\Client\MovimentoApi

All URIs are relative to *https://api.sandbox.bb.com.br/cobrancas/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postConveniosIdListarRetornoMovimento**](MovimentoApi.md#postconveniosidlistarretornomovimento) | **POST** /convenios/{id}/listar-retorno-movimento | Listar Dados do Retorno do Convênio

# **postConveniosIdListarRetornoMovimento**
> \Swagger\Client\Model\InlineResponse2001 postConveniosIdListarRetornoMovimento($authorization, $gw_dev_app_key, $id, $body)

Listar Dados do Retorno do Convênio

Lista os dados do retorno de movimento do convênio de Cobranças

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MovimentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.
$id = "id_example"; // string | Número identificador do convênio de intercambio de dados em meio eletrônico, pelo qual serão fornecidos os dados dos títulos de um ou mais serviços de cobrança contratados.
$body = new \Swagger\Client\Model\IdListarretornomovimentoBody(); // \Swagger\Client\Model\IdListarretornomovimentoBody | 

try {
    $result = $apiInstance->postConveniosIdListarRetornoMovimento($authorization, $gw_dev_app_key, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovimentoApi->postConveniosIdListarRetornoMovimento: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |
 **id** | **string**| Número identificador do convênio de intercambio de dados em meio eletrônico, pelo qual serão fornecidos os dados dos títulos de um ou mais serviços de cobrança contratados. |
 **body** | [**\Swagger\Client\Model\IdListarretornomovimentoBody**](../Model/IdListarretornomovimentoBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

