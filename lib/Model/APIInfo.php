<?php
/**
 * APIInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kadaster\BagApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IMBAG API - van de LVBAG
 *
 * Dit is de [BAG API](https://zakelijk.kadaster.nl/-/bag-api) Individuele Bevragingen van de Landelijke Voorziening Basisregistratie Adressen en Gebouwen (LVBAG).  Meer informatie over de Basisregistratie Adressen en Gebouwen is te vinden op de website van het [Ministerie van Binnenlandse Zaken en Koninkrijksrelaties](https://www.geobasisregistraties.nl/basisregistraties/adressen-en-gebouwen) en [Kadaster](https://zakelijk.kadaster.nl/bag).  De BAG API levert informatie conform de [BAG Catalogus 2018](https://www.geobasisregistraties.nl/documenten/publicatie/2018/03/12/catalogus-2018) en het informatiemodel IMBAG 2.0. De API specificatie volgt de [Nederlandse API-Strategie](https://docs.geostandaarden.nl/api/API-Strategie) specificatie versie van 20200204 en is opgesteld in [OpenAPI Specificatie](https://www.forumstandaardisatie.nl/standaard/openapi-specification) (OAS) v3.  Het standaard mediatype HAL (`application/hal+json`) wordt gebruikt. Dit is een mediatype voor het weergeven van resources en hun relaties via hyperlinks.  Deze API is vooral gericht op individuele bevragingen (op basis van de identificerende gegevens van een object). Om gebruik te kunnen maken van de BAG API is een API key nodig, deze kan verkregen worden door het [aanvraagformulier](https://formulieren.kadaster.nl/aanvraag_bag_api_individuele_bevragingen_productie) in te vullen.  Voor vragen, neem contact op met de LVBAG beheerder o.v.v. BAG API 2.0. We zijn aan het kijken naar een geschikt medium hiervoor, mede ook om de API iteratief te kunnen opstellen of doorontwikkelen samen met de community. Als de API iets (nog) niet kan, wat u wel graag wilt, neem dan contact op.
 *
 * OpenAPI spec version: 2.9.2
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kadaster\BagApiClient\Model;

use \ArrayAccess;
use \Kadaster\BagApiClient\ObjectSerializer;

/**
 * APIInfo Class Doc Comment
 *
 * @category Class
 * @description Algemene informatie voor gebruikers van de API.
 * @package  Kadaster\BagApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'API-info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_name' => 'string',
        'api_version' => 'string',
        'api_description' => 'string',
        'informationmodel' => 'string',
        'informationmodel_version' => 'string',
        'informationmodel_location' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_name' => null,
        'api_version' => null,
        'api_description' => null,
        'informationmodel' => null,
        'informationmodel_version' => null,
        'informationmodel_location' => 'URI'
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
        'api_name' => 'api-name',
        'api_version' => 'api-version',
        'api_description' => 'api-description',
        'informationmodel' => 'informationmodel',
        'informationmodel_version' => 'informationmodel-version',
        'informationmodel_location' => 'informationmodel-location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_name' => 'setApiName',
        'api_version' => 'setApiVersion',
        'api_description' => 'setApiDescription',
        'informationmodel' => 'setInformationmodel',
        'informationmodel_version' => 'setInformationmodelVersion',
        'informationmodel_location' => 'setInformationmodelLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_name' => 'getApiName',
        'api_version' => 'getApiVersion',
        'api_description' => 'getApiDescription',
        'informationmodel' => 'getInformationmodel',
        'informationmodel_version' => 'getInformationmodelVersion',
        'informationmodel_location' => 'getInformationmodelLocation'
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
        $this->container['api_name'] = isset($data['api_name']) ? $data['api_name'] : null;
        $this->container['api_version'] = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['api_description'] = isset($data['api_description']) ? $data['api_description'] : null;
        $this->container['informationmodel'] = isset($data['informationmodel']) ? $data['informationmodel'] : null;
        $this->container['informationmodel_version'] = isset($data['informationmodel_version']) ? $data['informationmodel_version'] : null;
        $this->container['informationmodel_location'] = isset($data['informationmodel_location']) ? $data['informationmodel_location'] : null;
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
     * Gets api_name
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string $api_name De naam van de API.
     *
     * @return $this
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string $api_version Versie van de API.
     *
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets api_description
     *
     * @return string
     */
    public function getApiDescription()
    {
        return $this->container['api_description'];
    }

    /**
     * Sets api_description
     *
     * @param string $api_description Omschrijving van de API.
     *
     * @return $this
     */
    public function setApiDescription($api_description)
    {
        $this->container['api_description'] = $api_description;

        return $this;
    }

    /**
     * Gets informationmodel
     *
     * @return string
     */
    public function getInformationmodel()
    {
        return $this->container['informationmodel'];
    }

    /**
     * Sets informationmodel
     *
     * @param string $informationmodel Naam van het informatiemodel dat als basis is genomen voor deze API.
     *
     * @return $this
     */
    public function setInformationmodel($informationmodel)
    {
        $this->container['informationmodel'] = $informationmodel;

        return $this;
    }

    /**
     * Gets informationmodel_version
     *
     * @return string
     */
    public function getInformationmodelVersion()
    {
        return $this->container['informationmodel_version'];
    }

    /**
     * Sets informationmodel_version
     *
     * @param string $informationmodel_version Versie van het logische informatiemodel dat als basis is genomen voor deze API.
     *
     * @return $this
     */
    public function setInformationmodelVersion($informationmodel_version)
    {
        $this->container['informationmodel_version'] = $informationmodel_version;

        return $this;
    }

    /**
     * Gets informationmodel_location
     *
     * @return string
     */
    public function getInformationmodelLocation()
    {
        return $this->container['informationmodel_location'];
    }

    /**
     * Sets informationmodel_location
     *
     * @param string $informationmodel_location Locatie (URI) van het logische informatiemodel die als basis is genomen voor deze API.
     *
     * @return $this
     */
    public function setInformationmodelLocation($informationmodel_location)
    {
        $this->container['informationmodel_location'] = $informationmodel_location;

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
