# Generating PHP using OpenAPI/Swagger specifications

The BAG API is using the OpenAPI/Swagger 3.0 specification, which means you can have PHP classes generated
automatically.

The URL for the BAG Swagger UI is https://lvbag.github.io/BAG-API/Technische%20specificatie/

## Prerequisites

* Make sure the JAVA JDK is at version 17 at least
* Download the latest stable version of the code generator at https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/

## Generate

Go one level before the root of this repository and enter the following in CLI:
`java -jar swagger-codegen-cli.jar generate -i https://api.bag.kadaster.nl/lvbag/individuelebevragingen/v2/openapi.json -l php -o kadaster-bag-api-client`

## Namespaces

The generator will use the namespace `Swagger\Client` for the generated PHP classes. This is not desired, especially
when combining multiple Swagger API's. 

Therefor we renamed the namespace to `Kadaster\BapApiClient`
