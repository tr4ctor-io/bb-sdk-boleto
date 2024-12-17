<?php
/**
 * RespostaConsultaPixBoletoPix
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
 * RespostaConsultaPixBoletoPix Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RespostaConsultaPixBoletoPix implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RespostaConsultaPixBoleto_pix';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valor_recebido' => 'float',
        'timestamp' => 'string',
        'chave' => 'string',
        'texto_retorno' => 'string',
        'id_instituicao_pagador' => 'int',
        'agencia_pagador' => 'int',
        'conta_pagador' => 'int',
        'tipo_pessoa_pagador' => 'int',
        'id_pagador' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'valor_recebido' => 'float',
        'timestamp' => null,
        'chave' => null,
        'texto_retorno' => null,
        'id_instituicao_pagador' => null,
        'agencia_pagador' => null,
        'conta_pagador' => null,
        'tipo_pessoa_pagador' => null,
        'id_pagador' => 'float'
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
        'valor_recebido' => 'valorRecebido',
        'timestamp' => 'timestamp',
        'chave' => 'chave',
        'texto_retorno' => 'textoRetorno',
        'id_instituicao_pagador' => 'idInstituicaoPagador',
        'agencia_pagador' => 'agenciaPagador',
        'conta_pagador' => 'contaPagador',
        'tipo_pessoa_pagador' => 'tipoPessoaPagador',
        'id_pagador' => 'idPagador'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valor_recebido' => 'setValorRecebido',
        'timestamp' => 'setTimestamp',
        'chave' => 'setChave',
        'texto_retorno' => 'setTextoRetorno',
        'id_instituicao_pagador' => 'setIdInstituicaoPagador',
        'agencia_pagador' => 'setAgenciaPagador',
        'conta_pagador' => 'setContaPagador',
        'tipo_pessoa_pagador' => 'setTipoPessoaPagador',
        'id_pagador' => 'setIdPagador'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valor_recebido' => 'getValorRecebido',
        'timestamp' => 'getTimestamp',
        'chave' => 'getChave',
        'texto_retorno' => 'getTextoRetorno',
        'id_instituicao_pagador' => 'getIdInstituicaoPagador',
        'agencia_pagador' => 'getAgenciaPagador',
        'conta_pagador' => 'getContaPagador',
        'tipo_pessoa_pagador' => 'getTipoPessoaPagador',
        'id_pagador' => 'getIdPagador'
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
        $this->container['valor_recebido'] = isset($data['valor_recebido']) ? $data['valor_recebido'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['chave'] = isset($data['chave']) ? $data['chave'] : null;
        $this->container['texto_retorno'] = isset($data['texto_retorno']) ? $data['texto_retorno'] : null;
        $this->container['id_instituicao_pagador'] = isset($data['id_instituicao_pagador']) ? $data['id_instituicao_pagador'] : null;
        $this->container['agencia_pagador'] = isset($data['agencia_pagador']) ? $data['agencia_pagador'] : null;
        $this->container['conta_pagador'] = isset($data['conta_pagador']) ? $data['conta_pagador'] : null;
        $this->container['tipo_pessoa_pagador'] = isset($data['tipo_pessoa_pagador']) ? $data['tipo_pessoa_pagador'] : null;
        $this->container['id_pagador'] = isset($data['id_pagador']) ? $data['id_pagador'] : null;
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
     * Gets valor_recebido
     *
     * @return float
     */
    public function getValorRecebido()
    {
        return $this->container['valor_recebido'];
    }

    /**
     * Sets valor_recebido
     *
     * @param float $valor_recebido Valor recebido via Pix.
     *
     * @return $this
     */
    public function setValorRecebido($valor_recebido)
    {
        $this->container['valor_recebido'] = $valor_recebido;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp Data e hora do recebimento via Pix.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->container['chave'];
    }

    /**
     * Sets chave
     *
     * @param string $chave Código chave do pagador do Pix.
     *
     * @return $this
     */
    public function setChave($chave)
    {
        $this->container['chave'] = $chave;

        return $this;
    }

    /**
     * Gets texto_retorno
     *
     * @return string
     */
    public function getTextoRetorno()
    {
        return $this->container['texto_retorno'];
    }

    /**
     * Sets texto_retorno
     *
     * @param string $texto_retorno Texto da mensagem de retorno do Pix.
     *
     * @return $this
     */
    public function setTextoRetorno($texto_retorno)
    {
        $this->container['texto_retorno'] = $texto_retorno;

        return $this;
    }

    /**
     * Gets id_instituicao_pagador
     *
     * @return int
     */
    public function getIdInstituicaoPagador()
    {
        return $this->container['id_instituicao_pagador'];
    }

    /**
     * Sets id_instituicao_pagador
     *
     * @param int $id_instituicao_pagador Código identificador da instituição do pagador do Pix.
     *
     * @return $this
     */
    public function setIdInstituicaoPagador($id_instituicao_pagador)
    {
        $this->container['id_instituicao_pagador'] = $id_instituicao_pagador;

        return $this;
    }

    /**
     * Gets agencia_pagador
     *
     * @return int
     */
    public function getAgenciaPagador()
    {
        return $this->container['agencia_pagador'];
    }

    /**
     * Sets agencia_pagador
     *
     * @param int $agencia_pagador Prefixo da agência do pagador do Pix.
     *
     * @return $this
     */
    public function setAgenciaPagador($agencia_pagador)
    {
        $this->container['agencia_pagador'] = $agencia_pagador;

        return $this;
    }

    /**
     * Gets conta_pagador
     *
     * @return int
     */
    public function getContaPagador()
    {
        return $this->container['conta_pagador'];
    }

    /**
     * Sets conta_pagador
     *
     * @param int $conta_pagador Número da conta corrente do pagador do Pix.
     *
     * @return $this
     */
    public function setContaPagador($conta_pagador)
    {
        $this->container['conta_pagador'] = $conta_pagador;

        return $this;
    }

    /**
     * Gets tipo_pessoa_pagador
     *
     * @return int
     */
    public function getTipoPessoaPagador()
    {
        return $this->container['tipo_pessoa_pagador'];
    }

    /**
     * Sets tipo_pessoa_pagador
     *
     * @param int $tipo_pessoa_pagador Código do tipo de pessoa do pagador do Pix. Este valor pode ser 1 para Pessoa Física ou 2 para Pessoa Jurídica.
     *
     * @return $this
     */
    public function setTipoPessoaPagador($tipo_pessoa_pagador)
    {
        $this->container['tipo_pessoa_pagador'] = $tipo_pessoa_pagador;

        return $this;
    }

    /**
     * Gets id_pagador
     *
     * @return int
     */
    public function getIdPagador()
    {
        return $this->container['id_pagador'];
    }

    /**
     * Sets id_pagador
     *
     * @param int $id_pagador Número do CPF ou CNPJ do pagador do Pix.
     *
     * @return $this
     */
    public function setIdPagador($id_pagador)
    {
        $this->container['id_pagador'] = $id_pagador;

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