# IdListarretornomovimentoBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_movimento_retorno_inicial** | **string** | Data inicial do processamento do movimento de retorno de cobrança de Boleto. | 
**data_movimento_retorno_final** | **string** | Data final do processamento do movimento de retorno de cobrança de Boleto. | 
**codigo_prefixo_agencia** | **int** | Código do prefixo identificador de uma dependência do Banco. | [optional] 
**numero_conta_corrente** | **int** | Número identificador de uma Conta Corrente contratada pelo cliente junto ao Banco do Brasil. | [optional] 
**numero_carteira_cobranca** | **int** | Número identificador da carteira de Cobrança. Indica o tipo de serviço de cobrança, para o qual são aplicadas regras específicas. | [optional] 
**numero_variacao_carteira_cobranca** | **int** | Número identificador da variação da Carteira de Cobrança. Identifica cada grupo de condições específicas (variação) para um mesmo tipo de serviço de cobrança contratado pelo cliente (carteira), visando separar os títulos de cobrança de acordo com os interesses do próprio cliente e previamente negociados com o Banco. | [optional] 
**numero_registro_pretendido** | **int** | Número do registro ou da página que deseja buscar na consulta. Quando primeira chamada, informar \&quot;001\&quot; | [optional] 
**quantidade_registro_pretendido** | **int** | Quantidade de registros ou páginas que desejar buscar na consulta. Quantidade máxima de 10000 boletos por chamada | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

