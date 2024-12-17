<?php
/**
 * RequisicaoRegistroBoletosSegundoDesconto
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

namespace Swagger\Client\ModelBoletoBB;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * RequisicaoRegistroBoletosSegundoDesconto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequisicaoRegistroBoletosSegundoDesconto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequisicaoRegistroBoletos_segundoDesconto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_expiracao' => 'string',
        'porcentagem' => 'float',
        'valor' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_expiracao' => null,
        'porcentagem' => 'float',
        'valor' => 'float'
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
        'data_expiracao' => 'dataExpiracao',
        'porcentagem' => 'porcentagem',
        'valor' => 'valor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_expiracao' => 'setDataExpiracao',
        'porcentagem' => 'setPorcentagem',
        'valor' => 'setValor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_expiracao' => 'getDataExpiracao',
        'porcentagem' => 'getPorcentagem',
        'valor' => 'getValor'
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
        $this->container['data_expiracao'] = isset($data['data_expiracao']) ? $data['data_expiracao'] : null;
        $this->container['porcentagem'] = isset($data['porcentagem']) ? $data['porcentagem'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
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
     * Gets data_expiracao
     *
     * @return string
     */
    public function getDataExpiracao()
    {
        return $this->container['data_expiracao'];
    }

    /**
     * Sets data_expiracao
     *
     * @param string $data_expiracao Se tipo > 0, Definir uma data de expiração do desconto, no formato \"dd.mm.aaaa\" .
     *
     * @return $this
     */
    public function setDataExpiracao($data_expiracao)
    {
        $this->container['data_expiracao'] = $data_expiracao;

        return $this;
    }

    /**
     * Gets porcentagem
     *
     * @return float
     */
    public function getPorcentagem()
    {
        return $this->container['porcentagem'];
    }

    /**
     * Sets porcentagem
     *
     * @param float $porcentagem Se tipo = 2, definir uma porcentagem de desconto >=  0.00 (formato decimal separado por \".\").
     *
     * @return $this
     */
    public function setPorcentagem($porcentagem)
    {
        $this->container['porcentagem'] = $porcentagem;

        return $this;
    }

    /**
     * Gets valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->container['valor'];
    }

    /**
     * Sets valor
     *
     * @param float $valor Se tipo = 1, definir um valor de desconto >=  0.00 (formato decimal separado por \".\").
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

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