# Swagger\Client\ConvnioApi

All URIs are relative to *https://api.sandbox.bb.com.br/cobrancas/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ativarConsultaBaixaOperacional**](ConvnioApi.md#ativarconsultabaixaoperacional) | **PATCH** /convenios/{id}/ativar-consulta-baixa-operacional | Habilitar Consulta de Baixa Operacional
[**desativaConsultaBaixaOperacional**](ConvnioApi.md#desativaconsultabaixaoperacional) | **PATCH** /convenios/{id}/desativar-consulta-baixa-operacional | Desativar Consulta Baixa Operacional

# **ativarConsultaBaixaOperacional**
> \Swagger\Client\Model\InlineResponse2002 ativarConsultaBaixaOperacional($id, $authorization, $gw_dev_app_key)

Habilitar Consulta de Baixa Operacional

Habilita a personalização de convênio, permitindo realizar consulta das informações de baixa operacional de boletos da carteira de cobranças do cliente no mesmo dia.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConvnioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Número do convênio de Cobrança do Cliente
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.

try {
    $result = $apiInstance->ativarConsultaBaixaOperacional($id, $authorization, $gw_dev_app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvnioApi->ativarConsultaBaixaOperacional: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Número do convênio de Cobrança do Cliente |
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **desativaConsultaBaixaOperacional**
> \Swagger\Client\Model\InlineResponse2002 desativaConsultaBaixaOperacional($id, $authorization, $gw_dev_app_key)

Desativar Consulta Baixa Operacional

Desativa a personalização de convênio, não permitindo realizar consulta das informações de baixa operacional de boletos da carteira de cobranças do cliente no mesmo dia.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConvnioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Número do convênio de Cobrança do Cliente
$authorization = "authorization_example"; // string | É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "gw_dev_app_key_example"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.

try {
    $result = $apiInstance->desativaConsultaBaixaOperacional($id, $authorization, $gw_dev_app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvnioApi->desativaConsultaBaixaOperacional: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Número do convênio de Cobrança do Cliente |
 **authorization** | **string**| É um “token” de acesso fornecido pelo OAuth 2.0.Example: Bearer [ACCESS_TOKEN] |
 **gw_dev_app_key** | **string**| É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.Para os testes em ambiente de homologação, trocar por gw-app-key. Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

