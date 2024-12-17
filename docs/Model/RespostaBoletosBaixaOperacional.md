# RespostaBoletosBaixaOperacional

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**possui_mais_titulos** | **string** | Indicador de que a consulta resultou em uma quantidade superior a 650 boletos (capacidade de resposta por requisição ao serviço).  Se indicador igual a \&quot;S\&quot;, uma nova requisição, nos mesmos moldes, poderá ser feita para consultar o restante dos boletos. Nesse caso, na próxima consulta, o valor do campo \&quot;proximoTitulo\&quot; deverá ser informado no campo \&quot;idProximoTitulo\&quot;. | [optional]
**proximo_titulo** | **string** | Número do último registro apresentado pela lista, que poderá ser utilizado como parâmetro inicial de uma nova requisição para consultar os boletos restantes. | [optional]
**lista** | [**\Swagger\Client\Boleto\Model\RespostaBoletosBaixaOperacionalLista[]**](RespostaBoletosBaixaOperacionalLista.md) | Lista de registros que atendam a consulta. |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
