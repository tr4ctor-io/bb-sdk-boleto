# RequisicaoRegistroBoletos

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numero_convenio** | **int** | Número do convênio de Cobrança do Cliente. Identificador determinado pelo sistema Cobrança para controlar a emissão de boletos, liquidação, crédito de valores ao Beneficiário e intercâmbio de dados com o cliente. |
**numero_carteira** | **int** | Características do serviço de boleto bancário e como ele deve ser tratado pelo banco. | [optional]
**numero_variacao_carteira** | **int** | Número da variação da carteira do convênio de cobrança. | [optional]
**codigo_modalidade** | **int** | Identifica  a característica dos boletos dentro das modalidades de cobrança existentes no banco.  Domínio: 01 - SIMPLES; 04 - VINCULADA | [optional]
**data_emissao** | **string** | Data de emissão do boleto (formato \&quot;dd.mm.aaaaa\&quot;). | [optional]
**data_vencimento** | **string** | Data de vencimento do boleto (formato \&quot;dd.mm.aaaaa\&quot;). |
**valor_original** | **float** | Valor de cobrança &gt; 0.00, emitido em Real (formato decimal separado por \&quot;.\&quot;). Valor do boleto no registro. Deve ser maior que a soma dos campos “VALOR DO DESCONTO DO TÍTULO” e “VALOR DO ABATIMENTO DO TÍTULO”, se informados. Informação não passível de alteração após a criação. No caso de emissão com valor equivocado, sugerimos cancelar e emitir novo boleto. |
**valor_abatimento** | **float** | Valor de dedução do boleto &gt;&#x3D; 0.00 (formato decimal separado por \&quot;.\&quot;). | [optional]
**quantidade_dias_protesto** | **float** | Quantos dias após a data de vencimento do boleto para iniciar o processo de cobrança através de protesto. (valor inteiro &gt;&#x3D; 0). | [optional]
**quantidade_dias_negativacao** | **int** | Quantos dias após a data de vencimento do boleto para iniciar o processo de negativação através da opção escolhida no campo orgaoNegativador. (valor inteiro &gt;&#x3D; 0). | [optional]
**orgao_negativador** | **int** | Código do Órgão Negativador.  Domínio: 10 - SERASA | [optional]
**indicador_aceite_titulo_vencido** | **string** | Indicador de que o boleto pode ou não ser recebido após o vencimento. Campo não obrigatório  Se não informado, será assumido a informação de limite de recebimento que está definida no convênio.  Quando informado \&quot;S\&quot; em conjunto com o campo \&quot;numeroDiasLimiteRecebimento\&quot;, será definido a quantidade de dias (corridos) que este boleto ficará disponível para pagamento após seu vencimento. Obs.: Se definido \&quot;S\&quot; e o campo \&quot;numeroDiasLimiteRecebimento\&quot; ficar com valor zero também será assumido a informação de limite de recebimento que está definida no convênio.  Quando informado \&quot;N\&quot;, fica definindo que o boleto NÃO permite pagamento em atraso, portanto só aceitará pagamento até a data do vencimento ou o próximo dia útil, quando o vencimento ocorrer em dia não útil.  Quando informado qualquer valor diferente de \&quot;S\&quot; ou \&quot;N\&quot; será assumido a informação de limite de recebimento que está definida no convênio. | [optional]
**numero_dias_limite_recebimento** | **int** | Número de dias limite para recebimento. Informar valor inteiro &gt; 0. | [optional]
**codigo_aceite** | **string** | Código para  identificar se o boleto de cobrança foi aceito (reconhecimento da dívida pelo Pagador).  Domínios: A - ACEITE N - NAO ACEITE | [optional]
**codigo_tipo_titulo** | **int** | Código para identificar o tipo de boleto de cobrança.  Domínios: 1- CHEQUE 2- DUPLICATA MERCANTIL 3- DUPLICATA MTIL POR INDICACAO 4- DUPLICATA DE SERVICO 5- DUPLICATA DE SRVC P/INDICACAO 6- DUPLICATA RURAL 7- LETRA DE CAMBIO 8- NOTA DE CREDITO COMERCIAL 9- NOTA DE CREDITO A EXPORTACAO 10- NOTA DE CREDITO INDULTRIAL 11- NOTA DE CREDITO RURAL 12- NOTA PROMISSORIA 13- NOTA PROMISSORIA RURAL 14- TRIPLICATA MERCANTIL 15- TRIPLICATA DE SERVICO 16- NOTA DE SEGURO 17- RECIBO 18- FATURA 19- NOTA DE DEBITO 20- APOLICE DE SEGURO 21- MENSALIDADE ESCOLAR 22- PARCELA DE CONSORCIO 23- DIVIDA ATIVA DA UNIAO 24- DIVIDA ATIVA DE ESTADO 25- DIVIDA ATIVA DE MUNICIPIO 31- CARTAO DE CREDITO 32- BOLETO PROPOSTA 33- BOLETO APORTE 99- OUTROS. | [optional]
**descricao_tipo_titulo** | **string** | Descrição do tipo de boleto. | [optional]
**indicador_permissao_recebimento_parcial** | **string** | Código para identificação da autorização de pagamento parcial do boleto.  Domínios: S - SIM N - NÃO | [optional]
**numero_titulo_beneficiario** | **string** | São aceitos como caracteres válidos:       • caracteres alfanuméricos: A a Z, 0 a 9;       • caracteres especiais de conjunção: hifen (-),apostrofo (&#x27;);            exemplos: D&#x27;EL-REI, D&#x27;ALCORTIVO, SANT&#x27;ANA       • separador de palavras: branco ( );     Obs: Quaisquer caracteres diferentes dos mencionados acima, serão considerados inválidos. | [optional]
**campo_utilizacao_beneficiario** | **string** | Informações adicionais sobre o beneficiário. | [optional]
**numero_titulo_cliente** | **string** | Número de identificação do boleto (correspondente ao NOSSO NÚMERO), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma:  “000” +  (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). | [optional]
**mensagem_bloqueto_ocorrencia** | **string** | Mensagem definida pelo beneficiário para ser impressa no boleto. (Limitado a 30 caracteres) | [optional]
**desconto** | [**\Swagger\Client\Boleto\Model\RequisicaoRegistroBoletosDesconto**](RequisicaoRegistroBoletosDesconto.md) |  | [optional]
**segundo_desconto** | [**\Swagger\Client\Boleto\Model\RequisicaoRegistroBoletosSegundoDesconto**](RequisicaoRegistroBoletosSegundoDesconto.md) |  | [optional]
**terceiro_desconto** | [**\Swagger\Client\Boleto\Model\RequisicaoRegistroBoletosTerceiroDesconto**](RequisicaoRegistroBoletosTerceiroDesconto.md) |  | [optional]
**juros_mora** | [**\Swagger\Client\Boleto\Model\RequisicaoRegistroBoletosJurosMora**](RequisicaoRegistroBoletosJurosMora.md) |  | [optional]
**multa** | [**\Swagger\Client\Boleto\Model\RequisicaoRegistroBoletosMulta**](RequisicaoRegistroBoletosMulta.md) |  | [optional]
**pagador** | [**\Swagger\Client\Boleto\Model\RequisicaoRegistroBoletosPagador**](RequisicaoRegistroBoletosPagador.md) |  | [optional]
**beneficiario_final** | [**\Swagger\Client\Boleto\Model\RequisicaoRegistroBoletosBeneficiarioFinal**](RequisicaoRegistroBoletosBeneficiarioFinal.md) |  | [optional]
**indicador_pix** | **string** | Código para informar se o boleto terá um QRCode Pix atrelado. Se informado caracter inválido,  assumirá &#x27;N&#x27;.  Domínios: &#x27;S&#x27; - QRCODE DINAMICO; &#x27;N&#x27; - SEM PIX; OUTRO - SEM PIX | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
