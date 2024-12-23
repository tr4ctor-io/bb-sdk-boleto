<?php
/**
 * RequisicaoRegistroBoletosPagador
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
 * RequisicaoRegistroBoletosPagador Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequisicaoRegistroBoletosPagador implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequisicaoRegistroBoletos_pagador';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tipo_inscricao' => 'int',
        'numero_inscricao' => 'int',
        'nome' => 'string',
        'endereco' => 'string',
        'cep' => 'int',
        'cidade' => 'string',
        'bairro' => 'string',
        'uf' => 'string',
        'telefone' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tipo_inscricao' => 'int32',
        'numero_inscricao' => 'int64',
        'nome' => null,
        'endereco' => null,
        'cep' => 'int32',
        'cidade' => null,
        'bairro' => null,
        'uf' => null,
        'telefone' => null,
        'email' => null
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
        'tipo_inscricao' => 'tipoInscricao',
        'numero_inscricao' => 'numeroInscricao',
        'nome' => 'nome',
        'endereco' => 'endereco',
        'cep' => 'cep',
        'cidade' => 'cidade',
        'bairro' => 'bairro',
        'uf' => 'uf',
        'telefone' => 'telefone',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tipo_inscricao' => 'setTipoInscricao',
        'numero_inscricao' => 'setNumeroInscricao',
        'nome' => 'setNome',
        'endereco' => 'setEndereco',
        'cep' => 'setCep',
        'cidade' => 'setCidade',
        'bairro' => 'setBairro',
        'uf' => 'setUf',
        'telefone' => 'setTelefone',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tipo_inscricao' => 'getTipoInscricao',
        'numero_inscricao' => 'getNumeroInscricao',
        'nome' => 'getNome',
        'endereco' => 'getEndereco',
        'cep' => 'getCep',
        'cidade' => 'getCidade',
        'bairro' => 'getBairro',
        'uf' => 'getUf',
        'telefone' => 'getTelefone',
        'email' => 'getEmail'
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
        $this->container['tipo_inscricao'] = isset($data['tipo_inscricao']) ? $data['tipo_inscricao'] : null;
        $this->container['numero_inscricao'] = isset($data['numero_inscricao']) ? $data['numero_inscricao'] : null;
        $this->container['nome'] = isset($data['nome']) ? $data['nome'] : null;
        $this->container['endereco'] = isset($data['endereco']) ? $data['endereco'] : null;
        $this->container['cep'] = isset($data['cep']) ? $data['cep'] : null;
        $this->container['cidade'] = isset($data['cidade']) ? $data['cidade'] : null;
        $this->container['bairro'] = isset($data['bairro']) ? $data['bairro'] : null;
        $this->container['uf'] = isset($data['uf']) ? $data['uf'] : null;
        $this->container['telefone'] = isset($data['telefone']) ? $data['telefone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tipo_inscricao'] === null) {
            $invalidProperties[] = "'tipo_inscricao' can't be null";
        }
        if ($this->container['numero_inscricao'] === null) {
            $invalidProperties[] = "'numero_inscricao' can't be null";
        }
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
     * Gets tipo_inscricao
     *
     * @return int
     */
    public function getTipoInscricao()
    {
        return $this->container['tipo_inscricao'];
    }

    /**
     * Sets tipo_inscricao
     *
     * @param int $tipo_inscricao Código que identifica o tipo de inscrição do Pagador.  Domínios: 1 - CPF; 2 - CNPJ
     *
     * @return $this
     */
    public function setTipoInscricao($tipo_inscricao)
    {
        $this->container['tipo_inscricao'] = $tipo_inscricao;

        return $this;
    }

    /**
     * Gets numero_inscricao
     *
     * @return int
     */
    public function getNumeroInscricao()
    {
        return $this->container['numero_inscricao'];
    }

    /**
     * Sets numero_inscricao
     *
     * @param int $numero_inscricao Número de inscrição do pagador.  Para o tipo = 1, informar numero do CPF.  Para o tipo = 2, informar numero do CNPJ.
     *
     * @return $this
     */
    public function setNumeroInscricao($numero_inscricao)
    {
        $this->container['numero_inscricao'] = $numero_inscricao;

        return $this;
    }

    /**
     * Gets nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->container['nome'];
    }

    /**
     * Sets nome
     *
     * @param string $nome Nome do pagador.
     *
     * @return $this
     */
    public function setNome($nome)
    {
        $this->container['nome'] = $nome;

        return $this;
    }

    /**
     * Gets endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->container['endereco'];
    }

    /**
     * Sets endereco
     *
     * @param string $endereco Endereço do pagador.
     *
     * @return $this
     */
    public function setEndereco($endereco)
    {
        $this->container['endereco'] = $endereco;

        return $this;
    }

    /**
     * Gets cep
     *
     * @return int
     */
    public function getCep()
    {
        return $this->container['cep'];
    }

    /**
     * Sets cep
     *
     * @param int $cep Código postal do pagador.
     *
     * @return $this
     */
    public function setCep($cep)
    {
        $this->container['cep'] = $cep;

        return $this;
    }

    /**
     * Gets cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->container['cidade'];
    }

    /**
     * Sets cidade
     *
     * @param string $cidade Cidade do pagador.
     *
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->container['cidade'] = $cidade;

        return $this;
    }

    /**
     * Gets bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->container['bairro'];
    }

    /**
     * Sets bairro
     *
     * @param string $bairro Bairro do pagador.
     *
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->container['bairro'] = $bairro;

        return $this;
    }

    /**
     * Gets uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string $uf Sigla do unidade federativa em que o pagador vive.
     *
     * @return $this
     */
    public function setUf($uf)
    {
        $this->container['uf'] = $uf;

        return $this;
    }

    /**
     * Gets telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->container['telefone'];
    }

    /**
     * Sets telefone
     *
     * @param string $telefone Número de telefone do pagador.
     *
     * @return $this
     */
    public function setTelefone($telefone)
    {
        $this->container['telefone'] = $telefone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email do pagador.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
