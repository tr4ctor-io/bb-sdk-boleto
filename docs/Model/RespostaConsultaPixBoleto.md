# RespostaConsultaPixBoleto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma:  “000” +  (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório. | [optional] 
**data_registro_titulo_cobranca** | **string** | Data de registro do boleto no banco. | [optional] 
**agencia_beneficiario** | **int** | Número da agência do beneficiário, sem o dígito verificador. | [optional] 
**conta_beneficiario** | **int** | Número da conta do beneficiário, sem o dígito verificador. | [optional] 
**valor_original_titulo_cobranca** | **float** | Valor original do boleto indicado quando do registro. | [optional] 
**validade_titulo_cobranca** | **string** | Data de validade do boleto. | [optional] 
**pix** | [**\Swagger\Client\Model\RespostaConsultaPixBoletoPix**](RespostaConsultaPixBoletoPix.md) |  | [optional] 
**qr_code** | [**\Swagger\Client\Model\RespostaConsultaPixBoletoQrCode**](RespostaConsultaPixBoletoQrCode.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

