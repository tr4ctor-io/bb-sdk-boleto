# RespostaBoletosBaixaOperacionalTituloAgendamentoPagamento

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**momento** | **string** | Data e hora no qual foi agendado o recebimento/pagamento do título. Atenção! Trata-se apenas de uma promessa de pagamento que poderá ser cancelada ou não efetivada. | [optional] 
**instituicao_financeira** | **int** | Código de compensação bancária do SFN. Domínio: https://www.bcb.gov.br/Fis/CODCOMPE/Tabela.pdf | [optional] 
**canal** | **int** | Código para identificação da forma de pagamento e do canal onde foi pago o boleto.  Domínio: 1 - Agencias - Postos tradicionais 2 - Terminal de Auto-atendimento 3 - Internet (home / office banking) 4 - Pix 5 - Correspondente bancário 6 - Central de atendimento(Call Center) 7 - Arquivo Eletrônico 8 - DDA 9 - Correspondente bancário digital | [optional] 
**valor_cip** | **double** | Valor do pagamento agendado na Câmara Interbancária de Pagamentos - CIP, conforme informado na baixa operacional. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

