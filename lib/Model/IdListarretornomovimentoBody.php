<?php
/**
 * IdListarretornomovimentoBody
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
 * IdListarretornomovimentoBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdListarretornomovimentoBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'id_listarretornomovimento_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_movimento_retorno_inicial' => 'string',
        'data_movimento_retorno_final' => 'string',
        'codigo_prefixo_agencia' => 'int',
        'numero_conta_corrente' => 'int',
        'numero_carteira_cobranca' => 'int',
        'numero_variacao_carteira_cobranca' => 'int',
        'numero_registro_pretendido' => 'int',
        'quantidade_registro_pretendido' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_movimento_retorno_inicial' => null,
        'data_movimento_retorno_final' => null,
        'codigo_prefixo_agencia' => 'int64',
        'numero_conta_corrente' => 'int64',
        'numero_carteira_cobranca' => 'int32',
        'numero_variacao_carteira_cobranca' => 'int32',
        'numero_registro_pretendido' => 'int64',
        'quantidade_registro_pretendido' => 'int64'
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
        'data_movimento_retorno_inicial' => 'dataMovimentoRetornoInicial',
        'data_movimento_retorno_final' => 'dataMovimentoRetornoFinal',
        'codigo_prefixo_agencia' => 'codigoPrefixoAgencia',
        'numero_conta_corrente' => 'numeroContaCorrente',
        'numero_carteira_cobranca' => 'numeroCarteiraCobranca',
        'numero_variacao_carteira_cobranca' => 'numeroVariacaoCarteiraCobranca',
        'numero_registro_pretendido' => 'numeroRegistroPretendido',
        'quantidade_registro_pretendido' => 'quantidadeRegistroPretendido'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_movimento_retorno_inicial' => 'setDataMovimentoRetornoInicial',
        'data_movimento_retorno_final' => 'setDataMovimentoRetornoFinal',
        'codigo_prefixo_agencia' => 'setCodigoPrefixoAgencia',
        'numero_conta_corrente' => 'setNumeroContaCorrente',
        'numero_carteira_cobranca' => 'setNumeroCarteiraCobranca',
        'numero_variacao_carteira_cobranca' => 'setNumeroVariacaoCarteiraCobranca',
        'numero_registro_pretendido' => 'setNumeroRegistroPretendido',
        'quantidade_registro_pretendido' => 'setQuantidadeRegistroPretendido'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_movimento_retorno_inicial' => 'getDataMovimentoRetornoInicial',
        'data_movimento_retorno_final' => 'getDataMovimentoRetornoFinal',
        'codigo_prefixo_agencia' => 'getCodigoPrefixoAgencia',
        'numero_conta_corrente' => 'getNumeroContaCorrente',
        'numero_carteira_cobranca' => 'getNumeroCarteiraCobranca',
        'numero_variacao_carteira_cobranca' => 'getNumeroVariacaoCarteiraCobranca',
        'numero_registro_pretendido' => 'getNumeroRegistroPretendido',
        'quantidade_registro_pretendido' => 'getQuantidadeRegistroPretendido'
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
        $this->container['data_movimento_retorno_inicial'] = isset($data['data_movimento_retorno_inicial']) ? $data['data_movimento_retorno_inicial'] : null;
        $this->container['data_movimento_retorno_final'] = isset($data['data_movimento_retorno_final']) ? $data['data_movimento_retorno_final'] : null;
        $this->container['codigo_prefixo_agencia'] = isset($data['codigo_prefixo_agencia']) ? $data['codigo_prefixo_agencia'] : null;
        $this->container['numero_conta_corrente'] = isset($data['numero_conta_corrente']) ? $data['numero_conta_corrente'] : null;
        $this->container['numero_carteira_cobranca'] = isset($data['numero_carteira_cobranca']) ? $data['numero_carteira_cobranca'] : null;
        $this->container['numero_variacao_carteira_cobranca'] = isset($data['numero_variacao_carteira_cobranca']) ? $data['numero_variacao_carteira_cobranca'] : null;
        $this->container['numero_registro_pretendido'] = isset($data['numero_registro_pretendido']) ? $data['numero_registro_pretendido'] : null;
        $this->container['quantidade_registro_pretendido'] = isset($data['quantidade_registro_pretendido']) ? $data['quantidade_registro_pretendido'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['data_movimento_retorno_inicial'] === null) {
            $invalidProperties[] = "'data_movimento_retorno_inicial' can't be null";
        }
        if ($this->container['data_movimento_retorno_final'] === null) {
            $invalidProperties[] = "'data_movimento_retorno_final' can't be null";
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
     * Gets data_movimento_retorno_inicial
     *
     * @return string
     */
    public function getDataMovimentoRetornoInicial()
    {
        return $this->container['data_movimento_retorno_inicial'];
    }

    /**
     * Sets data_movimento_retorno_inicial
     *
     * @param string $data_movimento_retorno_inicial Data inicial do processamento do movimento de retorno de cobrança de Boleto.
     *
     * @return $this
     */
    public function setDataMovimentoRetornoInicial($data_movimento_retorno_inicial)
    {
        $this->container['data_movimento_retorno_inicial'] = $data_movimento_retorno_inicial;

        return $this;
    }

    /**
     * Gets data_movimento_retorno_final
     *
     * @return string
     */
    public function getDataMovimentoRetornoFinal()
    {
        return $this->container['data_movimento_retorno_final'];
    }

    /**
     * Sets data_movimento_retorno_final
     *
     * @param string $data_movimento_retorno_final Data final do processamento do movimento de retorno de cobrança de Boleto.
     *
     * @return $this
     */
    public function setDataMovimentoRetornoFinal($data_movimento_retorno_final)
    {
        $this->container['data_movimento_retorno_final'] = $data_movimento_retorno_final;

        return $this;
    }

    /**
     * Gets codigo_prefixo_agencia
     *
     * @return int
     */
    public function getCodigoPrefixoAgencia()
    {
        return $this->container['codigo_prefixo_agencia'];
    }

    /**
     * Sets codigo_prefixo_agencia
     *
     * @param int $codigo_prefixo_agencia Código do prefixo identificador de uma dependência do Banco.
     *
     * @return $this
     */
    public function setCodigoPrefixoAgencia($codigo_prefixo_agencia)
    {
        $this->container['codigo_prefixo_agencia'] = $codigo_prefixo_agencia;

        return $this;
    }

    /**
     * Gets numero_conta_corrente
     *
     * @return int
     */
    public function getNumeroContaCorrente()
    {
        return $this->container['numero_conta_corrente'];
    }

    /**
     * Sets numero_conta_corrente
     *
     * @param int $numero_conta_corrente Número identificador de uma Conta Corrente contratada pelo cliente junto ao Banco do Brasil.
     *
     * @return $this
     */
    public function setNumeroContaCorrente($numero_conta_corrente)
    {
        $this->container['numero_conta_corrente'] = $numero_conta_corrente;

        return $this;
    }

    /**
     * Gets numero_carteira_cobranca
     *
     * @return int
     */
    public function getNumeroCarteiraCobranca()
    {
        return $this->container['numero_carteira_cobranca'];
    }

    /**
     * Sets numero_carteira_cobranca
     *
     * @param int $numero_carteira_cobranca Número identificador da carteira de Cobrança. Indica o tipo de serviço de cobrança, para o qual são aplicadas regras específicas.
     *
     * @return $this
     */
    public function setNumeroCarteiraCobranca($numero_carteira_cobranca)
    {
        $this->container['numero_carteira_cobranca'] = $numero_carteira_cobranca;

        return $this;
    }

    /**
     * Gets numero_variacao_carteira_cobranca
     *
     * @return int
     */
    public function getNumeroVariacaoCarteiraCobranca()
    {
        return $this->container['numero_variacao_carteira_cobranca'];
    }

    /**
     * Sets numero_variacao_carteira_cobranca
     *
     * @param int $numero_variacao_carteira_cobranca Número identificador da variação da Carteira de Cobrança. Identifica cada grupo de condições específicas (variação) para um mesmo tipo de serviço de cobrança contratado pelo cliente (carteira), visando separar os títulos de cobrança de acordo com os interesses do próprio cliente e previamente negociados com o Banco.
     *
     * @return $this
     */
    public function setNumeroVariacaoCarteiraCobranca($numero_variacao_carteira_cobranca)
    {
        $this->container['numero_variacao_carteira_cobranca'] = $numero_variacao_carteira_cobranca;

        return $this;
    }

    /**
     * Gets numero_registro_pretendido
     *
     * @return int
     */
    public function getNumeroRegistroPretendido()
    {
        return $this->container['numero_registro_pretendido'];
    }

    /**
     * Sets numero_registro_pretendido
     *
     * @param int $numero_registro_pretendido Número do registro ou da página que deseja buscar na consulta. Quando primeira chamada, informar \"001\"
     *
     * @return $this
     */
    public function setNumeroRegistroPretendido($numero_registro_pretendido)
    {
        $this->container['numero_registro_pretendido'] = $numero_registro_pretendido;

        return $this;
    }

    /**
     * Gets quantidade_registro_pretendido
     *
     * @return int
     */
    public function getQuantidadeRegistroPretendido()
    {
        return $this->container['quantidade_registro_pretendido'];
    }

    /**
     * Sets quantidade_registro_pretendido
     *
     * @param int $quantidade_registro_pretendido Quantidade de registros ou páginas que desejar buscar na consulta. Quantidade máxima de 10000 boletos por chamada
     *
     * @return $this
     */
    public function setQuantidadeRegistroPretendido($quantidade_registro_pretendido)
    {
        $this->container['quantidade_registro_pretendido'] = $quantidade_registro_pretendido;

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
