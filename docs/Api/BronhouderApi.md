# Kadaster\BagApiClient\BronhouderApi

All URIs are relative to *https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bevragenBronhouder**](BronhouderApi.md#bevragenbronhouder) | **GET** /bronhouders/{identificatie} | Bevragen bronhouder met de bronhouder identificatie (gemeentecode).
[**bronhouderIdentificatieVoorkomen**](BronhouderApi.md#bronhouderidentificatievoorkomen) | **GET** /bronhouders/{identificatie}/{versie}/{timestampRegistratieLv} | bevragen voorkomen van een bronhouder met de identificatie van een bronhouder en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.
[**zoekBronhouder**](BronhouderApi.md#zoekbronhouder) | **GET** /bronhouders | Bevragen bronhouder met een object identificatie.

# **bevragenBronhouder**
> \Kadaster\BagApiClient\Model\BronhouderHal bevragenBronhouder($identificatie, $geldig_op, $beschikbaar_op)

Bevragen bronhouder met de bronhouder identificatie (gemeentecode).

Bevragen/raadplegen van een bronhouder met de identificatie van een bronhouder (gemeentecode). De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\BronhouderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\GemeenteCode(); // \Kadaster\BagApiClient\Model\GemeenteCode | Een officiële code die aan een gemeente is toegekend en ontleend is  aan tabel 33.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).

try {
    $result = $apiInstance->bevragenBronhouder($identificatie, $geldig_op, $beschikbaar_op);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BronhouderApi->bevragenBronhouder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\GemeenteCode**](../Model/.md)| Een officiële code die aan een gemeente is toegekend en ontleend is  aan tabel 33. |
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\BronhouderHal**](../Model/BronhouderHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bronhouderIdentificatieVoorkomen**
> \Kadaster\BagApiClient\Model\BronhouderHal bronhouderIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv)

bevragen voorkomen van een bronhouder met de identificatie van een bronhouder en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

Bevragen/raadplegen van een voorkomen van een bronhouder met de identificatie van een bronhouder en de identificatie van een voorkomen, bestaande uit een versie en een timestamp van het tijdstip van registratie in de LV BAG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\BronhouderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identificatie = new \Kadaster\BagApiClient\Model\GemeenteCode(); // \Kadaster\BagApiClient\Model\GemeenteCode | Een officiële code die aan een gemeente is toegekend en ontleend is  aan tabel 33.
$versie = 56; // int | De versie van een voorkomen van een object.
$timestamp_registratie_lv = "timestamp_registratie_lv_example"; // string | Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG.

try {
    $result = $apiInstance->bronhouderIdentificatieVoorkomen($identificatie, $versie, $timestamp_registratie_lv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BronhouderApi->bronhouderIdentificatieVoorkomen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identificatie** | [**\Kadaster\BagApiClient\Model\GemeenteCode**](../Model/.md)| Een officiële code die aan een gemeente is toegekend en ontleend is  aan tabel 33. |
 **versie** | **int**| De versie van een voorkomen van een object. |
 **timestamp_registratie_lv** | **string**| Een timestamp van het tijdstip waarop een voorkomen is geregistreerd in de LV BAG. |

### Return type

[**\Kadaster\BagApiClient\Model\BronhouderHal**](../Model/BronhouderHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekBronhouder**
> \Kadaster\BagApiClient\Model\BronhouderHalCollection zoekBronhouder($woonplaats_identificatie, $object_identificatie, $geldig_op, $beschikbaar_op)

Bevragen bronhouder met een object identificatie.

Bevragen/raadplegen van een bronhouder met de identificatie van een object. De identificatie van één van de objecten: woonplaats, openbare ruimte, nummeraanduiding, ligplaats, standplaats, verblijfsobject of pand dient gespecificeerd te worden:<br/> De geldigOp en beschikbaarOp parameters kunnen gebruikt worden voor  tijdreis vragen, zie  [functionele specificatie tijdreizen](https://github.com/lvbag/BAG-API/blob/master/Features/tijdreizen.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\BronhouderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$woonplaats_identificatie = new \Kadaster\BagApiClient\Model\WoonplaatsIdentificatie(); // \Kadaster\BagApiClient\Model\WoonplaatsIdentificatie | De identificatie van een woonplaats uit de BAG.
$object_identificatie = "object_identificatie_example"; // string | De identificatie van een object uit de BAG. Deze is 4 lang bij een  woonplaats en 16 lang bij de andere objecten.
$geldig_op = new \DateTime("2013-10-20"); // \DateTime | Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD` Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).
$beschikbaar_op = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  `YYYY-MM-DDThh:mm:ss.sss'. Hierin kunnen de seconden ':ss' en milliseconden  '.sss' of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde ':00'  respectievelijk '.000'. Indien er voor de milliseconden '.sss' meer dan 3  cijfers worden opgegeven, bv. '.12345', dan wordt dit afgekapt tot '.123'. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal).

try {
    $result = $apiInstance->zoekBronhouder($woonplaats_identificatie, $object_identificatie, $geldig_op, $beschikbaar_op);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BronhouderApi->zoekBronhouder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **woonplaats_identificatie** | [**\Kadaster\BagApiClient\Model\WoonplaatsIdentificatie**](../Model/.md)| De identificatie van een woonplaats uit de BAG. | [optional]
 **object_identificatie** | **string**| De identificatie van een object uit de BAG. Deze is 4 lang bij een  woonplaats en 16 lang bij de andere objecten. | [optional]
 **geldig_op** | **\DateTime**| Filtert op objecten die geldig zijn op de opgegeven datum &#x60;JJJJ-MM-DD&#x60; Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]
 **beschikbaar_op** | **\DateTime**| Filtert op objecten die beschikbaar zijn op de opgegeven datum en tijd  &#x60;YYYY-MM-DDThh:mm:ss.sss&#x27;. Hierin kunnen de seconden &#x27;:ss&#x27; en milliseconden  &#x27;.sss&#x27; of alleen de milliseconden conform ISO 8601 specificatie worden  weggelaten, in dat geval krijgen deze automatisch de waarde &#x27;:00&#x27;  respectievelijk &#x27;.000&#x27;. Indien er voor de milliseconden &#x27;.sss&#x27; meer dan 3  cijfers worden opgegeven, bv. &#x27;.12345&#x27;, dan wordt dit afgekapt tot &#x27;.123&#x27;. Deze parameter komt uit de API strategie, het hoofdstuk  [Temporal](https://docs.geostandaarden.nl/api/API-Strategie-ext/#temporal). | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\BronhouderHalCollection**](../Model/BronhouderHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

