<?php
/**
 * Gemeente
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
 * Gemeente Class Doc Comment
 *
 * @category Class
 * @description Een bronhouder is een gemeente of samenwerkingsverband van gemeenten en  heeft een code en naam net als een gemeente.
 * @package  Kadaster\BagApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Gemeente implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Gemeente';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'naam' => 'string',
        'begin_geldigheid' => '\DateTime',
        'eind_geldigheid' => '\DateTime',
        'provincie' => '\Kadaster\BagApiClient\Model\Provincie',
        'status' => '\Kadaster\BagApiClient\Model\StatusGemeente',
        'versie' => 'int',
        'tijdstip_registratie_lv' => '\DateTime',
        'tijdstip_eind_registratie_lv' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'naam' => null,
        'begin_geldigheid' => 'date',
        'eind_geldigheid' => 'date',
        'provincie' => null,
        'status' => null,
        'versie' => null,
        'tijdstip_registratie_lv' => 'date-time',
        'tijdstip_eind_registratie_lv' => 'date-time'
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
        'code' => 'code',
        'naam' => 'naam',
        'begin_geldigheid' => 'beginGeldigheid',
        'eind_geldigheid' => 'eindGeldigheid',
        'provincie' => 'provincie',
        'status' => 'status',
        'versie' => 'versie',
        'tijdstip_registratie_lv' => 'tijdstipRegistratieLV',
        'tijdstip_eind_registratie_lv' => 'tijdstipEindRegistratieLV'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'naam' => 'setNaam',
        'begin_geldigheid' => 'setBeginGeldigheid',
        'eind_geldigheid' => 'setEindGeldigheid',
        'provincie' => 'setProvincie',
        'status' => 'setStatus',
        'versie' => 'setVersie',
        'tijdstip_registratie_lv' => 'setTijdstipRegistratieLv',
        'tijdstip_eind_registratie_lv' => 'setTijdstipEindRegistratieLv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'naam' => 'getNaam',
        'begin_geldigheid' => 'getBeginGeldigheid',
        'eind_geldigheid' => 'getEindGeldigheid',
        'provincie' => 'getProvincie',
        'status' => 'getStatus',
        'versie' => 'getVersie',
        'tijdstip_registratie_lv' => 'getTijdstipRegistratieLv',
        'tijdstip_eind_registratie_lv' => 'getTijdstipEindRegistratieLv'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['naam'] = isset($data['naam']) ? $data['naam'] : null;
        $this->container['begin_geldigheid'] = isset($data['begin_geldigheid']) ? $data['begin_geldigheid'] : null;
        $this->container['eind_geldigheid'] = isset($data['eind_geldigheid']) ? $data['eind_geldigheid'] : null;
        $this->container['provincie'] = isset($data['provincie']) ? $data['provincie'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['versie'] = isset($data['versie']) ? $data['versie'] : null;
        $this->container['tijdstip_registratie_lv'] = isset($data['tijdstip_registratie_lv']) ? $data['tijdstip_registratie_lv'] : null;
        $this->container['tijdstip_eind_registratie_lv'] = isset($data['tijdstip_eind_registratie_lv']) ? $data['tijdstip_eind_registratie_lv'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['naam'] === null) {
            $invalidProperties[] = "'naam' can't be null";
        }
        if ($this->container['begin_geldigheid'] === null) {
            $invalidProperties[] = "'begin_geldigheid' can't be null";
        }
        if ($this->container['provincie'] === null) {
            $invalidProperties[] = "'provincie' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['versie'] === null) {
            $invalidProperties[] = "'versie' can't be null";
        }
        if ($this->container['tijdstip_registratie_lv'] === null) {
            $invalidProperties[] = "'tijdstip_registratie_lv' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Een officiële code die aan een gemeente is toegekend, ontleend is aan  tabel 33 en zoals bijgehouden in de LVBAG.  Dit gegeven is geen officieel BAG gegeven en wordt niet als kenmerk van  het BAG object Woonplaats object bijgehouden.  Het wordt als hulpgegeven meegeleverd.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->container['naam'];
    }

    /**
     * Sets naam
     *
     * @param string $naam Een officiële naam die aan een gemeente is toegekend.
     *
     * @return $this
     */
    public function setNaam($naam)
    {
        $this->container['naam'] = $naam;

        return $this;
    }

    /**
     * Gets begin_geldigheid
     *
     * @return \DateTime
     */
    public function getBeginGeldigheid()
    {
        return $this->container['begin_geldigheid'];
    }

    /**
     * Sets begin_geldigheid
     *
     * @param \DateTime $begin_geldigheid De datum waarop een versie van een bronhouder geldig is in de werkelijkheid.  Dit tijdstip wordt vastgelegd in de beginGeldigheid.
     *
     * @return $this
     */
    public function setBeginGeldigheid($begin_geldigheid)
    {
        $this->container['begin_geldigheid'] = $begin_geldigheid;

        return $this;
    }

    /**
     * Gets eind_geldigheid
     *
     * @return \DateTime
     */
    public function getEindGeldigheid()
    {
        return $this->container['eind_geldigheid'];
    }

    /**
     * Sets eind_geldigheid
     *
     * @param \DateTime $eind_geldigheid De datum waarop de periode van geldigheid van een versie van een bronhouder  eindigt.  Wanneer er geen tijdstip is ingevuld, dan is de versie nog geldig.  Dit tijdstip wordt vastgelegd in de eindGeldigheid.
     *
     * @return $this
     */
    public function setEindGeldigheid($eind_geldigheid)
    {
        $this->container['eind_geldigheid'] = $eind_geldigheid;

        return $this;
    }

    /**
     * Gets provincie
     *
     * @return \Kadaster\BagApiClient\Model\Provincie
     */
    public function getProvincie()
    {
        return $this->container['provincie'];
    }

    /**
     * Sets provincie
     *
     * @param \Kadaster\BagApiClient\Model\Provincie $provincie provincie
     *
     * @return $this
     */
    public function setProvincie($provincie)
    {
        $this->container['provincie'] = $provincie;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Kadaster\BagApiClient\Model\StatusGemeente
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Kadaster\BagApiClient\Model\StatusGemeente $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets versie
     *
     * @return int
     */
    public function getVersie()
    {
        return $this->container['versie'];
    }

    /**
     * Sets versie
     *
     * @param int $versie De identificatie van een voorkomen van een object.
     *
     * @return $this
     */
    public function setVersie($versie)
    {
        $this->container['versie'] = $versie;

        return $this;
    }

    /**
     * Gets tijdstip_registratie_lv
     *
     * @return \DateTime
     */
    public function getTijdstipRegistratieLv()
    {
        return $this->container['tijdstip_registratie_lv'];
    }

    /**
     * Sets tijdstip_registratie_lv
     *
     * @param \DateTime $tijdstip_registratie_lv Dit is het tijdstip (conform RFC 3339) waarop een versie van een object of een relatie is opgenomen in de registratie van de landelijke voorziening. De gegevens komen daarmee beschikbaar voor afnemers.
     *
     * @return $this
     */
    public function setTijdstipRegistratieLv($tijdstip_registratie_lv)
    {
        $this->container['tijdstip_registratie_lv'] = $tijdstip_registratie_lv;

        return $this;
    }

    /**
     * Gets tijdstip_eind_registratie_lv
     *
     * @return \DateTime
     */
    public function getTijdstipEindRegistratieLv()
    {
        return $this->container['tijdstip_eind_registratie_lv'];
    }

    /**
     * Sets tijdstip_eind_registratie_lv
     *
     * @param \DateTime $tijdstip_eind_registratie_lv Dit is het tijdstip (conform RFC 3339) waarop een versie van een object of een relatie is beëindigd in de registratie van de landelijke voorziening.
     *
     * @return $this
     */
    public function setTijdstipEindRegistratieLv($tijdstip_eind_registratie_lv)
    {
        $this->container['tijdstip_eind_registratie_lv'] = $tijdstip_eind_registratie_lv;

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
