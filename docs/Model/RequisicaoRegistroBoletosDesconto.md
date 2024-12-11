# RequisicaoRegistroBoletosDesconto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tipo** | **int** | Como o desconto será concedido, inteiro &gt;&#x3D; 0. Domínios:  0 - SEM DESCONTO; 1 - VLR FIXO ATE A DATA INFORMADA; 2 - PERCENTUAL ATE A DATA INFORMADA;  3 - DESCONTO POR DIA DE ANTECIPACAO. | [optional] 
**data_expiracao** | **string** | Se tipo &gt; 0, Definir uma data de expiração do desconto, no formato \&quot;dd.mm.aaaa\&quot;. | [optional] 
**porcentagem** | **float** | Se tipo &#x3D; 2, definir uma porcentagem de desconto &gt;&#x3D;  0.00 (formato decimal separado por \&quot;.\&quot;). | [optional] 
**valor** | **float** | Se tipo &#x3D; 1, definir um valor de desconto &gt;&#x3D;  0.00 (formato decimal separado por \&quot;.\&quot;). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

