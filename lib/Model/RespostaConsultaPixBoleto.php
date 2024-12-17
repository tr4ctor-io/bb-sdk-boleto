<?php
/**
 * RespostaConsultaPixBoleto
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
 * RespostaConsultaPixBoleto Class Doc Comment
 *
 * @category Class
 * @description Representação dos campos de resposta de uma solicitação de detalhamento de pix vinculado a boleto bancário.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RespostaConsultaPixBoleto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RespostaConsultaPixBoleto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'data_registro_titulo_cobranca' => 'string',
        'agencia_beneficiario' => 'int',
        'conta_beneficiario' => 'int',
        'valor_original_titulo_cobranca' => 'float',
        'validade_titulo_cobranca' => 'string',
        'pix' => '\Swagger\Client\Model\RespostaConsultaPixBoletoPix',
        'qr_code' => '\Swagger\Client\Model\RespostaConsultaPixBoletoQrCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'data_registro_titulo_cobranca' => null,
        'agencia_beneficiario' => null,
        'conta_beneficiario' => null,
        'valor_original_titulo_cobranca' => 'float',
        'validade_titulo_cobranca' => null,
        'pix' => null,
        'qr_code' => null
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
        'id' => 'id',
        'data_registro_titulo_cobranca' => 'dataRegistroTituloCobranca',
        'agencia_beneficiario' => 'agenciaBeneficiario',
        'conta_beneficiario' => 'contaBeneficiario',
        'valor_original_titulo_cobranca' => 'valorOriginalTituloCobranca',
        'validade_titulo_cobranca' => 'validadeTituloCobranca',
        'pix' => 'pix',
        'qr_code' => 'qrCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'data_registro_titulo_cobranca' => 'setDataRegistroTituloCobranca',
        'agencia_beneficiario' => 'setAgenciaBeneficiario',
        'conta_beneficiario' => 'setContaBeneficiario',
        'valor_original_titulo_cobranca' => 'setValorOriginalTituloCobranca',
        'validade_titulo_cobranca' => 'setValidadeTituloCobranca',
        'pix' => 'setPix',
        'qr_code' => 'setQrCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'data_registro_titulo_cobranca' => 'getDataRegistroTituloCobranca',
        'agencia_beneficiario' => 'getAgenciaBeneficiario',
        'conta_beneficiario' => 'getContaBeneficiario',
        'valor_original_titulo_cobranca' => 'getValorOriginalTituloCobranca',
        'validade_titulo_cobranca' => 'getValidadeTituloCobranca',
        'pix' => 'getPix',
        'qr_code' => 'getQrCode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['data_registro_titulo_cobranca'] = isset($data['data_registro_titulo_cobranca']) ? $data['data_registro_titulo_cobranca'] : null;
        $this->container['agencia_beneficiario'] = isset($data['agencia_beneficiario']) ? $data['agencia_beneficiario'] : null;
        $this->container['conta_beneficiario'] = isset($data['conta_beneficiario']) ? $data['conta_beneficiario'] : null;
        $this->container['valor_original_titulo_cobranca'] = isset($data['valor_original_titulo_cobranca']) ? $data['valor_original_titulo_cobranca'] : null;
        $this->container['validade_titulo_cobranca'] = isset($data['validade_titulo_cobranca']) ? $data['validade_titulo_cobranca'] : null;
        $this->container['pix'] = isset($data['pix']) ? $data['pix'] : null;
        $this->container['qr_code'] = isset($data['qr_code']) ? $data['qr_code'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Número de identificação do boleto (correspondente ao NOSSO NÚMERO, numeroTituloCliente), no formato STRING, com 20 dígitos, que deverá ser formatado da seguinte forma:  “000” +  (número do convênio com 7 dígitos) + (10 algarismos - se necessário, completar com zeros à esquerda). Campo Obrigatório.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets data_registro_titulo_cobranca
     *
     * @return string
     */
    public function getDataRegistroTituloCobranca()
    {
        return $this->container['data_registro_titulo_cobranca'];
    }

    /**
     * Sets data_registro_titulo_cobranca
     *
     * @param string $data_registro_titulo_cobranca Data de registro do boleto no banco.
     *
     * @return $this
     */
    public function setDataRegistroTituloCobranca($data_registro_titulo_cobranca)
    {
        $this->container['data_registro_titulo_cobranca'] = $data_registro_titulo_cobranca;

        return $this;
    }

    /**
     * Gets agencia_beneficiario
     *
     * @return int
     */
    public function getAgenciaBeneficiario()
    {
        return $this->container['agencia_beneficiario'];
    }

    /**
     * Sets agencia_beneficiario
     *
     * @param int $agencia_beneficiario Número da agência do beneficiário, sem o dígito verificador.
     *
     * @return $this
     */
    public function setAgenciaBeneficiario($agencia_beneficiario)
    {
        $this->container['agencia_beneficiario'] = $agencia_beneficiario;

        return $this;
    }

    /**
     * Gets conta_beneficiario
     *
     * @return int
     */
    public function getContaBeneficiario()
    {
        return $this->container['conta_beneficiario'];
    }

    /**
     * Sets conta_beneficiario
     *
     * @param int $conta_beneficiario Número da conta do beneficiário, sem o dígito verificador.
     *
     * @return $this
     */
    public function setContaBeneficiario($conta_beneficiario)
    {
        $this->container['conta_beneficiario'] = $conta_beneficiario;

        return $this;
    }

    /**
     * Gets valor_original_titulo_cobranca
     *
     * @return float
     */
    public function getValorOriginalTituloCobranca()
    {
        return $this->container['valor_original_titulo_cobranca'];
    }

    /**
     * Sets valor_original_titulo_cobranca
     *
     * @param float $valor_original_titulo_cobranca Valor original do boleto indicado quando do registro.
     *
     * @return $this
     */
    public function setValorOriginalTituloCobranca($valor_original_titulo_cobranca)
    {
        $this->container['valor_original_titulo_cobranca'] = $valor_original_titulo_cobranca;

        return $this;
    }

    /**
     * Gets validade_titulo_cobranca
     *
     * @return string
     */
    public function getValidadeTituloCobranca()
    {
        return $this->container['validade_titulo_cobranca'];
    }

    /**
     * Sets validade_titulo_cobranca
     *
     * @param string $validade_titulo_cobranca Data de validade do boleto.
     *
     * @return $this
     */
    public function setValidadeTituloCobranca($validade_titulo_cobranca)
    {
        $this->container['validade_titulo_cobranca'] = $validade_titulo_cobranca;

        return $this;
    }

    /**
     * Gets pix
     *
     * @return \Swagger\Client\Model\RespostaConsultaPixBoletoPix
     */
    public function getPix()
    {
        return $this->container['pix'];
    }

    /**
     * Sets pix
     *
     * @param \Swagger\Client\Model\RespostaConsultaPixBoletoPix $pix pix
     *
     * @return $this
     */
    public function setPix($pix)
    {
        $this->container['pix'] = $pix;

        return $this;
    }

    /**
     * Gets qr_code
     *
     * @return \Swagger\Client\Model\RespostaConsultaPixBoletoQrCode
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param \Swagger\Client\Model\RespostaConsultaPixBoletoQrCode $qr_code qr_code
     *
     * @return $this
     */
    public function setQrCode($qr_code)
    {
        $this->container['qr_code'] = $qr_code;

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