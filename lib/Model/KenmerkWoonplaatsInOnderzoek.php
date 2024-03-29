<?php
/**
 * KenmerkWoonplaatsInOnderzoek
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
 * KenmerkWoonplaatsInOnderzoek Class Doc Comment
 *
 * @category Class
 * @description Een indicatie waarmee aangegeven is dat een specifiek kenmerk van een specifieke object wel of niet in onderzoek is.   Het gegeven wat geregistreerd is voor dit kenmerk is mogelijk onjuist, te herkennen aan het gegeven &#x27;in onderzoek&#x27;: &#x27;Ja&#x27;.   Na onderzoek kan blijken dat het gegeven wel juist is. Zolang &#x27;in onderzoek&#x27; de waarde &#x27;Ja&#x27; heeft, komt de gebruiksplicht van het kenmerk te vervallen, althans voor die organisaties waarvoor de gebruiksplicht geldt. Het gegeven mag wel gebruikt worden.  Een enkelvoudig kenmerk is in algemeenheid in onderzoek, waarbij door de bronhouder onderzocht wordt wat de juiste waarde van dit kenmerk moet zijn. Om deze reden kan een kenmerk nooit meerdere keren in onderzoek zijn (ondanks dat er om meerdere redenen onderzoeken zijn gestart).  **kenmerk**: Het specifieke kenmerk van een woonplaats waarvoor geregistreerd is dat dit kenmerk in onderzoek is.  **identificatieVanLigplaats**: Identificatie van woonplaats.  **inOnderzoek**: Aanduiding of een kenmerk wel of niet in onderzoek is.  **historie**: De toestand van een kenmerk in onderzoek object in de administratieve werkelijkheid, zoals beschreven met de eigenschappen van dit object waarover gegevens geregistreerd worden, waarbij de gegevens gedurende een bepaalde periode gelijk zijn in de (basis) registratie.
 * @package  Kadaster\BagApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KenmerkWoonplaatsInOnderzoek implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KenmerkWoonplaatsInOnderzoek';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kenmerk' => '\Kadaster\BagApiClient\Model\InOnderzoekWoonplaats',
        'identificatie_van_woonplaats' => '\Kadaster\BagApiClient\Model\WoonplaatsIdentificatie',
        'in_onderzoek' => '\Kadaster\BagApiClient\Model\Indicatie',
        'historie' => '\Kadaster\BagApiClient\Model\HistorieInOnderzoek',
        'documentdatum' => '\DateTime',
        'documentnummer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kenmerk' => null,
        'identificatie_van_woonplaats' => null,
        'in_onderzoek' => null,
        'historie' => null,
        'documentdatum' => 'date',
        'documentnummer' => null
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
        'kenmerk' => 'kenmerk',
        'identificatie_van_woonplaats' => 'identificatieVanWoonplaats',
        'in_onderzoek' => 'inOnderzoek',
        'historie' => 'historie',
        'documentdatum' => 'documentdatum',
        'documentnummer' => 'documentnummer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kenmerk' => 'setKenmerk',
        'identificatie_van_woonplaats' => 'setIdentificatieVanWoonplaats',
        'in_onderzoek' => 'setInOnderzoek',
        'historie' => 'setHistorie',
        'documentdatum' => 'setDocumentdatum',
        'documentnummer' => 'setDocumentnummer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kenmerk' => 'getKenmerk',
        'identificatie_van_woonplaats' => 'getIdentificatieVanWoonplaats',
        'in_onderzoek' => 'getInOnderzoek',
        'historie' => 'getHistorie',
        'documentdatum' => 'getDocumentdatum',
        'documentnummer' => 'getDocumentnummer'
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
        $this->container['kenmerk'] = isset($data['kenmerk']) ? $data['kenmerk'] : null;
        $this->container['identificatie_van_woonplaats'] = isset($data['identificatie_van_woonplaats']) ? $data['identificatie_van_woonplaats'] : null;
        $this->container['in_onderzoek'] = isset($data['in_onderzoek']) ? $data['in_onderzoek'] : null;
        $this->container['historie'] = isset($data['historie']) ? $data['historie'] : null;
        $this->container['documentdatum'] = isset($data['documentdatum']) ? $data['documentdatum'] : null;
        $this->container['documentnummer'] = isset($data['documentnummer']) ? $data['documentnummer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['kenmerk'] === null) {
            $invalidProperties[] = "'kenmerk' can't be null";
        }
        if ($this->container['identificatie_van_woonplaats'] === null) {
            $invalidProperties[] = "'identificatie_van_woonplaats' can't be null";
        }
        if ($this->container['in_onderzoek'] === null) {
            $invalidProperties[] = "'in_onderzoek' can't be null";
        }
        if ($this->container['historie'] === null) {
            $invalidProperties[] = "'historie' can't be null";
        }
        if ($this->container['documentdatum'] === null) {
            $invalidProperties[] = "'documentdatum' can't be null";
        }
        if ($this->container['documentnummer'] === null) {
            $invalidProperties[] = "'documentnummer' can't be null";
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
     * Gets kenmerk
     *
     * @return \Kadaster\BagApiClient\Model\InOnderzoekWoonplaats
     */
    public function getKenmerk()
    {
        return $this->container['kenmerk'];
    }

    /**
     * Sets kenmerk
     *
     * @param \Kadaster\BagApiClient\Model\InOnderzoekWoonplaats $kenmerk kenmerk
     *
     * @return $this
     */
    public function setKenmerk($kenmerk)
    {
        $this->container['kenmerk'] = $kenmerk;

        return $this;
    }

    /**
     * Gets identificatie_van_woonplaats
     *
     * @return \Kadaster\BagApiClient\Model\WoonplaatsIdentificatie
     */
    public function getIdentificatieVanWoonplaats()
    {
        return $this->container['identificatie_van_woonplaats'];
    }

    /**
     * Sets identificatie_van_woonplaats
     *
     * @param \Kadaster\BagApiClient\Model\WoonplaatsIdentificatie $identificatie_van_woonplaats identificatie_van_woonplaats
     *
     * @return $this
     */
    public function setIdentificatieVanWoonplaats($identificatie_van_woonplaats)
    {
        $this->container['identificatie_van_woonplaats'] = $identificatie_van_woonplaats;

        return $this;
    }

    /**
     * Gets in_onderzoek
     *
     * @return \Kadaster\BagApiClient\Model\Indicatie
     */
    public function getInOnderzoek()
    {
        return $this->container['in_onderzoek'];
    }

    /**
     * Sets in_onderzoek
     *
     * @param \Kadaster\BagApiClient\Model\Indicatie $in_onderzoek in_onderzoek
     *
     * @return $this
     */
    public function setInOnderzoek($in_onderzoek)
    {
        $this->container['in_onderzoek'] = $in_onderzoek;

        return $this;
    }

    /**
     * Gets historie
     *
     * @return \Kadaster\BagApiClient\Model\HistorieInOnderzoek
     */
    public function getHistorie()
    {
        return $this->container['historie'];
    }

    /**
     * Sets historie
     *
     * @param \Kadaster\BagApiClient\Model\HistorieInOnderzoek $historie historie
     *
     * @return $this
     */
    public function setHistorie($historie)
    {
        $this->container['historie'] = $historie;

        return $this;
    }

    /**
     * Gets documentdatum
     *
     * @return \DateTime
     */
    public function getDocumentdatum()
    {
        return $this->container['documentdatum'];
    }

    /**
     * Sets documentdatum
     *
     * @param \DateTime $documentdatum De datum van het document waarin de grondslag van het onderzoek wordt vastgelegd. Dit wordt vastgelegd in het attribuut documentdatum.
     *
     * @return $this
     */
    public function setDocumentdatum($documentdatum)
    {
        $this->container['documentdatum'] = $documentdatum;

        return $this;
    }

    /**
     * Gets documentnummer
     *
     * @return string
     */
    public function getDocumentnummer()
    {
        return $this->container['documentnummer'];
    }

    /**
     * Sets documentnummer
     *
     * @param string $documentnummer Het nummer van het document waarin de grondslag van het onderzoek wordt vastgelegd. Dit wordt vastgelegd in het attribuut documentnummer.
     *
     * @return $this
     */
    public function setDocumentnummer($documentnummer)
    {
        $this->container['documentnummer'] = $documentnummer;

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
