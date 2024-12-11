<?php
/**
 * RespostaRegistroBoletos
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cobranças API
 *
 * API para gerenciar os serviços de cobranças de cliente do Banco do Brasil S.A.
 *
 * OpenAPI spec version: 2.17.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.57
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * RespostaRegistroBoletos Class Doc Comment
 *
 * @category Class
 * @description Representação dos campos de resposta de uma solicitação de criação de boletos bancários.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RespostaRegistroBoletos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RespostaRegistroBoletos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'numero' => 'string',
        'numero_carteira' => 'float',
        'numero_variacao_carteira' => 'float',
        'codigo_cliente' => 'float',
        'linha_digitavel' => 'string',
        'codigo_barra_numerico' => 'string',
        'numero_contrato_cobranca' => 'float',
        'beneficiario' => '\Swagger\Client\Model\RespostaRegistroBoletosBeneficiario',
        'qr_code' => '\Swagger\Client\Model\RespostaRegistroBoletosQrCode',
        'observacao' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'numero' => null,
        'numero_carteira' => null,
        'numero_variacao_carteira' => null,
        'codigo_cliente' => null,
        'linha_digitavel' => null,
        'codigo_barra_numerico' => null,
        'numero_contrato_cobranca' => null,
        'beneficiario' => null,
        'qr_code' => null,
        'observacao' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'numero' => 'numero',
        'numero_carteira' => 'numeroCarteira',
        'numero_variacao_carteira' => 'numeroVariacaoCarteira',
        'codigo_cliente' => 'codigoCliente',
        'linha_digitavel' => 'linhaDigitavel',
        'codigo_barra_numerico' => 'codigoBarraNumerico',
        'numero_contrato_cobranca' => 'numeroContratoCobranca',
        'beneficiario' => 'beneficiario',
        'qr_code' => 'qrCode',
        'observacao' => 'observacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numero' => 'setNumero',
        'numero_carteira' => 'setNumeroCarteira',
        'numero_variacao_carteira' => 'setNumeroVariacaoCarteira',
        'codigo_cliente' => 'setCodigoCliente',
        'linha_digitavel' => 'setLinhaDigitavel',
        'codigo_barra_numerico' => 'setCodigoBarraNumerico',
        'numero_contrato_cobranca' => 'setNumeroContratoCobranca',
        'beneficiario' => 'setBeneficiario',
        'qr_code' => 'setQrCode',
        'observacao' => 'setObservacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numero' => 'getNumero',
        'numero_carteira' => 'getNumeroCarteira',
        'numero_variacao_carteira' => 'getNumeroVariacaoCarteira',
        'codigo_cliente' => 'getCodigoCliente',
        'linha_digitavel' => 'getLinhaDigitavel',
        'codigo_barra_numerico' => 'getCodigoBarraNumerico',
        'numero_contrato_cobranca' => 'getNumeroContratoCobranca',
        'beneficiario' => 'getBeneficiario',
        'qr_code' => 'getQrCode',
        'observacao' => 'getObservacao'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['numero'] = isset($data['numero']) ? $data['numero'] : null;
        $this->container['numero_carteira'] = isset($data['numero_carteira']) ? $data['numero_carteira'] : null;
        $this->container['numero_variacao_carteira'] = isset($data['numero_variacao_carteira']) ? $data['numero_variacao_carteira'] : null;
        $this->container['codigo_cliente'] = isset($data['codigo_cliente']) ? $data['codigo_cliente'] : null;
        $this->container['linha_digitavel'] = isset($data['linha_digitavel']) ? $data['linha_digitavel'] : null;
        $this->container['codigo_barra_numerico'] = isset($data['codigo_barra_numerico']) ? $data['codigo_barra_numerico'] : null;
        $this->container['numero_contrato_cobranca'] = isset($data['numero_contrato_cobranca']) ? $data['numero_contrato_cobranca'] : null;
        $this->container['beneficiario'] = isset($data['beneficiario']) ? $data['beneficiario'] : null;
        $this->container['qr_code'] = isset($data['qr_code']) ? $data['qr_code'] : null;
        $this->container['observacao'] = isset($data['observacao']) ? $data['observacao'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param string $numero Identificador exclusivo do boleto.
     *
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->container['numero'] = $numero;

        return $this;
    }

    /**
     * Gets numero_carteira
     *
     * @return float
     */
    public function getNumeroCarteira()
    {
        return $this->container['numero_carteira'];
    }

    /**
     * Sets numero_carteira
     *
     * @param float $numero_carteira Número da carteira do convênio de cobrança
     *
     * @return $this
     */
    public function setNumeroCarteira($numero_carteira)
    {
        $this->container['numero_carteira'] = $numero_carteira;

        return $this;
    }

    /**
     * Gets numero_variacao_carteira
     *
     * @return float
     */
    public function getNumeroVariacaoCarteira()
    {
        return $this->container['numero_variacao_carteira'];
    }

    /**
     * Sets numero_variacao_carteira
     *
     * @param float $numero_variacao_carteira Número da variação da carteira do convênio de cobrança
     *
     * @return $this
     */
    public function setNumeroVariacaoCarteira($numero_variacao_carteira)
    {
        $this->container['numero_variacao_carteira'] = $numero_variacao_carteira;

        return $this;
    }

    /**
     * Gets codigo_cliente
     *
     * @return float
     */
    public function getCodigoCliente()
    {
        return $this->container['codigo_cliente'];
    }

    /**
     * Sets codigo_cliente
     *
     * @param float $codigo_cliente Identificação do cliente.
     *
     * @return $this
     */
    public function setCodigoCliente($codigo_cliente)
    {
        $this->container['codigo_cliente'] = $codigo_cliente;

        return $this;
    }

    /**
     * Gets linha_digitavel
     *
     * @return string
     */
    public function getLinhaDigitavel()
    {
        return $this->container['linha_digitavel'];
    }

    /**
     * Sets linha_digitavel
     *
     * @param string $linha_digitavel Linha digitável do boleto.
     *
     * @return $this
     */
    public function setLinhaDigitavel($linha_digitavel)
    {
        $this->container['linha_digitavel'] = $linha_digitavel;

        return $this;
    }

    /**
     * Gets codigo_barra_numerico
     *
     * @return string
     */
    public function getCodigoBarraNumerico()
    {
        return $this->container['codigo_barra_numerico'];
    }

    /**
     * Sets codigo_barra_numerico
     *
     * @param string $codigo_barra_numerico Define o código de barras numérico do boleto.
     *
     * @return $this
     */
    public function setCodigoBarraNumerico($codigo_barra_numerico)
    {
        $this->container['codigo_barra_numerico'] = $codigo_barra_numerico;

        return $this;
    }

    /**
     * Gets numero_contrato_cobranca
     *
     * @return float
     */
    public function getNumeroContratoCobranca()
    {
        return $this->container['numero_contrato_cobranca'];
    }

    /**
     * Sets numero_contrato_cobranca
     *
     * @param float $numero_contrato_cobranca Define o número do contrato de cobrança do boleto.
     *
     * @return $this
     */
    public function setNumeroContratoCobranca($numero_contrato_cobranca)
    {
        $this->container['numero_contrato_cobranca'] = $numero_contrato_cobranca;

        return $this;
    }

    /**
     * Gets beneficiario
     *
     * @return \Swagger\Client\Model\RespostaRegistroBoletosBeneficiario
     */
    public function getBeneficiario()
    {
        return $this->container['beneficiario'];
    }

    /**
     * Sets beneficiario
     *
     * @param \Swagger\Client\Model\RespostaRegistroBoletosBeneficiario $beneficiario beneficiario
     *
     * @return $this
     */
    public function setBeneficiario($beneficiario)
    {
        $this->container['beneficiario'] = $beneficiario;

        return $this;
    }

    /**
     * Gets qr_code
     *
     * @return \Swagger\Client\Model\RespostaRegistroBoletosQrCode
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param \Swagger\Client\Model\RespostaRegistroBoletosQrCode $qr_code qr_code
     *
     * @return $this
     */
    public function setQrCode($qr_code)
    {
        $this->container['qr_code'] = $qr_code;

        return $this;
    }

    /**
     * Gets observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->container['observacao'];
    }

    /**
     * Sets observacao
     *
     * @param string $observacao Orienta quanto ao registro do boleto e o não envio por email.
     *
     * @return $this
     */
    public function setObservacao($observacao)
    {
        $this->container['observacao'] = $observacao;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
