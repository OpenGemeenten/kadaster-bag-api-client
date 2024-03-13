# Kadaster\BagApiClient\OpenbareRuimteApi

All URIs are relative to *https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**openbareruimteIdentificatie**](OpenbareRuimteApi.md#openbareruimteidentificatie) | **GET** /openbareruimten/{openbareRuimteIdentificatie} | bevragen van een openbare ruimte met de identificatie van een openbare ruimte.
[**openbareruimteIdentificatieVoorkomen**](OpenbareRuimteApi.md#openbareruimteidentificatievoorkomen) | **GET** /openbareruimten/{openbareRuimteIdentificatie}/{versie}/{timestampRegistratieLv} | bevragen van een voorkomen van een openbare ruimte met de identificatie van een openbare ruimte en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.
[**openbareruimteLvcIdentificatie**](OpenbareRuimteApi.md#openbareruimtelvcidentificatie) | **GET** /openbareruimten/{openbareRuimteIdentificatie}/lvc | bevragen levenscyclus van een openbare ruimte met de identificatie van een openbare ruimte.
[**zoekOpenbareRuimten**](OpenbareRuimteApi.md#zoekopenbareruimten) | **GET** /openbareruimten | bevragen openbare ruimte(n) op basis van de verschillende combinaties van parameters.

# **openbareruimteIdentificatie**
> \Kadaster\BagApiClient\Model\OpenbareRuimteIOHal openbareruimteIdentificatie($openbare_ruimte_identificatie, $geldig_op, $beschikbaar_op, $expand, $huidig)

bevragen van een openbare ruimte met de identificatie van een openbare ruimte.

Bevragen/raadplegen van een openbare ruimte met de identificatie van een openbare ruimte. Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature). De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).  Als expand=ligtInWoonplaats of true dan wordt de woonplaats als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\OpenbareRuimteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$openbare_ruimte_identificatie = new \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie(); // \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie | De identificatie van een openbare ruimte uit de BAG.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.

try {
    $result = $apiInstance->openbareruimteIdentificatie($openbare_ruimte_identificatie, $geldig_op, $beschikbaar_op, $expand, $huidig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenbareRuimteApi->openbareruimteIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **openbare_ruimte_identificatie** | [**\Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie**](../Model/.md)| De identificatie van een openbare ruimte uit de BAG. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\OpenbareRuimteIOHal**](../Model/OpenbareRuimteIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **openbareruimteIdentificatieVoorkomen**
> \Kadaster\BagApiClient\Model\OpenbareRuimteIOHal openbareruimteIdentificatieVoorkomen($openbare_ruimte_identificatie, $versie, $timestamp_registratie_lv)

bevragen van een voorkomen van een openbare ruimte met de identificatie van een openbare ruimte en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

Bevragen/raadplegen van een voorkomen van een openbare ruimte met de identificatie van een openbare ruimte en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\OpenbareRuimteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$openbare_ruimte_identificatie = new \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie(); // \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie | De identificatie van een openbare ruimte uit de BAG.
$versie = 56; // int | De versie van een voorkomen van een object.
$timestamp_registratie_lv = "timestamp_registratie_lv_example"; // string | Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG.

try {
    $result = $apiInstance->openbareruimteIdentificatieVoorkomen($openbare_ruimte_identificatie, $versie, $timestamp_registratie_lv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenbareRuimteApi->openbareruimteIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **openbare_ruimte_identificatie** | [**\Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie**](../Model/.md)| De identificatie van een openbare ruimte uit de BAG. |
 **versie** | **int**| De versie van een voorkomen van een object. |
 **timestamp_registratie_lv** | **string**| Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG. |

### Return type

[**\Kadaster\BagApiClient\Model\OpenbareRuimteIOHal**](../Model/OpenbareRuimteIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **openbareruimteLvcIdentificatie**
> \Kadaster\BagApiClient\Model\OpenbareRuimteIOLvcHalCollection openbareruimteLvcIdentificatie($openbare_ruimte_identificatie, $gehele_lvc)

bevragen levenscyclus van een openbare ruimte met de identificatie van een openbare ruimte.

Bevragen/raadplegen van de levenscyclus van één openbare ruimte, via de identificatie van een openbare ruimte.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\OpenbareRuimteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$openbare_ruimte_identificatie = new \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie(); // \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie | De identificatie van een openbare ruimte uit de BAG.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false).

try {
    $result = $apiInstance->openbareruimteLvcIdentificatie($openbare_ruimte_identificatie, $gehele_lvc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenbareRuimteApi->openbareruimteLvcIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **openbare_ruimte_identificatie** | [**\Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie**](../Model/.md)| De identificatie van een openbare ruimte uit de BAG. |
 **gehele_lvc** | **bool**| Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\OpenbareRuimteIOLvcHalCollection**](../Model/OpenbareRuimteIOLvcHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekOpenbareRuimten**
> \Kadaster\BagApiClient\Model\OpenbareRuimteIOHalCollection zoekOpenbareRuimten($woonplaats_naam, $openbare_ruimte_naam, $woonplaats_identificatie, $huidig, $geldig_op, $beschikbaar_op, $page, $page_size, $expand)

bevragen openbare ruimte(n) op basis van de verschillende combinaties van parameters.

De volgende (combinaties van) parameters worden ondersteund:  1. Bevragen/raadplegen van een openbare ruimte met een woonplaats naam en een openbare ruimte naam.    Als expand=ligtInWoonplaats of true dan wordt de woonplaats als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).  2. Bevragen/raadplegen van een openbare ruimte met een woonplaats identificatie en een openbare ruimte naam.    Als expand=ligtInWoonplaats of true dan wordt de woonplaats als geneste resource geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).  3. Bevragen/zoeken van alle aan een woonplaats gerelateerde openbare ruimten met de woonplaats identificatie.    Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).    Expand wordt niet ondersteund.   Bij alle bovenstaande combinaties wordt paginering ondersteund en kunnen de parameters geldigOp en beschikbaarOp worden gebruikt. Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\OpenbareRuimteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$woonplaats_naam = "woonplaats_naam_example"; // string | De naam van een woonplaats object uit de BAG.
$openbare_ruimte_naam = "openbare_ruimte_naam_example"; // string | De naam van een openbare ruimte object uit de BAG.
$woonplaats_identificatie = new \Kadaster\BagApiClient\Model\WoonplaatsIdentificatie(); // \Kadaster\BagApiClient\Model\WoonplaatsIdentificatie | De identificatie van een woonplats uit de BAG.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.

try {
    $result = $apiInstance->zoekOpenbareRuimten($woonplaats_naam, $openbare_ruimte_naam, $woonplaats_identificatie, $huidig, $geldig_op, $beschikbaar_op, $page, $page_size, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenbareRuimteApi->zoekOpenbareRuimten: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **woonplaats_naam** | **string**| De naam van een woonplaats object uit de BAG. | [optional]
 **openbare_ruimte_naam** | **string**| De naam van een openbare ruimte object uit de BAG. | [optional]
 **woonplaats_identificatie** | [**\Kadaster\BagApiClient\Model\WoonplaatsIdentificatie**](../Model/.md)| De identificatie van een woonplats uit de BAG. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\OpenbareRuimteIOHalCollection**](../Model/OpenbareRuimteIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

