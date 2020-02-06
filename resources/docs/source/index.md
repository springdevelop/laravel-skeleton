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
            "name": "Dr. Rodrigo Considine DDS",
            "desc": "The poor little thing was to eat the comfits: this caused some noise and confusion, as the March Hare will be When they take us up and walking off to trouble myself about you: you must manage the.",
            "amount": 2487.92877325,
            "date_donate": "1999-07-04 09:46:27"
        },
        {
            "id": 2,
            "name": "Robert Casper",
            "desc": "Yet you finished the guinea-pigs!' thought Alice. The poor little Lizard, Bill, was in a tone of delight, which changed into alarm in another moment, when she had got so close to them, and all her.",
            "amount": 314440.414017401,
            "date_donate": "1994-01-13 12:49:52"
        },
        {
            "id": 3,
            "name": "Serenity Kessler",
            "desc": "THIS!' (Sounds of more energetic remedies--' 'Speak English!' said the White Rabbit: it was quite pleased to find any. And yet I wish you wouldn't have come here.' Alice didn't think that proved it.",
            "amount": 4147358.3,
            "date_donate": "2018-02-23 10:51:02"
        },
        {
            "id": 4,
            "name": "Deon Lind Sr.",
            "desc": "Caterpillar. Alice folded her hands, and was going to be, from one foot to the beginning again?' Alice ventured to ask. 'Suppose we change the subject. 'Go on with the day and night! You see the.",
            "amount": 52692.92,
            "date_donate": "2019-04-05 04:17:53"
        },
        {
            "id": 5,
            "name": "Kobe Conroy",
            "desc": "Alice replied very solemnly. Alice was soon left alone. 'I wish I hadn't mentioned Dinah!' she said to the Gryphon. 'Do you know about this business?' the King said, turning to the beginning again?'.",
            "amount": 818.4,
            "date_donate": "2001-01-18 20:27:28"
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
    -d '{"name":"dolorem","desc":"animi","amount":3.669,"date_donate":"est"}'

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
    "name": "dolorem",
    "desc": "animi",
    "amount": 3.669,
    "date_donate": "est"
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
    -d '{"name":"omnis","desc":"quia","amount":2125140.59,"date_donate":"aut"}'

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
    "name": "omnis",
    "desc": "quia",
    "amount": 2125140.59,
    "date_donate": "aut"
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
            "name": "Edgardo Johnson",
            "desc": "Caterpillar. 'Is that the Mouse with an anxious look at all for any lesson-books!' And so it was as much right,' said the Hatter: 'I'm on the trumpet, and then treading on her toes when they passed.",
            "amount": 89.16942487,
            "date_pay": "1994-07-12 13:09:08"
        },
        {
            "id": 2,
            "name": "Kale Legros",
            "desc": "Caterpillar; and it said in a piteous tone. And she tried to look through into the wood. 'It's the first minute or two, they began moving about again, and said, very gravely, 'I think, you ought to.",
            "amount": 39057022.2,
            "date_pay": "1980-10-22 18:21:32"
        },
        {
            "id": 3,
            "name": "Dr. Duane Boehm",
            "desc": "Bill's got the other--Bill! fetch it back!' 'And who are THESE?' said the Lory hastily. 'I don't know what you had been to a mouse, you know. So you see, Miss, we're doing our best, afore she comes.",
            "amount": 147.233367921,
            "date_pay": "1992-08-28 08:25:32"
        },
        {
            "id": 4,
            "name": "Elbert Dickens",
            "desc": "Do you think you can have no answers.' 'If you please, sir--' The Rabbit Sends in a soothing tone: 'don't be angry about it. And yet I don't want to stay with it as she was beginning very angrily.",
            "amount": 4463.9686,
            "date_pay": "1993-04-29 01:15:13"
        },
        {
            "id": 5,
            "name": "Dr. Wilton Kuphal",
            "desc": "The chief difficulty Alice found at first was moderate. But the snail replied \"Too far, too far!\" and gave a little bottle on it, for she thought, and looked very uncomfortable. The moment Alice.",
            "amount": 0,
            "date_pay": "1978-07-13 07:57:01"
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
    -d '{"name":"et","desc":"dignissimos","amount":1395.56,"date_pay":"molestiae"}'

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
    "name": "et",
    "desc": "dignissimos",
    "amount": 1395.56,
    "date_pay": "molestiae"
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
    -d '{"name":"consectetur","desc":"nam","amount":67854.027,"date_pay":"nihil"}'

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
    "name": "consectetur",
    "desc": "nam",
    "amount": 67854.027,
    "date_pay": "nihil"
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


