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
            "name": "Miss Alisa Kuphal Jr.",
            "desc": "Good-bye, feet!' (for when she found her head was so small as this before, never! And I declare it's too bad, that it was certainly not becoming. 'And that's the jury, who instantly made a.",
            "amount": 37.15806732,
            "date_donate": "2008-02-20 14:12:51"
        },
        {
            "id": 2,
            "name": "Candelario Langworth",
            "desc": "I shan't go, at any rate: go and take it away!' There was nothing so VERY remarkable in that; nor did Alice think it so yet,' said the Caterpillar decidedly, and there was nothing on it (as she had.",
            "amount": 147.0813472,
            "date_donate": "1980-05-22 11:35:27"
        },
        {
            "id": 3,
            "name": "Sid Zieme",
            "desc": "Alice in a minute. Alice began to get rather sleepy, and went on in a natural way. 'I thought you did,' said the King, 'that saves a world of trouble, you know, with oh, such long ringlets, and mine.",
            "amount": 57686,
            "date_donate": "1973-01-15 16:40:06"
        },
        {
            "id": 4,
            "name": "Neal Conroy",
            "desc": "Said the mouse to the jury, who instantly made a memorandum of the Gryphon, with a teacup in one hand and a great thistle, to keep herself from being run over; and the other arm curled round her.",
            "amount": 22635322.8,
            "date_donate": "1992-05-24 02:58:26"
        },
        {
            "id": 5,
            "name": "Adrien Kautzer",
            "desc": "I think--' (for, you see, because some of the lefthand bit of stick, and held out its arms folded, frowning like a telescope! I think I can guess that,' she added aloud. 'Do you take me for asking!.",
            "amount": 21982.527048325,
            "date_donate": "1984-05-08 19:56:15"
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
    -d '{"name":"fuga","desc":"nemo","amount":5624.645587,"date_donate":"vitae"}'

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
    "name": "fuga",
    "desc": "nemo",
    "amount": 5624.645587,
    "date_donate": "vitae"
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
    -d '{"name":"sint","desc":"maiores","amount":42984.5,"date_donate":"aspernatur"}'

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
    "name": "sint",
    "desc": "maiores",
    "amount": 42984.5,
    "date_donate": "aspernatur"
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
            "date_founding": "1989-07-26 11:03:15",
            "founding": 748162932.139008,
            "current": 202.60348
        },
        {
            "id": 2,
            "date_founding": "2013-06-06 03:56:47",
            "founding": 402.079436223,
            "current": 12
        },
        {
            "id": 3,
            "date_founding": "1984-02-15 15:30:20",
            "founding": 22029476.97527236,
            "current": 152537133.46
        },
        {
            "id": 4,
            "date_founding": "1992-05-02 16:44:08",
            "founding": 541351693.9,
            "current": 42490035.41
        },
        {
            "id": 5,
            "date_founding": "1997-05-26 04:11:24",
            "founding": 55.7947556,
            "current": 261.83423
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
    -d '{"date_founding":"maiores","founding":28020582.769775663,"currrent":26401}'

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
    "date_founding": "maiores",
    "founding": 28020582.769775663,
    "currrent": 26401
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
    -d '{"date_founding":"eos","founding":242.4185429,"currrent":415438184.3}'

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
    "date_founding": "eos",
    "founding": 242.4185429,
    "currrent": 415438184.3
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
            "name": "Brenda Turner IV",
            "desc": "Caterpillar, and the whole party look so grave that she had found the fan she was always ready to sink into the Dormouse's place, and Alice was so much already, that it signifies much,' she said to.",
            "amount": 13.884310056,
            "date_pay": "1988-09-19 18:38:02"
        },
        {
            "id": 2,
            "name": "Jeanette Hane",
            "desc": "Latin Grammar, 'A mouse--of a mouse--to a mouse--a mouse--O mouse!') The Mouse gave a look askance-- Said he thanked the whiting kindly, but he could think of nothing better to say it out to the.",
            "amount": 17.59518,
            "date_pay": "1998-04-17 09:09:51"
        },
        {
            "id": 3,
            "name": "Dr. Jennings Trantow",
            "desc": "Bill had left off sneezing by this very sudden change, but very glad to get through the door, and the White Rabbit cried out, 'Silence in the sun. (IF you don't explain it as a lark, And will talk.",
            "amount": 62886,
            "date_pay": "1986-05-08 19:25:37"
        },
        {
            "id": 4,
            "name": "Keshawn Crooks",
            "desc": "Queen, stamping on the top with its tongue hanging out of his head. But at any rate, the Dormouse into the sky. Twinkle, twinkle--\"' Here the Queen said to the jury, in a furious passion, and went.",
            "amount": 12.7823724,
            "date_pay": "1997-05-08 13:15:33"
        },
        {
            "id": 5,
            "name": "Miss Verdie Stamm MD",
            "desc": "I know is, something comes at me like a thunderstorm. 'A fine day, your Majesty!' the soldiers shouted in reply. 'Please come back and see how he did not get hold of its right ear and left foot, so.",
            "amount": 2023175.9794887,
            "date_pay": "2010-10-01 02:35:34"
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
    -d '{"name":"deserunt","desc":"error","amount":407.796,"date_pay":"doloribus"}'

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
    "name": "deserunt",
    "desc": "error",
    "amount": 407.796,
    "date_pay": "doloribus"
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
    -d '{"name":"corrupti","desc":"quidem","amount":1077.639499995,"date_pay":"accusantium"}'

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
    "name": "corrupti",
    "desc": "quidem",
    "amount": 1077.639499995,
    "date_pay": "accusantium"
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


