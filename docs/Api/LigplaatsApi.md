# Kadaster\BagApiClient\LigplaatsApi

All URIs are relative to *https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ligplaatsGeometrie**](LigplaatsApi.md#ligplaatsgeometrie) | **POST** /ligplaatsen | bevragen van een ligplaats, op basis van een geometrische locatie.
[**ligplaatsIdentificatie**](LigplaatsApi.md#ligplaatsidentificatie) | **GET** /ligplaatsen/{identificatie} | bevragen 1 ligplaats met de identificatie van een ligplaats.
[**ligplaatsIdentificatieVoorkomen**](LigplaatsApi.md#ligplaatsidentificatievoorkomen) | **GET** /ligplaatsen/{identificatie}/{versie}/{timestampRegistratieLv} | bevragen voorkomen van een ligplaats met de identificatie van een ligplaats en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.
[**ligplaatsLvcIdentificatie**](LigplaatsApi.md#ligplaatslvcidentificatie) | **GET** /ligplaatsen/{identificatie}/lvc | bevragen levenscyclus van een ligplaats met de identificatie van een ligplaats.
[**zoekLigplaatsen**](LigplaatsApi.md#zoekligplaatsen) | **GET** /ligplaatsen | Zoeken van ligplaatsen met een geometrische locatie of binnen een bounding box.

# **ligplaatsGeometrie**
> \Kadaster\BagApiClient\Model\LigplaatsIOHalCollection ligplaatsGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig, $expand)

bevragen van een ligplaats, op basis van een geometrische locatie.

Bevragen/raadplegen van één of meer ligplaatsen met een geometrische locatie. Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature). De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).  Als expand=heeftAlsHoofdAdres, heeftAlsNevenAdres of true dan worden de gevraagde of alle objecten als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\LigplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Kadaster\BagApiClient\Model\PointGeoJSON(); // \Kadaster\BagApiClient\Model\PointGeoJSON | Geometrisch punt waarop de ligplaatsen bepaald moeten worden.
$content_crs = "content_crs_example"; // string | CRS van de meegegeven geometrie.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.

try {
    $result = $apiInstance->ligplaatsGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LigplaatsApi->ligplaatsGeometrie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kadaster\BagApiClient\Model\PointGeoJSON**](../Model/PointGeoJSON.md)| Geometrisch punt waarop de ligplaatsen bepaald moeten worden. |
 **content_crs** | **string**| CRS van de meegegeven geometrie. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\LigplaatsIOHalCollection**](../Model/LigplaatsIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ligplaatsIdentificatie**
> \Kadaster\BagApiClient\Model\LigplaatsIOHal ligplaatsIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs, $huidig)

bevragen 1 ligplaats met de identificatie van een ligplaats.

Bevragen/raadplegen van een voorkomen van een ligplaats met de identificatie van de ligplaats. Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature). De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).  Als expand=heeftAlsHoofdAdres, heeftAlsNevenAdres of true dan worden de gevraagde of alle objecten als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\LigplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\LigplaatsIdentificatie(); // \Kadaster\BagApiClient\Model\LigplaatsIdentificatie | De identificatie van een ligplaats uit de BAG.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.

try {
    $result = $apiInstance->ligplaatsIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $expand, $accept_crs, $huidig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LigplaatsApi->ligplaatsIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\LigplaatsIdentificatie**](../Model/.md)| De identificatie van een ligplaats uit de BAG. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\LigplaatsIOHal**](../Model/LigplaatsIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ligplaatsIdentificatieVoorkomen**
> \Kadaster\BagApiClient\Model\LigplaatsIOHal ligplaatsIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs)

bevragen voorkomen van een ligplaats met de identificatie van een ligplaats en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

Bevragen/raadplegen van een voorkomen van een ligplaats met de identificatie van een ligplaats en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\LigplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\LigplaatsIdentificatie(); // \Kadaster\BagApiClient\Model\LigplaatsIdentificatie | De identificatie van een ligplaats uit de BAG.
$versie = 56; // int | De versie van een voorkomen van een object.
$timestamp_registratie_lv = "timestamp_registratie_lv_example"; // string | Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.

try {
    $result = $apiInstance->ligplaatsIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LigplaatsApi->ligplaatsIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\LigplaatsIdentificatie**](../Model/.md)| De identificatie van een ligplaats uit de BAG. |
 **versie** | **int**| De versie van een voorkomen van een object. |
 **timestamp_registratie_lv** | **string**| Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG. |
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\LigplaatsIOHal**](../Model/LigplaatsIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ligplaatsLvcIdentificatie**
> \Kadaster\BagApiClient\Model\LigplaatsIOLvcHalCollection ligplaatsLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs)

bevragen levenscyclus van een ligplaats met de identificatie van een ligplaats.

Bevragen/raadplegen van de levenscyclus van een ligplaats, via de identificatie van de ligplaats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\LigplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\LigplaatsIdentificatie(); // \Kadaster\BagApiClient\Model\LigplaatsIdentificatie | De identificatie van een ligplaats uit de BAG.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false).
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.

try {
    $result = $apiInstance->ligplaatsLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LigplaatsApi->ligplaatsLvcIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\LigplaatsIdentificatie**](../Model/.md)| De identificatie van een ligplaats uit de BAG. |
 **gehele_lvc** | **bool**| Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). | [optional] [default to false]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\LigplaatsIOLvcHalCollection**](../Model/LigplaatsIOLvcHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekLigplaatsen**
> \Kadaster\BagApiClient\Model\LigplaatsIOHalCollection zoekLigplaatsen($geldig_op, $beschikbaar_op, $huidig, $expand, $content_crs, $accept_crs, $page, $page_size, $point, $bbox)

Zoeken van ligplaatsen met een geometrische locatie of binnen een bounding box.

Zoek actuele ligplaatsen:  1. met een geometrische locatie.  2. binnen een geometrische contour (rechthoek).   Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).   Als expand=heeftAlsHoofdAdres, heeftAlsNevenAdres of true dan worden de gevraagde of alle objecten als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).  Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\LigplaatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$content_crs = "content_crs_example"; // string | CRS van de meegegeven geometrie.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina
$point = new \Kadaster\BagApiClient\Model\PointGeoJSON(); // \Kadaster\BagApiClient\Model\PointGeoJSON | Punt conform OGC API Features standaard. Met de content-crs header wordt aangegeven in welk CRS de coördinaten van het punt is.
$bbox = array(3.4); // float[] | Rechthoek (bounding box) waarbinnen het object dat je zoekt valt. Voor een definitie van bbox, zie [OGC API Features specificatie - bbox definitie](https://docs.opengeospatial.org/is/17-069r3/17-069r3.html#ats_core_fc-bbox-definition). Met de content-crs header wordt aangegeven in welk CRS de coördinaten van de bbox zijn.  Coördinaten worden als volgt opgegeven: linksonder x, linksonder y, rechtsboven x, rechtsboven y. De oppervlakte van de bounding box mag maximaal 250.000 vierkante meter zijn.

try {
    $result = $apiInstance->zoekLigplaatsen($geldig_op, $beschikbaar_op, $huidig, $expand, $content_crs, $accept_crs, $page, $page_size, $point, $bbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LigplaatsApi->zoekLigplaatsen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **content_crs** | **string**| CRS van de meegegeven geometrie. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]
 **point** | [**\Kadaster\BagApiClient\Model\PointGeoJSON**](../Model/.md)| Punt conform OGC API Features standaard. Met de content-crs header wordt aangegeven in welk CRS de coördinaten van het punt is. | [optional]
 **bbox** | [**float[]**](../Model/float.md)| Rechthoek (bounding box) waarbinnen het object dat je zoekt valt. Voor een definitie van bbox, zie [OGC API Features specificatie - bbox definitie](https://docs.opengeospatial.org/is/17-069r3/17-069r3.html#ats_core_fc-bbox-definition). Met de content-crs header wordt aangegeven in welk CRS de coördinaten van de bbox zijn.  Coördinaten worden als volgt opgegeven: linksonder x, linksonder y, rechtsboven x, rechtsboven y. De oppervlakte van de bounding box mag maximaal 250.000 vierkante meter zijn. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\LigplaatsIOHalCollection**](../Model/LigplaatsIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

