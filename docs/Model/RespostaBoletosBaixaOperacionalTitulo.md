# RespostaBoletosBaixaOperacionalTitulo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), cujo conteúdo é composto de: \&quot;000\&quot; + (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). | [optional]
**estado_baixa_operacional** | **int** | Código para identificar o estado da baixa operacional.  Domínio: 1 - BAIXA OPERACIONAL BB 2 - BAIXA OPERACIONAL OUTROS BANCOS 10- CANCELAMENTO DE BAIXA OPERACIONAL | [optional]
**modalidade** | **int** | Código para identificar a característica dos boletos dentro das modalidades de cobrança existentes no banco.  Domínio: 1 - SIMPLES 4 - VINCULADA | [optional]
**data_registro** | **string** | Data a qual foi efetuado o registro do boleto na CIP. | [optional]
**data_vencimento** | **string** | Data de vencimento do boleto. | [optional]
**valor_original** | **double** | Valor original do boleto indicado quando do registro. | [optional]
**agendamento_pagamento** | [**\Swagger\Client\Boleto\Model\RespostaBoletosBaixaOperacionalTituloAgendamentoPagamento**](RespostaBoletosBaixaOperacionalTituloAgendamentoPagamento.md) |  | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
