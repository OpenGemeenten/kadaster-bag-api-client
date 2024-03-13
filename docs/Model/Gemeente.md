# Gemeente

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Een officiële code die aan een gemeente is toegekend, ontleend is aan  tabel 33 en zoals bijgehouden in de LVBAG.  Dit gegeven is geen officieel BAG gegeven en wordt niet als kenmerk van  het BAG object Woonplaats object bijgehouden.  Het wordt als hulpgegeven meegeleverd. | 
**naam** | **string** | Een officiële naam die aan een gemeente is toegekend. | 
**begin_geldigheid** | [**\DateTime**](\DateTime.md) | De datum waarop een versie van een bronhouder geldig is in de werkelijkheid.  Dit tijdstip wordt vastgelegd in de beginGeldigheid. | 
**eind_geldigheid** | [**\DateTime**](\DateTime.md) | De datum waarop de periode van geldigheid van een versie van een bronhouder  eindigt.  Wanneer er geen tijdstip is ingevuld, dan is de versie nog geldig.  Dit tijdstip wordt vastgelegd in de eindGeldigheid. | [optional] 
**provincie** | [**\Kadaster\BagApiClient\Model\Provincie**](Provincie.md) |  | 
**status** | [**\Kadaster\BagApiClient\Model\StatusGemeente**](StatusGemeente.md) |  | 
**versie** | **int** | De identificatie van een voorkomen van een object. | 
**tijdstip_registratie_lv** | [**\DateTime**](\DateTime.md) | Dit is het tijdstip (conform RFC 3339) waarop een versie van een object of een relatie is opgenomen in de registratie van de landelijke voorziening. De gegevens komen daarmee beschikbaar voor afnemers. | 
**tijdstip_eind_registratie_lv** | [**\DateTime**](\DateTime.md) | Dit is het tijdstip (conform RFC 3339) waarop een versie van een object of een relatie is beëindigd in de registratie van de landelijke voorziening. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

