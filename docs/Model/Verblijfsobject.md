# Verblijfsobject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identificatie** | [**\Kadaster\BagApiClient\Model\VerblijfsobjectIdentificatie**](VerblijfsobjectIdentificatie.md) |  | 
**domein** | **string** | NL.IMBAG.Verblijfsobject | 
**geometrie** | [**\Kadaster\BagApiClient\Model\PuntOfVlak**](PuntOfVlak.md) |  | 
**gebruiksdoelen** | [**\Kadaster\BagApiClient\Model\Gebruiksdoel[]**](Gebruiksdoel.md) |  | 
**oppervlakte** | **int** | De gebruiksoppervlakte van een verblijfsobject in gehele vierkante meters. | 
**status** | [**\Kadaster\BagApiClient\Model\StatusVerblijfsobject**](StatusVerblijfsobject.md) |  | 
**geconstateerd** | [**\Kadaster\BagApiClient\Model\Indicatie**](Indicatie.md) |  | 
**documentdatum** | [**\DateTime**](\DateTime.md) | De datum waarop het brondocument is vastgesteld, op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een object heeft plaatsgevonden. | 
**documentnummer** | **string** | De unieke aanduiding van het brondocument op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een woonplaats heeft plaatsgevonden, binnen een gemeente. Alle karakters uit de MES-1 karakterset zijn toegestaan. | 
**voorkomen** | [**\Kadaster\BagApiClient\Model\VoorkomenLV**](VoorkomenLV.md) |  | 
**maakt_deel_uit_van** | [**\Kadaster\BagApiClient\Model\PandIdentificatie[]**](PandIdentificatie.md) | Een verblijfsobject maakt onderdeel uit van een pand.  Deze property bevat de identificaties van de panden waar het verblijfsobject onderdeel van uitmaakt. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

