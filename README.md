# Servicio Postal

Esta api fue construida para obtener los datos de alguna parte del pais de Mexico por medio del codigo postal

#### Url de la api: http://test-app.test/api/zip-code/2010

#### Response:

```
{
    "zip_code": 2010,
    "locality": "Ciudad de México",
    "federal_entity": {
        "id": "09",
        "name": "Ciudad de México"
    },
    "settlements": [
        {
            "id": 2,
            "name": "los reyes",
            "zone_type": "urbano",
            "settlement_type": "barrio",
            "zip_code_id": 2010
        },
        {
            "id": 9,
            "name": "san rafael",
            "zone_type": "urbano",
            "settlement_type": "colonia",
            "zip_code_id": 2010
        },
        {
            "id": 2,
            "name": "nuevo barrio san rafael",
            "zone_type": "urbano",
            "settlement_type": "barrio",
            "zip_code_id": 2010
        }
    ],
    "municipality": {
        "key": "002",
        "name": "Azcapotzalco"
    }
}
```


