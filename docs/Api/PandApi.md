# Kadaster\BagApiClient\PandApi

All URIs are relative to *https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pandGeometrie**](PandApi.md#pandgeometrie) | **POST** /panden | bevragen panden met een geometrische locatie.
[**pandIdentificatie**](PandApi.md#pandidentificatie) | **GET** /panden/{identificatie} | bevragen van een pand met de identificatie van een pand.
[**pandIdentificatieVoorkomen**](PandApi.md#pandidentificatievoorkomen) | **GET** /panden/{identificatie}/{versie}/{timestampRegistratieLv} | bevragen voorkomen van een pand met de identificatie van een pand en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.
[**pandLvcIdentificatie**](PandApi.md#pandlvcidentificatie) | **GET** /panden/{identificatie}/lvc | bevragen levenscyclus van een pand met de identificatie van een pand.
[**zoekPanden**](PandApi.md#zoekpanden) | **GET** /panden | Zoek panden met een geometrische locatie, binnen een bounding box,  met een adresseerbaar object identificatie of met een nummeraanduiding  identificatie.

# **pandGeometrie**
> \Kadaster\BagApiClient\Model\PandIOHalCollection pandGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig)

bevragen panden met een geometrische locatie.

Bevragen/raadplegen van een voorkomen van één of meer panden met de geometrische locatie van het pand.  Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Kadaster\BagApiClient\Model\PointGeoJSON(); // \Kadaster\BagApiClient\Model\PointGeoJSON | Geometrisch punt waarop de panden bepaald moeten worden.
$content_crs = "content_crs_example"; // string | CRS van de meegegeven geometrie.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.

try {
    $result = $apiInstance->pandGeometrie($body, $content_crs, $accept_crs, $geldig_op, $beschikbaar_op, $huidig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandGeometrie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kadaster\BagApiClient\Model\PointGeoJSON**](../Model/PointGeoJSON.md)| Geometrisch punt waarop de panden bepaald moeten worden. |
 **content_crs** | **string**| CRS van de meegegeven geometrie. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\PandIOHalCollection**](../Model/PandIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pandIdentificatie**
> \Kadaster\BagApiClient\Model\PandIOHal pandIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $accept_crs, $huidig)

bevragen van een pand met de identificatie van een pand.

Bevragen/raadplegen van een voorkomen van een pand met de identificatie van het pand.  Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\PandIdentificatie(); // \Kadaster\BagApiClient\Model\PandIdentificatie | De identificatie van een pand uit de BAG.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.

try {
    $result = $apiInstance->pandIdentificatie($identificatie, $geldig_op, $beschikbaar_op, $accept_crs, $huidig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\PandIdentificatie**](../Model/.md)| De identificatie van een pand uit de BAG. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\PandIOHal**](../Model/PandIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pandIdentificatieVoorkomen**
> \Kadaster\BagApiClient\Model\PandIOHal pandIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs)

bevragen voorkomen van een pand met de identificatie van een pand en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

Bevragen/raadplegen van een voorkomen van een pand met de identificatie van een pand en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\PandIdentificatie(); // \Kadaster\BagApiClient\Model\PandIdentificatie | De identificatie van een pand uit de BAG.
$versie = 56; // int | De versie van een voorkomen van een object.
$timestamp_registratie_lv = "timestamp_registratie_lv_example"; // string | Een timestamp van het tijdstip waarop een voorkomen is geregistreerd  in de LV BAG.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.

try {
    $result = $apiInstance->pandIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\PandIdentificatie**](../Model/.md)| De identificatie van een pand uit de BAG. |
 **versie** | **int**| De versie van een voorkomen van een object. |
 **timestamp_registratie_lv** | **string**| Een timestamp van het tijdstip waarop een voorkomen is geregistreerd  in de LV BAG. |
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\PandIOHal**](../Model/PandIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pandLvcIdentificatie**
> \Kadaster\BagApiClient\Model\PandIOLvcHalCollection pandLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs)

bevragen levenscyclus van een pand met de identificatie van een pand.

Bevragen/raadplegen van de levenscyclus van een pand met de identificatie van een pand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\PandIdentificatie(); // \Kadaster\BagApiClient\Model\PandIdentificatie | De identificatie van een pand uit de BAG.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false).
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.

try {
    $result = $apiInstance->pandLvcIdentificatie($identificatie, $gehele_lvc, $accept_crs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->pandLvcIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\PandIdentificatie**](../Model/.md)| De identificatie van een pand uit de BAG. |
 **gehele_lvc** | **bool**| Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). | [optional] [default to false]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\PandIOLvcHalCollection**](../Model/PandIOLvcHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekPanden**
> \Kadaster\BagApiClient\Model\PandIOHalCollection zoekPanden($geldig_op, $beschikbaar_op, $huidig, $content_crs, $accept_crs, $page, $page_size, $point, $bbox, $status_pand, $geconstateerd, $bouwjaar_min, $bouwjaar_max, $adresseerbaar_object_identificatie, $nummeraanduiding_identificatie)

Zoek panden met een geometrische locatie, binnen een bounding box,  met een adresseerbaar object identificatie of met een nummeraanduiding  identificatie.

Zoek actuele panden:  1. met een geometrische locatie.  2. binnen een geometrische contour (rechthoek) die voldoen aan de opgegeven status, geconstateerd of bouwjaar.  3. met de identificatie van een adresseerbaar object  4. met de identificatie van een nummeraanduiding  Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).   Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\PandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$content_crs = "content_crs_example"; // string | CRS van de meegegeven geometrie.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina
$point = new \Kadaster\BagApiClient\Model\PointGeoJSON(); // \Kadaster\BagApiClient\Model\PointGeoJSON | Punt conform OGC API Features standaard. Met de content-crs header wordt aangegeven in welk CRS de coördinaten van het punt is.
$bbox = array(3.4); // float[] | Rechthoek (bounding box) waarbinnen het object dat je zoekt valt. Voor een definitie van bbox, zie [OGC API Features specificatie - bbox definitie](https://docs.opengeospatial.org/is/17-069r3/17-069r3.html#ats_core_fc-bbox-definition). Met de content-crs header wordt aangegeven in welk CRS de coördinaten van de bbox zijn.  Coördinaten worden als volgt opgegeven: linksonder x, linksonder y, rechtsboven x, rechtsboven y. De oppervlakte van de bounding box mag maximaal 250.000 vierkante meter zijn.
$status_pand = array(new \Kadaster\BagApiClient\Model\StatusPand()); // \Kadaster\BagApiClient\Model\StatusPand[] | Status van het pand.
$geconstateerd = true; // bool | Geeft aan of naar geconstateerde objecten moet worden gezocht.
$bouwjaar_min = 56; // int | 
$bouwjaar_max = 56; // int | 
$adresseerbaar_object_identificatie = new \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie(); // \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie | Identificatie van een adresseerbaar object uit de BAG.
$nummeraanduiding_identificatie = new \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie(); // \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie | De identificatie van een nummeraanduiding uit de BAG.

try {
    $result = $apiInstance->zoekPanden($geldig_op, $beschikbaar_op, $huidig, $content_crs, $accept_crs, $page, $page_size, $point, $bbox, $status_pand, $geconstateerd, $bouwjaar_min, $bouwjaar_max, $adresseerbaar_object_identificatie, $nummeraanduiding_identificatie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PandApi->zoekPanden: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **content_crs** | **string**| CRS van de meegegeven geometrie. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]
 **point** | [**\Kadaster\BagApiClient\Model\PointGeoJSON**](../Model/.md)| Punt conform OGC API Features standaard. Met de content-crs header wordt aangegeven in welk CRS de coördinaten van het punt is. | [optional]
 **bbox** | [**float[]**](../Model/float.md)| Rechthoek (bounding box) waarbinnen het object dat je zoekt valt. Voor een definitie van bbox, zie [OGC API Features specificatie - bbox definitie](https://docs.opengeospatial.org/is/17-069r3/17-069r3.html#ats_core_fc-bbox-definition). Met de content-crs header wordt aangegeven in welk CRS de coördinaten van de bbox zijn.  Coördinaten worden als volgt opgegeven: linksonder x, linksonder y, rechtsboven x, rechtsboven y. De oppervlakte van de bounding box mag maximaal 250.000 vierkante meter zijn. | [optional]
 **status_pand** | [**\Kadaster\BagApiClient\Model\StatusPand[]**](../Model/\Kadaster\BagApiClient\Model\StatusPand.md)| Status van het pand. | [optional]
 **geconstateerd** | **bool**| Geeft aan of naar geconstateerde objecten moet worden gezocht. | [optional]
 **bouwjaar_min** | **int**|  | [optional]
 **bouwjaar_max** | **int**|  | [optional]
 **adresseerbaar_object_identificatie** | [**\Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie**](../Model/.md)| Identificatie van een adresseerbaar object uit de BAG. | [optional]
 **nummeraanduiding_identificatie** | [**\Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie**](../Model/.md)| De identificatie van een nummeraanduiding uit de BAG. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\PandIOHalCollection**](../Model/PandIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

