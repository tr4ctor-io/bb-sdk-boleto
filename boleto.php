<?php

require_once(__DIR__ . '/vendor/autoload.php');

/*******************************************************************************************************
 * Definindo as configurações para o consumo da API Arrecadação Integrada ao PIX do BB.
 * Aqui definimos a URL para autenticação oauth2, a URL de chamada para a API ( temos teste, hmg e prd)
 * e as credenciais da aplicação, que são obtidas em app.developers.bb.com.br
 * *****************************************************************************************************/

 $config = Swagger\Client\Configuration::getDefaultConfiguration();
 $config->setAmbienteBB("T"); // em ambiente T usamos gw-dev-app-key nas requisições, em ambiente P, usamos gw-app-key.

//$config->setHost("https://api.hm.bb.com.br/pix/v2"); // HOST BB HMG 1
$config->setHost("https://api.hm.bb.com.br/cobrancas/v2");

 $config->setUrlAutenticacaoOauth2("https://oauth.hm.bb.com.br/oauth/token"); //URL OAUTH BB
 //$config->setUrlAutenticacaoOauth2("https://oauth.hm.bb.com.br/oauth/token");  //URL OAUTH BB
 //$config->setUrlAutenticacaoOauth2("https://oauth.hm.bb.com.br/oauth/token");  //URL OAUTH BB PRD

 //developer_application_key
 $config->setChaveAplicacaoBB("2e7b3c854336d5e8acab2772927cfffb");
 //client_id
 $config->setUsername("eyJpZCI6ImQ3NWRkOWYtYjY1OC00NWU1LSIsImNvZGlnb1B1YmxpY2Fkb3IiOjAsImNvZGlnb1NvZnR3YXJlIjoxMDEyOTAsInNlcXVlbmNpYWxJbnN0YWxhY2FvIjoxfQ");
 //client_secret
 $config->setPassword("eyJpZCI6ImFmNGU3M2QwLTA4YzMtNGYxNy1hNmQyLTllOTM1MDBiMGJkMSIsImNvZGlnb1B1YmxpY2Fkb3IiOjAsImNvZGlnb1NvZnR3YXJlIjoxMDEyOTAsInNlcXVlbmNpYWxJbnN0YWxhY2FvIjoxLCJzZXF1ZW5jaWFsQ3JlZGVuY2lhbCI6MSwiYW1iaWVudGUiOiJob21vbG9nYWNhbyIsImlhdCI6MTcxOTM2NDE4MDkzOX0");

 /*********************************************************************************************
  * Geração dos certificados que serão enviados para o Banco do Brasil na requisição da API Pix
  * ******************************************************************************************/
 // Você pode utilizar um certificado e-CNPJ emitido por um CA Válida (ou seja, não é aceito
 // certificado auto assinado), com validade superior a um ano. Ex: eCNPJ, Docusign, Digest.
 // https://apoio.developers.bb.com.br/referency/post/5f80a25fd9493f0012973463
 // OpenSSL
 // # Irá extrair a chave publica criptografada do certificado
 // $ openssl pkcs12 -in certificado.pfx -nocerts -out public-crypted.key
 // $ Enter Import Password: <Digite a senha do .pfx aqui>
 // $ Enter PEM pass phrase: <Digite a senha do .pfx aqui>
 // $ Verifying - Enter PEM pass phrase: <Digite a senha do .pfx aqui>
 //
 // # Irá extrair o certificado CRT do arquivo .pfx
 // $ openssl pkcs12 -in certificado.pfx -clcerts -nokeys -out certificado.crt
 // $ Enter Import Password: <Digite a senha do .pfx aqui>
 //
 // # Irá converter a chave publica criptografada para uma chave publica
 // $ openssl rsa -in public-crypted.key -out public.key
 // $ Enter pass phrase for public-crypted.key: <Digite a senha do .pfx aqui>
 // $ writing RSA key
 $config->setPathCerts('/etc/ssl/certs');
 $config->setPathCert('/home/user/certificado.crt');
 $config->setPathKey('/home/user/public.key');

 /*********************************************************************************************
  * Obtendo access token e utilizando no configurador
  * ******************************************************************************************/
 $oauth2Api = new Swagger\Client\Api\Oauth2Api(new GuzzleHttp\Client(), $config);

 try {
     $token = $oauth2Api->gerarAccessToken();
    //  var_dump($token);
     $config->setAccessToken($token);
 } catch (Exception $e) {
     echo 'ERRO->', $e->getMessage(), PHP_EOL;
 }

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken($token);

$client = new GuzzleHttp\Client();

$apiInstance = new Swagger\Client\Api\BoletosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    $client,
    $config
);
$body = new \Swagger\Client\Model\RequisicaoRegistroBoletos(
    [
        'numero_convenio' => '3128557',
        'numero_carteira' => '17',
        'numero_variacao_carteira' => '35',
        'codigo_modalidade' => '1',
        'data_emissao' => '10.12.2024',
        'data_vencimento' => '15.12.2024',
        'valor_original' => '123.45',
        'valor_abatimento' => '12.34',
        'quantidade_dias_protesto' => '0',
        'quantidade_dias_negativacao' => '0',
        'orgao_negativador' => '10',
        'indicador_aceite_titulo_vencido' => 'S',
        'numero_dias_limite_recebimento' => '30',
        'codigo_aceite' => 'A',
        'codigo_tipo_titulo' => '2',
        'descricao_tipo_titulo' => 'DM',
        'indicador_permissao_recebimento_parcial' => 'N',
        'numero_titulo_beneficiario' => '123456',
        'campo_utilizacao_beneficiario' => 'UM TEXTO',
        'numero_titulo_cliente' => '00031285570100223513',
        'mensagem_bloqueto_ocorrencia' => 'Outro texto',
        'desconto' => new Swagger\Client\Model\RequisicaoRegistroBoletosDesconto(
            [
                'tipo' => '2',
                'data_expiracao' => '15.12.2024',
                'porcentagem' => '5.00'
            ]
        ),
        // 'segundo_desconto' => '',
        // 'terceiro_desconto' => '',
        'juros_mora' => new Swagger\Client\Model\RequisicaoRegistroBoletosJurosMora(
            [
                'tipo' => '2',
                'porcentagem' => '1.00'
            ]
        ),
        'multa' => new Swagger\Client\Model\RequisicaoRegistroBoletosMulta(
            [
                'tipo' => '2',
                'data' => '16.12.2024',
                'porcentagem' => '5.00'
            ]
        ),
        'pagador' => new Swagger\Client\Model\RequisicaoRegistroBoletosPagador(
            [
                "tipo_inscricao" => "1",
                "numero_inscricao" => "97965940132",
                "nome" => "Odorico Paraguassu",
                "endereco" => "Avenida Dias Gomes 1970",
                "cep" => "77458000",
                "cidade" => "Sucupira",
                "bairro" => "Centro",
                "uf" => "TO",
                "telefone" => "63987654321"
            ]
        ),
        'beneficiario_final' => new Swagger\Client\Model\RequisicaoRegistroBoletosBeneficiarioFinal(
            [
                'tipo_inscricao' => '2',
                'numero_inscricao' => '98959112000179',
                'nome' => 'Dirceu Borboleta'
            ]
        ),
        'indicador_pix' => 'S',
    ]
); // \Swagger\Client\Model\RequisicaoRegistroBoletos |
$authorization = $token; // string | É um \"token\" de acesso fornecido pelo OAuth 2.0. Ex: Bearer [ACCESS_TOKEN]
$gw_dev_app_key = "2e7b3c854336d5e8acab2772927cfffb"; // string | É a chave de acesso do aplicativo do desenvolvedor utilizada em produção, obtida no Portal do Desenvolvedor. Essa chave será usada para identificação do aplicativo.  Para os testes em ambiente de homologação, trocar por gw-app-key.  Ex: 0021239456d80136bebf005056891bed. CAMPO OBRIGATÓRIO.

try {
    $result = $apiInstance->incluiBoletoBancarioId(
        $body,
        $authorization,
        $gw_dev_app_key
    );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletosApi->incluiBoletoBancarioId: ', $e->getMessage(), PHP_EOL;
}
?>
