# Adres

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**openbare_ruimte_naam** | **string** | Een naam die aan een openbare ruimte is toegekend in een daartoe  strekkend formeel gemeentelijk besluit. Het betreft hier de straatnaam. | 
**korte_naam** | **string** | De officiële openbare ruimte naam als deze niet langer is dan 24 tekens of de volgens de NEN5825 verkorte naam van maximaal 24 tekens. | [optional] 
**huisnummer** | **int** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nummering. | 
**huisletter** | **string** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende toevoeging aan een huisnummer in de vorm van een alfanumeriek teken. | [optional] 
**huisnummertoevoeging** | **string** | Een door of namens het gemeentebestuur ten aanzien van een adresseerbaar object toegekende nadere toevoeging aan een huisnummer of een combinatie van huisnummer en huisletter. | [optional] 
**postcode** | **string** | De door PostNL vastgestelde code behorende bij een bepaalde combinatie van een straatnaam en een huisnummer. | [optional] 
**woonplaats_naam** | **string** | De benaming van een door het gemeentebestuur aangewezen woonplaats. | 
**nummeraanduiding_identificatie** | [**\Kadaster\BagApiClient\Model\NummeraanduidingIdentificatie**](NummeraanduidingIdentificatie.md) |  | 
**openbare_ruimte_identificatie** | [**\Kadaster\BagApiClient\Model\OpenbareRuimteIdentificatie**](OpenbareRuimteIdentificatie.md) |  | 
**woonplaats_identificatie** | [**\Kadaster\BagApiClient\Model\WoonplaatsIdentificatie**](WoonplaatsIdentificatie.md) |  | 
**adresseerbaar_object_identificatie** | [**\Kadaster\BagApiClient\Model\AdresseerbaarObjectIdentificatie**](AdresseerbaarObjectIdentificatie.md) |  | [optional] 
**pand_identificaties** | [**\Kadaster\BagApiClient\Model\PandIdentificatie[]**](PandIdentificatie.md) | Identificatie(s) van het pand of de panden waar het verblijfsobject deel van uit maakt. | [optional] 
**indicatie_nevenadres** | **bool** | Indicatie dat dit adres een nevenadres is van een adresseerbaar object. Het adres is een hoofdadres als deze indicatie niet wordt meegeleverd. | [optional] 
**adresregel5** | **string** | Adresregel 5 zoals beschreven in NEN 5825:2002 paragraaf 7.2. Bevat:  - straatnaam en indien aanwezig huisnummer en huisnummertoevoeging,    waarbij huisnummertoevoeging een huisletter, huisnummertoevoeging of een combinatie van beide kan bevatten of - straatnaam en woonboot- of woonwagenverwijziging of - de aanduiding \&quot;Postbus\&quot; en het postbusnummer of - de aanduiding \&quot;Antwoordnummer\&quot; en het antwoordnummer of - de aanduiding \&quot;PostApart\&quot; en het PostApartnummer | [optional] 
**adresregel6** | **string** | Adresregel 6 zoals beschreven in NEN 5825:2002 paragraaf 7.2. Bevat:   postcode en woonplaats | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

