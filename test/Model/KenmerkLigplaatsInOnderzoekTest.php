<?php
/**
 * KenmerkLigplaatsInOnderzoekTest
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
 * Please update the test case below to test the model.
 */

namespace Kadaster\BagApiClient;

use PHPUnit\Framework\TestCase;

/**
 * KenmerkLigplaatsInOnderzoekTest Class Doc Comment
 *
 * @category    Class
 * @description Een indicatie waarmee aangegeven is dat een specifiek kenmerk van een specifieke object wel of niet in onderzoek is.  Het gegeven wat geregistreerd is voor dit kenmerk is mogelijk onjuist, te herkennen aan het gegeven &#x27;in onderzoek&#x27;: &#x27;Ja&#x27;.  Na onderzoek kan blijken dat het gegeven wel juist is. Zolang &#x27;in onderzoek&#x27; de waarde &#x27;Ja&#x27; heeft, komt de gebruiksplicht van het kenmerk te vervallen, althans voor die organisaties waarvoor de gebruiksplicht geldt. Het gegeven mag wel gebruikt worden.  Een enkelvoudig kenmerk is in algemeenheid in onderzoek, waarbij door de bronhouder onderzocht wordt wat de juiste waarde is van dit kenmerk moet zijn. Om deze reden kan een kenmerk nooit meerdere keren in onderzoek zijn (ondanks dat er om meerdere redenen onderzoeken zijn gestart).  **kenmerk**: Het specifieke kenmerk van een ligplaats waarvoor geregistreerd is dat dit kenmerk in onderzoek is.  **identificatieVanLigplaats**: Identificatie van ligplaats  **inOnderzoek**: Aanduiding of een kenmerk wel of niet in onderzoek is.  **historie**: De toestand van een kenmerk in onderzoek object in de administratieve werkelijkheid, zoals beschreven met de eigenschappen van dit object waarover gegevens geregistreerd worden, waarbij de gegevens gedurende een bepaalde periode gelijk zijn in de (basis) registratie.
 * @package     Kadaster\BagApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KenmerkLigplaatsInOnderzoekTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "KenmerkLigplaatsInOnderzoek"
     */
    public function testKenmerkLigplaatsInOnderzoek()
    {
    }

    /**
     * Test attribute "kenmerk"
     */
    public function testPropertyKenmerk()
    {
    }

    /**
     * Test attribute "identificatie_van_ligplaats"
     */
    public function testPropertyIdentificatieVanLigplaats()
    {
    }

    /**
     * Test attribute "in_onderzoek"
     */
    public function testPropertyInOnderzoek()
    {
    }

    /**
     * Test attribute "historie"
     */
    public function testPropertyHistorie()
    {
    }

    /**
     * Test attribute "documentdatum"
     */
    public function testPropertyDocumentdatum()
    {
    }

    /**
     * Test attribute "documentnummer"
     */
    public function testPropertyDocumentnummer()
    {
    }
}
