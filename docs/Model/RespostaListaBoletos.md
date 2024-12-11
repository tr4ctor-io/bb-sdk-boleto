# RespostaListaBoletos

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**indicador_continuidade** | **string** | Indicador de que a consulta resultou em uma quantidade superior a 300 boletos (capacidade de resposta por requisição do serviço). Uma nova requisição, nos mesmos moldes, deve ser feita para consultar o restante dos boletos. Para tanto, deverá ser utilizado o valor informado no atributo \&quot;Número Último Registro\&quot; como valor inicial da próxima consulta. | [optional] 
**quantidade_registros** | **int** | Quantidade de boletos que atendem os critérios da requisição. | [optional] 
**proximo_indice** | **int** | Número do último registro apresentado pela lista, que poderá ser utilizado como parâmetro inicial de uma nova requisição para consultar os boletos restantes. | [optional] 
**boletos** | [**\Swagger\Client\Model\RespostaListaBoletosBoletos[]**](RespostaListaBoletosBoletos.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

