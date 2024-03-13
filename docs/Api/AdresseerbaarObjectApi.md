# Kadaster\BagApiClient\AdresseerbaarObjectApi

All URIs are relative to *https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bevragenAdresseerbaarObject**](AdresseerbaarObjectApi.md#bevragenadresseerbaarobject) | **GET** /adresseerbareobjecten/{adresseerbaarObjectIdentificatie} | Bevragen van één adresseerbaar object met een adresseerbaar  object identificatie.
[**bevragenAdresseerbaarObjectLvc**](AdresseerbaarObjectApi.md#bevragenadresseerbaarobjectlvc) | **GET** /adresseerbareobjecten/{adresseerbaarObjectIdentificatie}/lvc | Bevragen van de levenscyclus van een adresseerbaar object met een adresseerbaar object identificatie.
[**zoekAdresseerbareObjecten**](AdresseerbaarObjectApi.md#zoekadresseerbareobjecten) | **GET** /adresseerbareobjecten | Bevragen van één of meer adresseerbare objecten op basis van een nummeraanduiding identificatie.

# **bevragenAdresseerbaarObject**
> \Kadaster\BagApiClient\Model\AdresseerbaarObjectIOHal bevragenAdresseerbaarObject($adresseerbaar_object_identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs, $huidig)

Bevragen van één adresseerbaar object met een adresseerbaar  object identificatie.

Bevragen van één adresseerbaar object (ligplaats, standplaats of  verblijfsobject) met de identificatie van een adresseerbaar object.  Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).   Als expand=heeftAlsHoofdAdres, heeftAlsNevenAdres, maaktDeelUitVan  (of een combinatie daarvan) of als expand=true, dan worden de  gevraagde of alle gerelateerde resources als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\AdresseerbaarObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adresseerbaar_object_identificatie = new \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie(); // \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie | De identificatie van een adresseerbaar object (ligplaats, standplaats  of verblijfsobject) uit de BAG.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.

try {
    $result = $apiInstance->bevragenAdresseerbaarObject($adresseerbaar_object_identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs, $huidig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresseerbaarObjectApi->bevragenAdresseerbaarObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adresseerbaar_object_identificatie** | [**\Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie**](../Model/.md)| De identificatie van een adresseerbaar object (ligplaats, standplaats  of verblijfsobject) uit de BAG. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\AdresseerbaarObjectIOHal**](../Model/AdresseerbaarObjectIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bevragenAdresseerbaarObjectLvc**
> \Kadaster\BagApiClient\Model\AdresseerbaarObjectLvcIOHalCollection bevragenAdresseerbaarObjectLvc($adresseerbaar_object_identificatie, $gehele_lvc, $accept_crs)

Bevragen van de levenscyclus van een adresseerbaar object met een adresseerbaar object identificatie.

Bevragen van de levenscyclus van een adresseerbaar object (ligplaats, standplaats of verblijfsobject) met de identificatie van een adresseerbaar object. Met de geheleLvc parameter kan worden aangegeven of de gehele levenscyclus (inclusief voorkomens die uit de geldige levenscyclus zijn verwijderd) of alleen de actieve levenscyclus (alleen de voorkomens die onderdeel zijn van de geldige levenscyclus) gewenst zijn.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\AdresseerbaarObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adresseerbaar_object_identificatie = new \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie(); // \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie | De identificatie van een adresseerbaar object (ligplaats, standplaats  of verblijfsobject) uit de BAG.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false).
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.

try {
    $result = $apiInstance->bevragenAdresseerbaarObjectLvc($adresseerbaar_object_identificatie, $gehele_lvc, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresseerbaarObjectApi->bevragenAdresseerbaarObjectLvc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adresseerbaar_object_identificatie** | [**\Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie**](../Model/.md)| De identificatie van een adresseerbaar object (ligplaats, standplaats  of verblijfsobject) uit de BAG. |
 **gehele_lvc** | **bool**| Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). | [optional] [default to false]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\AdresseerbaarObjectLvcIOHalCollection**](../Model/AdresseerbaarObjectLvcIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekAdresseerbareObjecten**
> \Kadaster\BagApiClient\Model\AdresseerbareObjectenIOHalCollection zoekAdresseerbareObjecten($nummeraanduiding_identificatie, $huidig, $geldig_op, $beschikbaar_op, $expand, $accept_crs, $content_crs, $page, $page_size, $bbox, $geconstateerd, $oppervlakte_min, $oppervlakte_max, $gebruiksdoelen, $type, $pand_identificaties)

Bevragen van één of meer adresseerbare objecten op basis van een nummeraanduiding identificatie.

Zoek actuele adresseerbare objecten (verblijfsobjecten, standplaatsen of ligplaatsen):  1. met een nummeraanduiding identificatie.  2. binnen een geometrische contour (rechthoek) in combinatie met status geconstateerd, oppervlakte, gebruiksdoel en/of type.  3. met een lijst van pandidentificaties.   Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).   Als expand=heeftAlsHoofdAdres, heeftAlsNevenAdres, maaktDeelUitVan (of een combinatie daarvan) of als expand=true, dan worden de gevraagde of alle gerelateerde resources als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).  Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\AdresseerbaarObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nummeraanduiding_identificatie = new \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie(); // \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie | De identificatie van een nummeraanduiding uit de BAG.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$content_crs = "content_crs_example"; // string | CRS van de meegegeven geometrie.
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina
$bbox = array(3.4); // float[] | Rechthoek (bounding box) waarbinnen het object dat je zoekt valt. Voor een definitie van bbox, zie [OGC API Features specificatie - bbox definitie](https://docs.opengeospatial.org/is/17-069r3/17-069r3.html#ats_core_fc-bbox-definition). Met de content-crs header wordt aangegeven in welk CRS de coördinaten van de bbox zijn.  Coördinaten worden als volgt opgegeven: linksonder x, linksonder y, rechtsboven x, rechtsboven y. De oppervlakte van de bounding box mag maximaal 250.000 vierkante meter zijn.
$geconstateerd = true; // bool | Geeft aan of naar geconstateerde objecten moet worden gezocht.
$oppervlakte_min = 56; // int | 
$oppervlakte_max = 56; // int | 
$gebruiksdoelen = array(new \Kadaster\BagApiClient\Model\Gebruiksdoel()); // \Kadaster\BagApiClient\Model\Gebruiksdoel[] | De gebruiksdoelen van het verblijfsobject zoals in de vergunning is opgenomen of bij constatering is vastgesteld. Als een verblijfsobject één van de gebruiksdoelen in deze lijst heeft, dan wordt het verblijfsobject in het zoekresultaat meegenomen.
$type = new \Kadaster\BagApiClient\Model\TypeAdresseerbaarObject(); // \Kadaster\BagApiClient\Model\TypeAdresseerbaarObject | Geeft aan of het adresseerbaar object een ligplaats, standplaats of verblijfsobject is.
$pand_identificaties = array(new \Kadaster\BagApiClient\Model\PandIdentificatie()); // \Kadaster\BagApiClient\Model\PandIdentificatie[] | Een lijst met identificaties van panden uit de BAG.

try {
    $result = $apiInstance->zoekAdresseerbareObjecten($nummeraanduiding_identificatie, $huidig, $geldig_op, $beschikbaar_op, $expand, $accept_crs, $content_crs, $page, $page_size, $bbox, $geconstateerd, $oppervlakte_min, $oppervlakte_max, $gebruiksdoelen, $type, $pand_identificaties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresseerbaarObjectApi->zoekAdresseerbareObjecten: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nummeraanduiding_identificatie** | [**\Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie**](../Model/.md)| De identificatie van een nummeraanduiding uit de BAG. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **content_crs** | **string**| CRS van de meegegeven geometrie. | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]
 **bbox** | [**float[]**](../Model/float.md)| Rechthoek (bounding box) waarbinnen het object dat je zoekt valt. Voor een definitie van bbox, zie [OGC API Features specificatie - bbox definitie](https://docs.opengeospatial.org/is/17-069r3/17-069r3.html#ats_core_fc-bbox-definition). Met de content-crs header wordt aangegeven in welk CRS de coördinaten van de bbox zijn.  Coördinaten worden als volgt opgegeven: linksonder x, linksonder y, rechtsboven x, rechtsboven y. De oppervlakte van de bounding box mag maximaal 250.000 vierkante meter zijn. | [optional]
 **geconstateerd** | **bool**| Geeft aan of naar geconstateerde objecten moet worden gezocht. | [optional]
 **oppervlakte_min** | **int**|  | [optional]
 **oppervlakte_max** | **int**|  | [optional]
 **gebruiksdoelen** | [**\Kadaster\BagApiClient\Model\Gebruiksdoel[]**](../Model/\Kadaster\BagApiClient\Model\Gebruiksdoel.md)| De gebruiksdoelen van het verblijfsobject zoals in de vergunning is opgenomen of bij constatering is vastgesteld. Als een verblijfsobject één van de gebruiksdoelen in deze lijst heeft, dan wordt het verblijfsobject in het zoekresultaat meegenomen. | [optional]
 **type** | [**\Kadaster\BagApiClient\Model\TypeAdresseerbaarObject**](../Model/.md)| Geeft aan of het adresseerbaar object een ligplaats, standplaats of verblijfsobject is. | [optional]
 **pand_identificaties** | [**\Kadaster\BagApiClient\Model\PandIdentificatie[]**](../Model/\Kadaster\BagApiClient\Model\PandIdentificatie.md)| Een lijst met identificaties van panden uit de BAG. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\AdresseerbareObjectenIOHalCollection**](../Model/AdresseerbareObjectenIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

