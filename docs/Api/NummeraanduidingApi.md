# Kadaster\BagApiClient\NummeraanduidingApi

All URIs are relative to *https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**nummeraanduidingIdentificatie**](NummeraanduidingApi.md#nummeraanduidingidentificatie) | **GET** /nummeraanduidingen/{nummeraanduidingIdentificatie} | bevragen van een nummeraanduiding op basis van de identificatie van een nummeraanduiding
[**nummeraanduidingIdentificatieVoorkomen**](NummeraanduidingApi.md#nummeraanduidingidentificatievoorkomen) | **GET** /nummeraanduidingen/{nummeraanduidingIdentificatie}/{versie}/{timestampRegistratieLv} | bevragen van een voorkomen van een nummeraanduiding, op basis van de identificatie van een nummeraanduiding en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.
[**nummeraanduidingLvcIdentificatie**](NummeraanduidingApi.md#nummeraanduidinglvcidentificatie) | **GET** /nummeraanduidingen/{nummeraanduidingIdentificatie}/lvc | bevragen levenscyclus van een nummeraanduiding met de identificatie van een nummeraanduiding.
[**zoekNummeraanduiding**](NummeraanduidingApi.md#zoeknummeraanduiding) | **GET** /nummeraanduidingen | bevragen nummeraanduiding(en) op basis van verschillende combinaties van parameters.

# **nummeraanduidingIdentificatie**
> \Kadaster\BagApiClient\Model\NummeraanduidingIOHal nummeraanduidingIdentificatie($nummeraanduiding_identificatie, $geldig_op, $beschikbaar_op, $expand, $huidig)

bevragen van een nummeraanduiding op basis van de identificatie van een nummeraanduiding

Bevragen/raadplegen van één nummeraanduiding met de identificatie van een nummeraanduiding. Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature). De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).  Als expand=ligtInWoonplaats, ligtAanOpenbareRuimte of als expand=true dan worden de gevraagde of alle gerelateerde objecten als geneste resources geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\NummeraanduidingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nummeraanduiding_identificatie = new \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie(); // \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie | De identificatie van een nummeraanduiding uit de BAG.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.

try {
    $result = $apiInstance->nummeraanduidingIdentificatie($nummeraanduiding_identificatie, $geldig_op, $beschikbaar_op, $expand, $huidig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NummeraanduidingApi->nummeraanduidingIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nummeraanduiding_identificatie** | [**\Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie**](../Model/.md)| De identificatie van een nummeraanduiding uit de BAG. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\NummeraanduidingIOHal**](../Model/NummeraanduidingIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nummeraanduidingIdentificatieVoorkomen**
> \Kadaster\BagApiClient\Model\NummeraanduidingIOHal nummeraanduidingIdentificatieVoorkomen($nummeraanduiding_identificatie, $versie, $timestamp_registratie_lv)

bevragen van een voorkomen van een nummeraanduiding, op basis van de identificatie van een nummeraanduiding en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

Bevragen/raadplegen van een voorkomen van een nummeraanduiding met de identificatie van een nummeraanduiding en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\NummeraanduidingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nummeraanduiding_identificatie = new \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie(); // \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie | De identificatie van een nummeraanduiding uit de BAG.
$versie = 56; // int | De versie van een voorkomen van een object.
$timestamp_registratie_lv = "timestamp_registratie_lv_example"; // string | Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG.

try {
    $result = $apiInstance->nummeraanduidingIdentificatieVoorkomen($nummeraanduiding_identificatie, $versie, $timestamp_registratie_lv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NummeraanduidingApi->nummeraanduidingIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nummeraanduiding_identificatie** | [**\Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie**](../Model/.md)| De identificatie van een nummeraanduiding uit de BAG. |
 **versie** | **int**| De versie van een voorkomen van een object. |
 **timestamp_registratie_lv** | **string**| Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG. |

### Return type

[**\Kadaster\BagApiClient\Model\NummeraanduidingIOHal**](../Model/NummeraanduidingIOHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nummeraanduidingLvcIdentificatie**
> \Kadaster\BagApiClient\Model\NummeraanduidingIOLvcHalCollection nummeraanduidingLvcIdentificatie($nummeraanduiding_identificatie, $gehele_lvc)

bevragen levenscyclus van een nummeraanduiding met de identificatie van een nummeraanduiding.

Bevragen/raadplegen van de levenscyclus van één nummeraanduiding met de identificatie van een nummeraanduiding.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\NummeraanduidingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nummeraanduiding_identificatie = new \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie(); // \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie | De identificatie van een nummeraanduiding uit de BAG.
$gehele_lvc = false; // bool | Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false).

try {
    $result = $apiInstance->nummeraanduidingLvcIdentificatie($nummeraanduiding_identificatie, $gehele_lvc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NummeraanduidingApi->nummeraanduidingLvcIdentificatie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nummeraanduiding_identificatie** | [**\Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie**](../Model/.md)| De identificatie van een nummeraanduiding uit de BAG. |
 **gehele_lvc** | **bool**| Filtert naast geldige voorkomens ook de voorkomens die uit de geldige levenscyclus van het object zijn verwijderd. Als deze parameter wordt weggelaten worden alleen geldige voorkomens geretourneerd (default is false). | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\NummeraanduidingIOLvcHalCollection**](../Model/NummeraanduidingIOLvcHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekNummeraanduiding**
> \Kadaster\BagApiClient\Model\NummeraanduidingIOHalCollection zoekNummeraanduiding($postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $woonplaats_naam, $openbare_ruimte_naam, $openbare_ruimte_identificatie, $huidig, $geldig_op, $beschikbaar_op, $page, $page_size, $expand, $pand_identificatie)

bevragen nummeraanduiding(en) op basis van verschillende combinaties van parameters.

De volgende (combinaties van) parameters worden ondersteund:  1. Bevragen/raadplegen van een (collectie van) nummeraanduiding(en) met postcode en huisnummer (evt. met huisletter en huisnummertoevoeging).  2. Bevragen/raadplegen van een (collectie van) nummeraanduiding(en) met woonplaats naam, openbare ruimte naam, huisnummer en optioneel huisnummertoevoeging en huisletter.  3. Bevragen/zoeken van alle aan een openbare ruimte gerelateerde nummeraanduidingen met een openbare ruimte identificatie.     Expand wordt niet ondersteund.     4. Bevragen/zoeken van nummeraanduidingen met een pand identificatie.    Expand wordt niet ondersteund.   Bij de bovenstaande bevragingen kunnen (tenzij anders vermeld) de volgende parameters worden gebruikt: geldigOp, beschikbaarOp, huidig, page en pageSize.  Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).  De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).   Parameter huidig kan worden toegepast, zie [functionele specificatie huidig](https://github.com/lvbag/BAG-API/blob/master/Features/huidig.feature).  Als expand=ligtInWoonplaats, ligtAanOpenbareRuimte of als expand=true dan worden de gevraagde of alle gerelateerde objecten als geneste resources geleverd, zie [functionele specificatie expand](https://github.com/lvbag/BAG-API/blob/master/Features/expand.feature).   Met de exacteMatch parameter kan worden aangegeven dat alleen object(en) die exact overeenkomen met de opgegeven parameters, geretourneerd moeten worden, zie [functionele specificatie exacte match](https://github.com/lvbag/BAG-API/blob/master/Features/exacte_matchnd.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\NummeraanduidingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postcode = "postcode_example"; // string | Postcode behorende bij een nummeraanduiding.
$huisnummer = 56; // int | Huisnummer behorende bij een nummeraanduiding.
$huisnummertoevoeging = "huisnummertoevoeging_example"; // string | Huisnummertoevoeging behorende bij een nummeraanduiding.
$huisletter = "huisletter_example"; // string | Huisletter behorende bij een nummeraanduiding.
$exacte_match = false; // bool | Een indicatie of de resultaten van een zoekoperatie exact overeen  moeten komen met de zoekcriteria, zie  [functionele specificatie exacte match](https://github.com/lvbag/BAG-API/blob/master/Features/exacte_match.feature).
$woonplaats_naam = "woonplaats_naam_example"; // string | De naam van een woonplaats.
$openbare_ruimte_naam = "openbare_ruimte_naam_example"; // string | De naam van een openbare ruimte.
$openbare_ruimte_identificatie = new \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie(); // \Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie | De identificatie van een openbare ruimte uit de BAG.
$huidig = false; // bool | Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina
$expand = "expand_example"; // string | Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt.
$pand_identificatie = new \Kadaster\BagApiClient\Model\PandIdentificatie(); // \Kadaster\BagApiClient\Model\PandIdentificatie | De identificatie van een pand uit de BAG.

try {
    $result = $apiInstance->zoekNummeraanduiding($postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $woonplaats_naam, $openbare_ruimte_naam, $openbare_ruimte_identificatie, $huidig, $geldig_op, $beschikbaar_op, $page, $page_size, $expand, $pand_identificatie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NummeraanduidingApi->zoekNummeraanduiding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postcode** | **string**| Postcode behorende bij een nummeraanduiding. | [optional]
 **huisnummer** | **int**| Huisnummer behorende bij een nummeraanduiding. | [optional]
 **huisnummertoevoeging** | **string**| Huisnummertoevoeging behorende bij een nummeraanduiding. | [optional]
 **huisletter** | **string**| Huisletter behorende bij een nummeraanduiding. | [optional]
 **exacte_match** | **bool**| Een indicatie of de resultaten van een zoekoperatie exact overeen  moeten komen met de zoekcriteria, zie  [functionele specificatie exacte match](https://github.com/lvbag/BAG-API/blob/master/Features/exacte_match.feature). | [optional] [default to false]
 **woonplaats_naam** | **string**| De naam van een woonplaats. | [optional]
 **openbare_ruimte_naam** | **string**| De naam van een openbare ruimte. | [optional]
 **openbare_ruimte_identificatie** | [**\Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie**](../Model/.md)| De identificatie van een openbare ruimte uit de BAG. | [optional]
 **huidig** | **bool**| Indicatie dat alleen actuele object voorkomens zonder eindstatus gewenst zijn. | [optional] [default to false]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]
 **expand** | **string**| Hier kan aangegeven worden welke gerelateerde resources meegeladen moeten worden. Resources en velden van resources die gewenst zijn kunnen in de expand parameter kommagescheiden worden opgegeven. Specifieke velden van resource kunnen worden opgegeven door het opgeven van de resource-naam gevolgd door de veldnaam, met daartussen een punt. | [optional]
 **pand_identificatie** | [**\Kadaster\BagApiClient\Model\PandIdentificatie**](../Model/.md)| De identificatie van een pand uit de BAG. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\NummeraanduidingIOHalCollection**](../Model/NummeraanduidingIOHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

