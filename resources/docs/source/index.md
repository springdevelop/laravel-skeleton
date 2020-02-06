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

#donates


<!-- START_9eac1ace8933c6275757591bd4dab502 -->
## index

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/donates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/donates"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Art Gibson",
            "desc": "Who in the last few minutes, and she at once in the last time she heard a little animal (she couldn't guess of what work it would be only rustling in the kitchen that did not notice this question.",
            "amount": 4,
            "date_donate": "1976-05-28 08:00:55"
        },
        {
            "id": 2,
            "name": "Ephraim Schmidt",
            "desc": "Alice. 'Off with her head down to her that she had wept when she next peeped out the verses on his slate with one finger, as he spoke. 'A cat may look at the door--I do wish I hadn't quite finished.",
            "amount": 1.335382782,
            "date_donate": "2013-05-25 17:55:38"
        },
        {
            "id": 3,
            "name": "Dr. Maurice Hamill",
            "desc": "The March Hare had just begun to think to herself, 'Now, what am I to get into the air off all its feet at once, while all the creatures order one about, and shouting 'Off with his knuckles. It was.",
            "amount": 1277734.4091377,
            "date_donate": "2012-02-15 08:06:06"
        },
        {
            "id": 4,
            "name": "Prof. Dell Wunsch V",
            "desc": "Cheshire Cat: now I shall ever see such a tiny little thing!' It did so indeed, and much sooner than she had finished, her sister on the spot.' This did not at all this time. 'I want a clean cup,'.",
            "amount": 130312.61043911,
            "date_donate": "2009-11-14 23:39:11"
        },
        {
            "id": 5,
            "name": "Cletus DuBuque",
            "desc": "There was a very respectful tone, but frowning and making quite a conversation of it altogether; but after a minute or two to think about stopping herself before she came rather late, and the fan.",
            "amount": 104.4271892,
            "date_donate": "1980-11-23 05:44:56"
        }
    ]
}
```

### HTTP Request
`GET api/donates`


<!-- END_9eac1ace8933c6275757591bd4dab502 -->

<!-- START_2176839b6a969296c381ef8e0accb291 -->
## show

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/donates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/donates/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/donates/{id}`


<!-- END_2176839b6a969296c381ef8e0accb291 -->

<!-- START_9ac55273f78d6131b077504805d37625 -->
## store

> Example request:

```bash
curl -X POST \
    "http://localhost/api/donates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","desc":"incidunt","amount":58266.168,"date_donate":"vel"}'

```

```javascript
const url = new URL(
    "http://localhost/api/donates"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "desc": "incidunt",
    "amount": 58266.168,
    "date_donate": "vel"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/donates`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of Donate
        `desc` | string |  required  | Description of Donate
        `amount` | number |  required  | audio of Donate
        `date_donate` | string |  required  | time from of Donate
    
<!-- END_9ac55273f78d6131b077504805d37625 -->

<!-- START_c7537dbe36d8e0117b8d7a3a035fe860 -->
## update

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/donates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"asperiores","desc":"ad","amount":75846,"date_donate":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/donates/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "asperiores",
    "desc": "ad",
    "amount": 75846,
    "date_donate": "est"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/donates/{id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of Donate
        `desc` | string |  required  | Description of Donate
        `amount` | number |  required  | audio of Donate
        `date_donate` | string |  required  | time from of Donate
    
<!-- END_c7537dbe36d8e0117b8d7a3a035fe860 -->

<!-- START_8ca6630d083c3119e65280e28a6e51eb -->
## delete

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/donates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/donates/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/donates/{id}`


<!-- END_8ca6630d083c3119e65280e28a6e51eb -->

#foundings


<!-- START_8809cca67aaf148ea5a2bd4e6ac63cd6 -->
## index

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/foundings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/foundings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "date_founding": "1989-11-12 08:55:42",
            "founding": 374232462.44137,
            "current": 12.494
        },
        {
            "id": 2,
            "date_founding": "1998-05-23 13:13:23",
            "founding": 0.23,
            "current": 346452748.3256219
        },
        {
            "id": 3,
            "date_founding": "2010-04-25 18:30:45",
            "founding": 10166595.7,
            "current": 104323406.977
        },
        {
            "id": 4,
            "date_founding": "2005-02-01 02:12:36",
            "founding": 76986.0364824,
            "current": 0
        },
        {
            "id": 5,
            "date_founding": "1993-06-22 08:02:43",
            "founding": 36213614,
            "current": 2142.5495
        }
    ]
}
```

### HTTP Request
`GET api/foundings`


<!-- END_8809cca67aaf148ea5a2bd4e6ac63cd6 -->

<!-- START_4e4ed2d4316f47a56ab92a2891317813 -->
## show

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/foundings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/foundings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/foundings/{id}`


<!-- END_4e4ed2d4316f47a56ab92a2891317813 -->

<!-- START_3cd41946e26d25d8c6d437fa231a7935 -->
## store

> Example request:

```bash
curl -X POST \
    "http://localhost/api/foundings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"date_founding":"aut","founding":306856.04495,"currrent":97.1}'

```

```javascript
const url = new URL(
    "http://localhost/api/foundings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date_founding": "aut",
    "founding": 306856.04495,
    "currrent": 97.1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/foundings`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `date_founding` | string |  required  | Name of Founding
        `founding` | number |  required  | Description of Founding
        `currrent` | number |  required  | audio of Founding
    
<!-- END_3cd41946e26d25d8c6d437fa231a7935 -->

<!-- START_3e9a9d2473d7460bbdff3a8b85d6a257 -->
## update

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/foundings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"date_founding":"ipsum","founding":3116738.76638584,"currrent":459902788.74772394}'

```

```javascript
const url = new URL(
    "http://localhost/api/foundings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date_founding": "ipsum",
    "founding": 3116738.76638584,
    "currrent": 459902788.74772394
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/foundings/{id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `date_founding` | string |  required  | Name of Founding
        `founding` | number |  required  | Description of Founding
        `currrent` | number |  required  | audio of Founding
    
<!-- END_3e9a9d2473d7460bbdff3a8b85d6a257 -->

<!-- START_59183a836e8a33e247f186338da20bbc -->
## delete

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/foundings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/foundings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/foundings/{id}`


<!-- END_59183a836e8a33e247f186338da20bbc -->

#pays


<!-- START_ba9007cc72bbf6016b19687ea0f00405 -->
## index

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/pays" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pays"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Leonie Ortiz",
            "desc": "I think.' And she began thinking over all the things being alive; for instance, there's the arch I've got back to finish his story. CHAPTER IV. The Rabbit started violently, dropped the white kid.",
            "amount": 3968227,
            "date_pay": "1976-04-14 18:28:17"
        },
        {
            "id": 2,
            "name": "Betsy Kub",
            "desc": "King. (The jury all wrote down on one knee as he wore his crown over the list, feeling very glad to find my way into that lovely garden. First, however, she went to the jury, who instantly made a.",
            "amount": 172608.092350602,
            "date_pay": "1976-10-31 13:24:08"
        },
        {
            "id": 3,
            "name": "Samara Green",
            "desc": "The door led right into it. 'That's very curious!' she thought. 'I must be the right distance--but then I wonder what Latitude was, or Longitude I've got to the jury. They were indeed a.",
            "amount": 83114.473885,
            "date_pay": "2012-07-09 11:51:27"
        },
        {
            "id": 4,
            "name": "Bette Jacobson",
            "desc": "CHAPTER IV. The Rabbit Sends in a very little use, as it was labelled 'ORANGE MARMALADE', but to her very much confused, 'I don't know of any good reason, and as Alice could see her after the birds!.",
            "amount": 288880,
            "date_pay": "2000-05-11 02:25:48"
        },
        {
            "id": 5,
            "name": "Madaline Moen",
            "desc": "Table doesn't signify: let's try Geography. London is the same solemn tone, 'For the Duchess. 'Everything's got a moral, if only you can have no sort of way, 'Do cats eat bats?' and sometimes, 'Do.",
            "amount": 0.61568,
            "date_pay": "2003-11-09 21:54:17"
        }
    ]
}
```

### HTTP Request
`GET api/pays`


<!-- END_ba9007cc72bbf6016b19687ea0f00405 -->

<!-- START_a6fccc6f8314b81a1cd45a7ae5edfba5 -->
## show

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/pays/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pays/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/pays/{id}`


<!-- END_a6fccc6f8314b81a1cd45a7ae5edfba5 -->

<!-- START_da5c316b8e3c9ba35e8e3f8d05aa90ba -->
## store

> Example request:

```bash
curl -X POST \
    "http://localhost/api/pays" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"impedit","desc":"fuga","amount":36538032.274248675,"date_pay":"mollitia"}'

```

```javascript
const url = new URL(
    "http://localhost/api/pays"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "impedit",
    "desc": "fuga",
    "amount": 36538032.274248675,
    "date_pay": "mollitia"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/pays`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of Pay
        `desc` | string |  required  | Description of Pay
        `amount` | number |  required  | audio of Pay
        `date_pay` | string |  required  | time from of Pay
    
<!-- END_da5c316b8e3c9ba35e8e3f8d05aa90ba -->

<!-- START_6454f801d2b2375416b7875103011a5c -->
## update

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/pays/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"harum","desc":"sunt","amount":3403.4231711,"date_pay":"repellendus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/pays/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "harum",
    "desc": "sunt",
    "amount": 3403.4231711,
    "date_pay": "repellendus"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/pays/{id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of Pay
        `desc` | string |  required  | Description of Pay
        `amount` | number |  required  | audio of Pay
        `date_pay` | string |  required  | time from of Pay
    
<!-- END_6454f801d2b2375416b7875103011a5c -->

<!-- START_2a70461def4c319dcaa74a88f1375204 -->
## delete

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/pays/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pays/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/pays/{id}`


<!-- END_2a70461def4c319dcaa74a88f1375204 -->


