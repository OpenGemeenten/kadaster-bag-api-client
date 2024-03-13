# VoorkomenLV

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tijdstip_registratie** | [**\DateTime**](\DateTime.md) | Het tijdstip waarop een versie van een BAG-object is geregistreerd in de registratie van een bronhouder en daarmee authentiek wordt gemaakt. | 
**versie** | **int** | De identificatie van een voorkomen van een object. | 
**eind_registratie** | [**\DateTime**](\DateTime.md) | Het tijdstip waarop een versie van een BAG-object is beëindigd in de registratie van een bronhouder. | [optional] 
**begin_geldigheid** | [**\DateTime**](\DateTime.md) | De datum waarop een versie van een BAG-object geldig is in de werkelijkheid conform de ingangsdatum in het brondocument. Dit tijdstip wordt vastgelegd in de beginGeldigheid. Als er geen expliciete ingangsdatum van geldigheid is opgenomen, wordt de datum van het brondocument overgenomen. | 
**eind_geldigheid** | [**\DateTime**](\DateTime.md) | De datum waarop de periode van geldigheid van een versie van een BAG-object eindigt. Bijvoorbeeld als gevolg van de vaststelling van een nieuw brondocument. Wanneer er geen tijdstip is ingevuld, dan is de versie nog geldig. | [optional] 
**tijdstip_inactief** | [**\DateTime**](\DateTime.md) | Het tijdstip waarop een op dat moment toekomstig voorkomen door een bronhouder uit de geldige levenscylcus in de LV BAG is verwijderd. | [optional] 
**tijdstip_registratie_lv** | [**\DateTime**](\DateTime.md) | Dit is het tijdstip waarop een versie van een BAG-object is opgenomen in de registratie van de landelijke voorziening. De gegevens komen daarmee beschikbaar voor afnemers. | 
**tijdstip_niet_bag** | [**\DateTime**](\DateTime.md) | Het tijdstip waarop een voorkomen door een synchronisatie bericht van een bronhouder is verwijderd uit de geldige levenscylcus in de registratie van de landelijke voorziening. | [optional] 
**tijdstip_eind_registratie_lv** | [**\DateTime**](\DateTime.md) | Dit is het tijdstip waarop een versie van een BAG-object is beëindigd in de registratie van de landelijke voorziening. | [optional] 
**tijdstip_inactief_lv** | [**\DateTime**](\DateTime.md) | Dit is het tijdstip waarop een toekomstig voorkomen van een BAG-object uit de geldige levenscylcus is verwijderd in de registratie van de landelijke voorziening. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

