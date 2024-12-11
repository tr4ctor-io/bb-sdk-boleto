# RespostaListaBoletosBoletos

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numero_boleto_bb** | **string** | Número de identificação do boleto (correspondente ao NOSSO NÚMERO), no formato STRING, com 20 dígitos. Corresponde aos campos numeroTituloCliente (requisição do registro do boleto), numero (resposta do registro) e id (detalhamento do boleto). | [optional] 
**estado_titulo_cobranca** | **string** | Texto da situação atual do boleto.  Possíveis valores de retorno: - NORMAL   - MOVIMENTO CARTORIO - EM CARTORIO - TITULO COM OCORRENCIA DE CARTORIO - PROTESTADO ELETRONICO  - LIQUIDADO    - BAIXADO  - TITULO COM PENDENCIA DE CARTORIO  - TITULO PROTESTADO MANUAL | [optional] 
**data_registro** | **string** | Data de registro do boleto. | [optional] 
**data_vencimento** | **string** | Data de vencimento do boleto | [optional] 
**data_movimento** | **string** | Data do evento que baixou, protestou ou liquidou o boleto. No caso de títulos vigentes, ainda que vencidos, equivale a data de registro. | [optional] 
**valor_original** | **float** | Valor do boleto no registro. | [optional] 
**valor_atual** | **float** | Valor atualizado do boleto. | [optional] 
**valor_pago** | **float** | Valor pago pelo pagador/sacado. | [optional] 
**contrato** | **int** | Código do contrato entre o Banco do Brasil e a empresa cliente. | [optional] 
**carteira_convenio** | **int** | Número da carteira do convênio de cobrança. | [optional] 
**variacao_carteira_convenio** | **int** | Número da variação da carteira do convênio de cobrança. | [optional] 
**codigo_estado_titulo_cobranca** | **int** | Código da situação atual do boleto:  Domínios: 01 - NORMAL   02 - MOVIMENTO CARTORIO 03 - EM CARTORIO 04 - TITULO COM OCORRENCIA DE CARTORIO 05 - PROTESTADO ELETRONICO  06 - LIQUIDADO    07 - BAIXADO  08 - TITULO COM PENDENCIA DE CARTORIO  09 - TITULO PROTESTADO MANUAL | [optional] 
**data_credito** | **string** | Data do crédito dos valores ao beneficiário | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

