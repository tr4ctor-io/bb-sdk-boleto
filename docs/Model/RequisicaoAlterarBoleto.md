# RequisicaoAlterarBoleto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numero_convenio** | **int** | Identificador determinado pelo sistema de boleto bancário para fornecer a emissão e liquidação do boleto e, portanto, usado para creditar o Beneficiário. | [optional] 
**indicador_nova_data_vencimento** | **string** | Indica a intenção de atribuir nova data de vencimento ao boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_data** | [**\Swagger\Client\Model\AlteracaoData**](AlteracaoData.md) |  | [optional] 
**indicador_novo_valor_nominal** | **string** | Indica a intenção de alterar valor nominal do boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_valor** | [**\Swagger\Client\Model\AlterarValorNominal**](AlterarValorNominal.md) |  | [optional] 
**indicador_atribuir_desconto** | **string** | Indica a intenção de atribuir desconto ao boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**desconto** | [**\Swagger\Client\Model\Desconto**](Desconto.md) |  | [optional] 
**indicador_alterar_desconto** | **string** | Indica a intenção de alterar desconto do boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_desconto** | [**\Swagger\Client\Model\AlteracaoDesconto**](AlteracaoDesconto.md) |  | [optional] 
**indicador_alterar_data_desconto** | **string** | Indica a intenção de alterar a data do desconto do boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_data_desconto** | [**\Swagger\Client\Model\AlteracaoDataDesconto**](AlteracaoDataDesconto.md) |  | [optional] 
**indicador_protestar** | **string** | Indica a intenção de protestar o boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**protesto** | [**\Swagger\Client\Model\Protesto**](Protesto.md) |  | [optional] 
**indicador_sustacao_protesto** | **string** | Indica a intenção de sustar/cancelar um comando de protesto do boleto que já tenha sido processado pelo Banco. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar. | 
**indicador_cancelar_protesto** | **string** | Deve ser utilizada para cancelar uma instrução de protesto enviada ao Banco na mesma data ou que ainda não tenha sido processada pelo Banco. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**indicador_incluir_abatimento** | **string** | Indica a intenção de incluir abatimento no boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**abatimento** | [**\Swagger\Client\Model\Abatimento**](Abatimento.md) |  | [optional] 
**indicador_alterar_abatimento** | **string** | Indica a intenção de alterar o valor do abatimento no boleto. Domínio: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_abatimento** | [**\Swagger\Client\Model\AlteracaoAbatimento**](AlteracaoAbatimento.md) |  | [optional] 
**indicador_cobrar_juros** | **string** | Indica a intenção de cobrar juros no boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**juros** | [**\Swagger\Client\Model\Juros**](Juros.md) |  | [optional] 
**indicador_dispensar_juros** | **string** | Indica a intenção de dispensar juros no boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**indicador_cobrar_multa** | **string** | Indica a intenção de cobrar multa no boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**multa** | [**\Swagger\Client\Model\Multa**](Multa.md) |  | [optional] 
**indicador_dispensar_multa** | **string** | Indica a intenção de dispensar cobrança de multa no boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**indicador_negativar** | **string** | Indica a intenção de negativar ou cancelar negativação boleto. (Inclusão ou Cancelamento) Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**negativacao** | [**\Swagger\Client\Model\Negativacao**](Negativacao.md) |  | [optional] 
**indicador_alterar_seu_numero** | **string** | Indica a intenção de alterar Seu Numero no boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_seu_numero** | [**\Swagger\Client\Model\AlteracaoSeuNumero**](AlteracaoSeuNumero.md) |  | [optional] 
**indicador_alterar_endereco_pagador** | **string** | Indica a intenção de alterar endereço do Pagador no boleto. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_endereco** | [**\Swagger\Client\Model\AlteracaoEndereco**](AlteracaoEndereco.md) |  | [optional] 
**indicador_alterar_prazo_boleto_vencido** | **string** | Indica a intenção de prazo de aceite de boleto vencido. Valores a informar: \&quot;S\&quot; -&gt; Sim, desejo alterar \&quot;N\&quot; -&gt; Não, não desejo alterar | 
**alteracao_prazo** | [**\Swagger\Client\Model\AlteracaoPrazo**](AlteracaoPrazo.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

