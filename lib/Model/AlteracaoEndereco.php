<?php
/**
 * AlteracaoEndereco
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

namespace Swagger\Client\Boleto\Model;

use \ArrayAccess;
use \Swagger\Client\Boleto\ObjectSerializer;

/**
 * AlteracaoEndereco Class Doc Comment
 *
 * @category Class
 * @description Alteração de dados do Endereço do Pagador em Boleto bancário
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlteracaoEndereco implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'alteracaoEndereco';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'endereco_pagador' => 'string',
        'bairro_pagador' => 'string',
        'cidade_pagador' => 'string',
        'uf_pagador' => 'string',
        'cep_pagador' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'endereco_pagador' => null,
        'bairro_pagador' => null,
        'cidade_pagador' => null,
        'uf_pagador' => null,
        'cep_pagador' => 'int32'
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
        'endereco_pagador' => 'enderecoPagador',
        'bairro_pagador' => 'bairroPagador',
        'cidade_pagador' => 'cidadePagador',
        'uf_pagador' => 'UFPagador',
        'cep_pagador' => 'CEPPagador'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'endereco_pagador' => 'setEnderecoPagador',
        'bairro_pagador' => 'setBairroPagador',
        'cidade_pagador' => 'setCidadePagador',
        'uf_pagador' => 'setUfPagador',
        'cep_pagador' => 'setCepPagador'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'endereco_pagador' => 'getEnderecoPagador',
        'bairro_pagador' => 'getBairroPagador',
        'cidade_pagador' => 'getCidadePagador',
        'uf_pagador' => 'getUfPagador',
        'cep_pagador' => 'getCepPagador'
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
        $this->container['endereco_pagador'] = isset($data['endereco_pagador']) ? $data['endereco_pagador'] : null;
        $this->container['bairro_pagador'] = isset($data['bairro_pagador']) ? $data['bairro_pagador'] : null;
        $this->container['cidade_pagador'] = isset($data['cidade_pagador']) ? $data['cidade_pagador'] : null;
        $this->container['uf_pagador'] = isset($data['uf_pagador']) ? $data['uf_pagador'] : null;
        $this->container['cep_pagador'] = isset($data['cep_pagador']) ? $data['cep_pagador'] : null;
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
     * Gets endereco_pagador
     *
     * @return string
     */
    public function getEnderecoPagador()
    {
        return $this->container['endereco_pagador'];
    }

    /**
     * Sets endereco_pagador
     *
     * @param string $endereco_pagador Endereço do Pagador
     *
     * @return $this
     */
    public function setEnderecoPagador($endereco_pagador)
    {
        $this->container['endereco_pagador'] = $endereco_pagador;

        return $this;
    }

    /**
     * Gets bairro_pagador
     *
     * @return string
     */
    public function getBairroPagador()
    {
        return $this->container['bairro_pagador'];
    }

    /**
     * Sets bairro_pagador
     *
     * @param string $bairro_pagador Bairro do Pagador
     *
     * @return $this
     */
    public function setBairroPagador($bairro_pagador)
    {
        $this->container['bairro_pagador'] = $bairro_pagador;

        return $this;
    }

    /**
     * Gets cidade_pagador
     *
     * @return string
     */
    public function getCidadePagador()
    {
        return $this->container['cidade_pagador'];
    }

    /**
     * Sets cidade_pagador
     *
     * @param string $cidade_pagador Cidade do Pagador
     *
     * @return $this
     */
    public function setCidadePagador($cidade_pagador)
    {
        $this->container['cidade_pagador'] = $cidade_pagador;

        return $this;
    }

    /**
     * Gets uf_pagador
     *
     * @return string
     */
    public function getUfPagador()
    {
        return $this->container['uf_pagador'];
    }

    /**
     * Sets uf_pagador
     *
     * @param string $uf_pagador UF do Pagador
     *
     * @return $this
     */
    public function setUfPagador($uf_pagador)
    {
        $this->container['uf_pagador'] = $uf_pagador;

        return $this;
    }

    /**
     * Gets cep_pagador
     *
     * @return int
     */
    public function getCepPagador()
    {
        return $this->container['cep_pagador'];
    }

    /**
     * Sets cep_pagador
     *
     * @param int $cep_pagador CEP do Pagador
     *
     * @return $this
     */
    public function setCepPagador($cep_pagador)
    {
        $this->container['cep_pagador'] = $cep_pagador;

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
