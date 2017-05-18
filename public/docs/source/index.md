---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Teams

Provides info about teams
<!-- START_59b8f9b9e0e46c8d0875e706284aa04b -->
## api/v1/teams

> Example request:

```bash
curl "http://localhost/api/v1/teams" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/teams",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "Atlético Clube Goianiense",
        "nickname": "Dragão",
        "acronym": "ACG",
        "coach": "Marcelo Cabo",
        "location": "Goiás, Brasil"
    },
    {
        "id": 2,
        "name": "Clube Atlético Mineiro",
        "nickname": "Galo",
        "acronym": "CAM",
        "coach": "Roger Machado",
        "location": "Minas Gerais, Brasil"
    },
    {
        "id": 3,
        "name": "Clube Atlético Paranaense",
        "nickname": "Furacão",
        "acronym": "CAP",
        "coach": "Paulo Autuori",
        "location": "Paraná, Brasil"
    },
    {
        "id": 4,
        "name": "Avaí Futebol Clube",
        "nickname": "Leão da Ilha ",
        "acronym": "AFC",
        "coach": "Claudinei Oliveira",
        "location": "Santa Catarina, Brasil"
    },
    {
        "id": 5,
        "name": "Esporte Clube Bahia",
        "nickname": "Tricolor Bahiano",
        "acronym": "ECB",
        "coach": "Guto Ferreira",
        "location": "Bahia, Brasil"
    },
    {
        "id": 6,
        "name": "Botafogo de Futebol e Regatas",
        "nickname": "Fogão",
        "acronym": "BFR",
        "coach": "Jair Ventura",
        "location": "Rio de Janeiro, Brasil"
    },
    {
        "id": 7,
        "name": "Associação Chapecoense de Futebol",
        "nickname": "Chape",
        "acronym": "ACF",
        "coach": "Vágner Mancini",
        "location": "Santa Catarina, Brasil"
    },
    {
        "id": 8,
        "name": "Sport Club Corinthians Paulista",
        "nickname": "Timão ",
        "acronym": "SCCP",
        "coach": "Fábio Carille",
        "location": "São Paulo, Brasil"
    },
    {
        "id": 9,
        "name": "Coritiba Foot Ball Club",
        "nickname": "Coxa",
        "acronym": "CFC",
        "coach": "Pachequinho",
        "location": "Paraná, Brasil"
    },
    {
        "id": 10,
        "name": "Cruzeiro Esporte Clube",
        "nickname": "Raposa",
        "acronym": "CEC",
        "coach": "Mano Menezes",
        "location": "Minas Gerais, Brasil"
    },
    {
        "id": 11,
        "name": "Clube de Regatas do Flamengo",
        "nickname": "Mengão",
        "acronym": "CRF",
        "coach": "Zé Ricardo",
        "location": "Rio de Janeiro, Brasil"
    },
    {
        "id": 12,
        "name": "Fluminense FC",
        "nickname": "Flu",
        "acronym": "FFC",
        "coach": "Abel Braga",
        "location": "Rio de Janeiro, Brasil"
    },
    {
        "id": 13,
        "name": "Grêmio Foot-Ball Porto Alegrense",
        "nickname": "Imortal Tricolor",
        "acronym": "GRE",
        "coach": "Renato Portaluppi",
        "location": "Rio Grande do Sul, Brasil"
    },
    {
        "id": 14,
        "name": "Sociedade Esportiva Palmeiras",
        "nickname": "Porco",
        "acronym": "SEP",
        "coach": "Cuca",
        "location": "São Paulo, Brasil"
    },
    {
        "id": 15,
        "name": "Associação Atlética Ponte Preta",
        "nickname": "Macaca",
        "acronym": "AAPP",
        "coach": "Gilson Kleina",
        "location": "São Paulo, Brasil"
    },
    {
        "id": 16,
        "name": "São Paulo FC",
        "nickname": "Soberano",
        "acronym": "SPFC",
        "coach": "Rogério Ceni",
        "location": "São Paulo, Brasil"
    },
    {
        "id": 17,
        "name": "Santos FC",
        "nickname": "Peixe",
        "acronym": "SFC",
        "coach": "Dorival Junior",
        "location": "São Paulo, Brasil"
    },
    {
        "id": 18,
        "name": "Sport Club do Recife",
        "nickname": "Leão",
        "acronym": "SCR",
        "coach": "Daniel Paulista",
        "location": "Pernambuco, São Paulo"
    },
    {
        "id": 19,
        "name": "CR Vasco da Gama",
        "nickname": "Cruzmaltino",
        "acronym": "CRVG",
        "coach": "Milton Mendes",
        "location": "Rio de Janeiro, Brasil"
    },
    {
        "id": 20,
        "name": "Esporte Clube Vitória",
        "nickname": "Lẽao da Barra",
        "acronym": "ECV",
        "coach": "Dejan Petkovic",
        "location": "Bahia, São Paulo"
    }
]
```

### HTTP Request
`GET api/v1/teams`

`HEAD api/v1/teams`


<!-- END_59b8f9b9e0e46c8d0875e706284aa04b -->
<!-- START_9c2019f9d2d308844e1949dfa342b380 -->
## api/v1/teams

> Example request:

```bash
curl "http://localhost/api/v1/teams" \
-H "Accept: application/json" \
    -d "name"="id" \
    -d "nickname"="id" \
    -d "acronym"="id" \
    -d "coach"="id" \
    -d "location"="id" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/teams",
    "method": "POST",
    "data": {
        "name": "id",
        "nickname": "id",
        "acronym": "id",
        "coach": "id",
        "location": "id"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/teams`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    nickname | string |  required  | 
    acronym | string |  optional  | Minimum: `2`
    coach | string |  required  | 
    location | string |  required  | 

<!-- END_9c2019f9d2d308844e1949dfa342b380 -->
<!-- START_71c4e0a785177353e476ae3f53ed8b68 -->
## api/v1/teams/{team}

> Example request:

```bash
curl "http://localhost/api/v1/teams/{team}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/teams/{team}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "Atlético Clube Goianiense",
    "nickname": "Dragão",
    "acronym": "ACG",
    "coach": "Marcelo Cabo",
    "location": "Goiás, Brasil"
}
```

### HTTP Request
`GET api/v1/teams/{team}`

`HEAD api/v1/teams/{team}`


<!-- END_71c4e0a785177353e476ae3f53ed8b68 -->
#Users

Provides info about users
<!-- START_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
## api/v1/users

> Example request:

```bash
curl "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/users`

`HEAD api/v1/users`


<!-- END_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## api/v1/users

> Example request:

```bash
curl "http://localhost/api/v1/users" \
-H "Accept: application/json" \
    -d "name"="quod" \
    -d "email"="gabe16@example.org" \
    -d "password"="quod" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "POST",
    "data": {
        "name": "quod",
        "email": "gabe16@example.org",
        "password": "quod"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | email |  required  | 
    password | string |  required  | Minimum: `8`

<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->
<!-- START_b4ea58dd963da91362c51d4088d0d4f4 -->
## api/v1/users/{user}

> Example request:

```bash
curl "http://localhost/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/users/{user}`

`HEAD api/v1/users/{user}`


<!-- END_b4ea58dd963da91362c51d4088d0d4f4 -->
