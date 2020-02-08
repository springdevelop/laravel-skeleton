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
            "name": "Daniela Larkin Sr.",
            "desc": "Queen, who was peeping anxiously into her face, and large eyes full of soup. 'There's certainly too much overcome to do so. 'Shall we try another figure of the cakes, and was coming back to her.",
            "amount": 1855373.023,
            "date_donate": "1997-05-31 09:23:20"
        },
        {
            "id": 2,
            "name": "Miss Joanny Nienow",
            "desc": "The Panther took pie-crust, and gravy, and meat, While the Duchess was VERY ugly; and secondly, because she was to eat or drink under the hedge. In another moment down went Alice after it, never.",
            "amount": 5,
            "date_donate": "1979-01-29 20:57:10"
        },
        {
            "id": 3,
            "name": "Lilliana Weber",
            "desc": "Gryphon, and, taking Alice by the officers of the evening, beautiful Soup! 'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not join the dance? Will you, won't you, won't you.",
            "amount": 30525.466405,
            "date_donate": "1977-01-13 02:51:03"
        },
        {
            "id": 4,
            "name": "Albert Borer",
            "desc": "I the same when I find a pleasure in all directions, tumbling up against each other; however, they got thrown out to the table for it, you know--' (pointing with his nose Trims his belt and his.",
            "amount": 2053248.821441,
            "date_donate": "2002-11-09 20:15:34"
        },
        {
            "id": 5,
            "name": "Mr. Tyree Douglas DDS",
            "desc": "I can reach the key; and if the Mock Turtle; 'but it doesn't matter much,' thought Alice, 'to pretend to be no use now,' thought poor Alice, 'when one wasn't always growing larger and smaller, and.",
            "amount": 16299.65,
            "date_donate": "2010-08-30 21:29:57"
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
    -d '{"name":"sit","desc":"ullam","amount":17665.39,"date_donate":"sunt"}'

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
    "name": "sit",
    "desc": "ullam",
    "amount": 17665.39,
    "date_donate": "sunt"
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
    -d '{"name":"laudantium","desc":"omnis","amount":12.986230305,"date_donate":"quod"}'

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
    "name": "laudantium",
    "desc": "omnis",
    "amount": 12.986230305,
    "date_donate": "quod"
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
            "date_founding": "1989-12-24 18:23:47",
            "founding": 50280959.37651144,
            "current": 9587.566318
        },
        {
            "id": 2,
            "date_founding": "1998-01-11 15:30:58",
            "founding": 28809.9896,
            "current": 29.783590457
        },
        {
            "id": 3,
            "date_founding": "2003-12-07 11:52:42",
            "founding": 1572111.1206651065,
            "current": 0
        },
        {
            "id": 4,
            "date_founding": "1990-08-12 10:20:06",
            "founding": 385250634.57966,
            "current": 307580.5633559
        },
        {
            "id": 5,
            "date_founding": "2018-08-02 04:09:05",
            "founding": 10909.676,
            "current": 29
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
    -d '{"date_founding":"et","founding":23.4,"currrent":4164195.20741}'

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
    "date_founding": "et",
    "founding": 23.4,
    "currrent": 4164195.20741
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
    -d '{"date_founding":"fugiat","founding":339167,"currrent":442.243}'

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
    "date_founding": "fugiat",
    "founding": 339167,
    "currrent": 442.243
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

#general


<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
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
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
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
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
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
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_6a9143e872fe9ceeb2c4771761bc911e -->
## donate
> Example request:

```bash
curl -X GET \
    -G "http://localhost/donate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/donate"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET donate`


<!-- END_6a9143e872fe9ceeb2c4771761bc911e -->

<!-- START_aabbc2109dbe79bf4b24ef12b10c5264 -->
## donate/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/donate/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/donate/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET donate/create`


<!-- END_aabbc2109dbe79bf4b24ef12b10c5264 -->

<!-- START_adbf7c7f28147f095f8d9e6dae6f2c29 -->
## donate
> Example request:

```bash
curl -X POST \
    "http://localhost/donate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/donate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST donate`


<!-- END_adbf7c7f28147f095f8d9e6dae6f2c29 -->

<!-- START_82c851a085577ba79c42d99973458a1b -->
## donate/{donate}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/donate/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/donate/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET donate/{donate}`


<!-- END_82c851a085577ba79c42d99973458a1b -->

<!-- START_46d9c1d4c78e3419ca6219f2c3c3fe94 -->
## donate/{donate}
> Example request:

```bash
curl -X PUT \
    "http://localhost/donate/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/donate/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT donate/{donate}`

`PATCH donate/{donate}`


<!-- END_46d9c1d4c78e3419ca6219f2c3c3fe94 -->

<!-- START_78b8a9048058b8ad4e329c1705a408f1 -->
## donate/{donate}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/donate/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/donate/1"
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
`DELETE donate/{donate}`


<!-- END_78b8a9048058b8ad4e329c1705a408f1 -->

<!-- START_ed0ce0133594a4e868b077c60416c6e6 -->
## founding
> Example request:

```bash
curl -X GET \
    -G "http://localhost/founding" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/founding"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET founding`


<!-- END_ed0ce0133594a4e868b077c60416c6e6 -->

<!-- START_416b7f5eb16aa2e57d3a6c72c1b8c19d -->
## founding/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/founding/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/founding/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET founding/create`


<!-- END_416b7f5eb16aa2e57d3a6c72c1b8c19d -->

<!-- START_4b6ea8f126be5da0ed3e20e1e8883f3c -->
## founding
> Example request:

```bash
curl -X POST \
    "http://localhost/founding" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/founding"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST founding`


<!-- END_4b6ea8f126be5da0ed3e20e1e8883f3c -->

<!-- START_df0da265648d5fbe7c05e65352f1aa74 -->
## founding/{founding}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/founding/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/founding/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET founding/{founding}`


<!-- END_df0da265648d5fbe7c05e65352f1aa74 -->

<!-- START_c8884bec7ca2affeb323800c93716b7a -->
## founding/{founding}
> Example request:

```bash
curl -X PUT \
    "http://localhost/founding/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/founding/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT founding/{founding}`

`PATCH founding/{founding}`


<!-- END_c8884bec7ca2affeb323800c93716b7a -->

<!-- START_c9bea22f9f78f28ead115310af41a730 -->
## founding/{founding}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/founding/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/founding/1"
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
`DELETE founding/{founding}`


<!-- END_c9bea22f9f78f28ead115310af41a730 -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

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
            "name": "Ms. Abbie Cormier DDS",
            "desc": "Bill,' thought Alice,) 'Well, I never was so ordered about in the chimney as she was to eat the comfits: this caused some noise and confusion, as the doubled-up soldiers were silent, and looked.",
            "amount": 2383,
            "date_pay": "1974-11-02 20:09:30"
        },
        {
            "id": 2,
            "name": "Brando Farrell",
            "desc": "Alice. 'Nothing,' said Alice. 'It must be really offended. 'We won't talk about cats or dogs either, if you hold it too long; and that is enough,' Said his father; 'don't give yourself airs! Do you.",
            "amount": 1692763.855576,
            "date_pay": "1970-02-20 19:23:44"
        },
        {
            "id": 3,
            "name": "Kristopher Jones",
            "desc": "By the use of repeating all that stuff,' the Mock Turtle to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a minute. Alice began to tremble. Alice looked at Alice. 'It must be shutting.",
            "amount": 0.97141601,
            "date_pay": "2017-01-18 15:48:30"
        },
        {
            "id": 4,
            "name": "Mr. Emil Nader DVM",
            "desc": "I've finished.' So they got their tails in their mouths--and they're all over with diamonds, and walked two and two, as the doubled-up soldiers were silent, and looked into its mouth and began.",
            "amount": 472855102.6605579,
            "date_pay": "1976-05-11 01:32:37"
        },
        {
            "id": 5,
            "name": "Clement Fay",
            "desc": "Alice the moment how large she had succeeded in getting its body tucked away, comfortably enough, under her arm, that it was quite surprised to find any. And yet I wish you wouldn't squeeze so.'.",
            "amount": 14918.6793113,
            "date_pay": "1988-12-06 18:53:07"
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
    -d '{"name":"ipsum","desc":"eos","amount":51096871.9258388,"date_pay":"error"}'

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
    "name": "ipsum",
    "desc": "eos",
    "amount": 51096871.9258388,
    "date_pay": "error"
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
    -d '{"name":"quia","desc":"omnis","amount":118351.72638611,"date_pay":"qui"}'

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
    "name": "quia",
    "desc": "omnis",
    "amount": 118351.72638611,
    "date_pay": "qui"
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


