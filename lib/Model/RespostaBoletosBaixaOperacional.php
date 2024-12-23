<?php
/**
 * RespostaBoletosBaixaOperacional
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

namespace Swagger\Client\Model

use \ArrayAccess;
use \Swagger\Client\Boleto\ObjectSerializer;

/**
 * RespostaBoletosBaixaOperacional Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RespostaBoletosBaixaOperacional implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RespostaBoletosBaixaOperacional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'possui_mais_titulos' => 'string',
        'proximo_titulo' => 'string',
        'lista' => '\Swagger\Client\ModelaBoletosBaixaOperacionalLista[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'possui_mais_titulos' => null,
        'proximo_titulo' => null,
        'lista' => null
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
        'possui_mais_titulos' => 'possuiMaisTitulos',
        'proximo_titulo' => 'proximoTitulo',
        'lista' => 'lista'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'possui_mais_titulos' => 'setPossuiMaisTitulos',
        'proximo_titulo' => 'setProximoTitulo',
        'lista' => 'setLista'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'possui_mais_titulos' => 'getPossuiMaisTitulos',
        'proximo_titulo' => 'getProximoTitulo',
        'lista' => 'getLista'
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

    const POSSUI_MAIS_TITULOS_S = 'S';
    const POSSUI_MAIS_TITULOS_N = 'N';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPossuiMaisTitulosAllowableValues()
    {
        return [
            self::POSSUI_MAIS_TITULOS_S,
            self::POSSUI_MAIS_TITULOS_N,
        ];
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
        $this->container['possui_mais_titulos'] = isset($data['possui_mais_titulos']) ? $data['possui_mais_titulos'] : null;
        $this->container['proximo_titulo'] = isset($data['proximo_titulo']) ? $data['proximo_titulo'] : null;
        $this->container['lista'] = isset($data['lista']) ? $data['lista'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPossuiMaisTitulosAllowableValues();
        if (!is_null($this->container['possui_mais_titulos']) && !in_array($this->container['possui_mais_titulos'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'possui_mais_titulos', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['lista'] === null) {
            $invalidProperties[] = "'lista' can't be null";
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
     * Gets possui_mais_titulos
     *
     * @return string
     */
    public function getPossuiMaisTitulos()
    {
        return $this->container['possui_mais_titulos'];
    }

    /**
     * Sets possui_mais_titulos
     *
     * @param string $possui_mais_titulos Indicador de que a consulta resultou em uma quantidade superior a 650 boletos (capacidade de resposta por requisição ao serviço).  Se indicador igual a \"S\", uma nova requisição, nos mesmos moldes, poderá ser feita para consultar o restante dos boletos. Nesse caso, na próxima consulta, o valor do campo \"proximoTitulo\" deverá ser informado no campo \"idProximoTitulo\".
     *
     * @return $this
     */
    public function setPossuiMaisTitulos($possui_mais_titulos)
    {
        $allowedValues = $this->getPossuiMaisTitulosAllowableValues();
        if (!is_null($possui_mais_titulos) && !in_array($possui_mais_titulos, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'possui_mais_titulos', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['possui_mais_titulos'] = $possui_mais_titulos;

        return $this;
    }

    /**
     * Gets proximo_titulo
     *
     * @return string
     */
    public function getProximoTitulo()
    {
        return $this->container['proximo_titulo'];
    }

    /**
     * Sets proximo_titulo
     *
     * @param string $proximo_titulo Número do último registro apresentado pela lista, que poderá ser utilizado como parâmetro inicial de uma nova requisição para consultar os boletos restantes.
     *
     * @return $this
     */
    public function setProximoTitulo($proximo_titulo)
    {
        $this->container['proximo_titulo'] = $proximo_titulo;

        return $this;
    }

    /**
     * Gets lista
     *
     * @return \Swagger\Client\ModelaBoletosBaixaOperacionalLista[]
     */
    public function getLista()
    {
        return $this->container['lista'];
    }

    /**
     * Sets lista
     *
     * @param \Swagger\Client\ModelaBoletosBaixaOperacionalLista[] $lista Lista de registros que atendam a consulta.
     *
     * @return $this
     */
    public function setLista($lista)
    {
        $this->container['lista'] = $lista;

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
