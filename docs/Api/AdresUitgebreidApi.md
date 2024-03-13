# Kadaster\BagApiClient\AdresUitgebreidApi

All URIs are relative to *https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bevraagAdresUitgebreidMetNumId**](AdresUitgebreidApi.md#bevraagadresuitgebreidmetnumid) | **GET** /adressenuitgebreid/{nummeraanduidingIdentificatie} | Bevragen van de uitgebreide informatie van één huidig adres met de  identificatie van een nummeraanduiding.
[**zoekAdresUitgebreid**](AdresUitgebreidApi.md#zoekadresuitgebreid) | **GET** /adressenuitgebreid | Bevragen van de uitgebreide informatie van één of meer huidige adressen  op basis van verschillende combinaties van parameters.

# **bevraagAdresUitgebreidMetNumId**
> \Kadaster\BagApiClient\Model\AdresUitgebreidHal bevraagAdresUitgebreidMetNumId($nummeraanduiding_identificatie, $accept_crs, $inclusief_eind_status)

Bevragen van de uitgebreide informatie van één huidig adres met de  identificatie van een nummeraanduiding.

Bevragen van de uitgebreide informatie van één huidig adres met de  identificatie van een nummeraanduiding.  Als inclusiefEindStatus=true, dan worden ook actuele adressen met een eind status geleverd, zie [functionele specificatie inclusiefEindstatus](https://github.com/lvbag/BAG-API/blob/master/Features/inclusief-eind-status.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\AdresUitgebreidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nummeraanduiding_identificatie = new \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie(); // \Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie | De identificatie van een nummeraanduiding uit de BAG.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$inclusief_eind_status = false; // bool | Een indicatie of ook actuele voorkomens met een eind status geleverd moeten worden.

try {
    $result = $apiInstance->bevraagAdresUitgebreidMetNumId($nummeraanduiding_identificatie, $accept_crs, $inclusief_eind_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresUitgebreidApi->bevraagAdresUitgebreidMetNumId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nummeraanduiding_identificatie** | [**\Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie**](../Model/.md)| De identificatie van een nummeraanduiding uit de BAG. |
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **inclusief_eind_status** | **bool**| Een indicatie of ook actuele voorkomens met een eind status geleverd moeten worden. | [optional] [default to false]

### Return type

[**\Kadaster\BagApiClient\Model\AdresUitgebreidHal**](../Model/AdresUitgebreidHal.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoekAdresUitgebreid**
> \Kadaster\BagApiClient\Model\AdresUitgebreidHalCollection zoekAdresUitgebreid($postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $adresseerbaar_object_identificatie, $woonplaats_naam, $openbare_ruimte_naam, $accept_crs, $page, $page_size, $q, $inclusief_eind_status, $pand_identificatie)

Bevragen van de uitgebreide informatie van één of meer huidige adressen  op basis van verschillende combinaties van parameters.

De volgende (combinaties van) parameters worden ondersteund:  1. Bevragen van de uitgebreide informatie van één of meer huidige     adressen met een postcode, huisnummer en optioneel     huisnummertoevoeging en huisletter.    Het opgeven van een combinatie van parameters levert niet altijd     een exacte match met één adres, bv. in geval van meerdere objecten     met huisnummertoevoegingen en/of huisletters.     Met de exacteMatch parameter kan worden aangegeven dat alleen     object(en) die exact overeenkomen met de opgegeven parameters,     geretourneerd moeten worden.  2. Bevragen van de uitgebreide informatie van één of meer huidige     adressen met de identificatie van een adresseerbaar object.  3. Bevragen van de uitgebreide informatie van één of meer huidige     adressen met woonplaats naam, openbare ruimte naam, huisnummer     en optioneel huisnummertoevoeging en huisletter.    Het opgeven van een combinatie van parameters levert niet altijd     een exacte match met één adres, bv. in geval van meerdere objecten     met huisnummertoevoegingen en/of huisletters.     Met de exacteMatch parameter kan worden aangegeven dat alleen     object(en) die exact overeenkomen met de opgegeven parameters,     geretourneerd moeten worden.  4. Zoek uitgebreide adres informatie van huidige adressen met een     zoekterm.  5. Bevragen van de uitgebreide informatie van één of meer huidige     adressen met de identificatie van een pand.   Voor paginering, zie: [functionele specificatie paginering](https://github.com/lvbag/BAG-API/blob/master/Features/paginering.feature).  Als inclusiefEindStatus=true, dan worden ook actuele adressen met een eind status geleverd, zie [functionele specificatie inclusiefEindstatus](https://github.com/lvbag/BAG-API/blob/master/Features/inclusief-eind-status.feature).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyBAG
$config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kadaster\BagApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Kadaster\BagApiClient\Api\AdresUitgebreidApi(
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
$adresseerbaar_object_identificatie = new \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie(); // \Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie | Identificatie van een adresseerbaar object uit de BAG.
$woonplaats_naam = "woonplaats_naam_example"; // string | Naam van een woonplaats.
$openbare_ruimte_naam = "openbare_ruimte_naam_example"; // string | Naam van een openbare ruimte.
$accept_crs = "accept_crs_example"; // string | Gewenste CRS van de coördinaten in de response.
$page = 1; // int | Pagina nummer
$page_size = 20; // int | Aantal resultaten per pagina
$q = "q_example"; // string | Zoekterm op postcode, woonplaats, straatnaam, huisnummer, huisletter,  huisnummertoevoeging.
$inclusief_eind_status = false; // bool | Een indicatie of ook actuele voorkomens met een eind status geleverd moeten worden.
$pand_identificatie = new \Kadaster\BagApiClient\Model\PandIdentificatie(); // \Kadaster\BagApiClient\Model\PandIdentificatie | De identificatie van een pand uit de BAG.

try {
    $result = $apiInstance->zoekAdresUitgebreid($postcode, $huisnummer, $huisnummertoevoeging, $huisletter, $exacte_match, $adresseerbaar_object_identificatie, $woonplaats_naam, $openbare_ruimte_naam, $accept_crs, $page, $page_size, $q, $inclusief_eind_status, $pand_identificatie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdresUitgebreidApi->zoekAdresUitgebreid: ', $e->getMessage(), PHP_EOL;
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
 **adresseerbaar_object_identificatie** | [**\Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie**](../Model/.md)| Identificatie van een adresseerbaar object uit de BAG. | [optional]
 **woonplaats_naam** | **string**| Naam van een woonplaats. | [optional]
 **openbare_ruimte_naam** | **string**| Naam van een openbare ruimte. | [optional]
 **accept_crs** | **string**| Gewenste CRS van de coördinaten in de response. | [optional]
 **page** | **int**| Pagina nummer | [optional] [default to 1]
 **page_size** | **int**| Aantal resultaten per pagina | [optional] [default to 20]
 **q** | **string**| Zoekterm op postcode, woonplaats, straatnaam, huisnummer, huisletter,  huisnummertoevoeging. | [optional]
 **inclusief_eind_status** | **bool**| Een indicatie of ook actuele voorkomens met een eind status geleverd moeten worden. | [optional] [default to false]
 **pand_identificatie** | [**\Kadaster\BagApiClient\Model\PandIdentificatie**](../Model/.md)| De identificatie van een pand uit de BAG. | [optional]

### Return type

[**\Kadaster\BagApiClient\Model\AdresUitgebreidHalCollection**](../Model/AdresUitgebreidHalCollection.md)

### Authorization

[apiKeyBAG](../../README.md#apiKeyBAG)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

