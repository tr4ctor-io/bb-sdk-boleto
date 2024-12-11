# RequisicaoRegistroBoletosMulta

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tipo** | **int** | Como a multa será concedida, inteiro &gt;&#x3D; 0.  Domínios:  0 - DISPENSAR;  1 - VALOR DIA ATRASO;  2 - TAXA MENSAL;  3 - ISENTO. | [optional] 
**data** | **string** | Se tipo &gt; 0, Definir uma data de multa, no formato \&quot;dd.mm.aaaa\&quot; | [optional] 
**porcentagem** | **float** | Se tipo &#x3D; 2,  definir porcentagem &gt;&#x3D;  0.00 (formato decimal separado por \&quot;.\&quot;). | [optional] 
**valor** | **float** | Se tipo &#x3D; 1, definir valor do juros &gt;&#x3D;  0.00 (formato decimal separado por \&quot;.\&quot;). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

