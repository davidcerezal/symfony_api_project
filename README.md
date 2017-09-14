Comunications Symfony Api 
========================

This API aims to solve the problem for the request:
'Contact communication view'.
It's uses symfony with the standard skeleton and all the API configurations: docs, rest, Oauth2.0...

The API we are creating in this gist will follow these rules :

- [x] The API only returns JSON responses
- [x] All API routes require authenticationu
- [x] Authentication is handled via OAuth2 with `password` Grant Type only (no need for Authorization pages and such).
- [x] API versioning is managed via a subdomain (e.g. `v1.api.example.com`)

The API will be written in PHP with the Symfony 3 framework. The following SF2 bundles are used :

- https://github.com/FriendsOfSymfony/FOSRestBundle
- https://github.com/FriendsOfSymfony/FOSUserBundle
- https://github.com/FriendsOfSymfony/FOSOAuthServerBundle
- https://github.com/schmittjoh/JMSSerializerBundle
- https://github.com/nelmio/NelmioApiDocBundle


Installation
--------------
Download the repository from:
https://github.com/davidcerezal/symfony_api_project

## Create the DB
You can now update your database schema :

php bin/console doctrine:schema:update --force

## Add Oauth2 client

The following step consists in adding a new OAuth2 client, so I add the client manually with a simple SQL query :

```sql
INSERT INTO `oauth2_clients` VALUES (NULL, '3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4', 'a:0:{}', '4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k', 'a:1:{i:0;s:8:"password";}');
```
## Create admin user

We are going to use the command `fos:user:create`, provided by `FOSUserBundle` :

```shell
$ php app/console fos:user:create
Please choose a username:admin
Please choose an email:admin@example.com
Please choose a password:admin
Created user admin
```

## Requests
There are four mains endopint:
+ /api/GetCalls [Post] used to retrieve all the comunications
+ /api/GetCall/{number} [Post] used to retrive all the comunications of the {nummber}
+ /api/doc [Get] The doc of the api and the sandbox
+ The Oauth 2.0 standard endopint like /oauth/v2/token

First we should create the token: 

We should now request an Access Token using the client and the user we created earlier. Notice the `client_id` parameter is a concatenation of the
client id, an underscore and the client randomId :

```shell
$ http POST http://localhost:8000/app_dev.php/oauth/v2/token \
    grant_type=password \
    client_id=1_3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4 \
    client_secret=4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k \
    username=admin \
    password=admin
HTTP/1.1 200 OK
Cache-Control: no-store, private
Connection: close
Content-Type: application/json
...

{
    "access_token": "MDFjZGI1MTg4MTk3YmEwOWJmMzA4NmRiMTgxNTM0ZDc1MGI3NDgzYjIwNmI3NGQ0NGE0YTQ5YTVhNmNlNDZhZQ",
    "expires_in": 3600,
    "refresh_token": "ZjYyOWY5Yzg3MTg0MDU4NWJhYzIwZWI4MDQzZTg4NWJjYzEyNzAwODUwYmQ4NjlhMDE3OGY4ZDk4N2U5OGU2Ng",
    "scope": null,
    "token_type": "bearer"
}
```
We can use the Acces Token we've just been given to authenticate on the next request :

```shell
$ http GET http://127.0.0.1:8000/api/getCalls \
    "Authorization:Bearer MDFjZGI1MTg4MTk3YmEwOWJmMzA4NmRiMTgxNTM0ZDc1MGI3NDgzYjIwNmI3NGQ0NGE0YTQ5YTVhNmNlNDZhZQ"
HTTP/1.1 200 OK
Cache-Control: no-cache
Connection: close
Content-Type: application/json
...

{
    [
        600999888,
        700111222,
        911222333,
        911444555,
        633666777,
        1420
    ]
}
```

And with the number we could retrieve the comunications
```shell
$ http GET http://127.0.0.1:8000/api/getCall/1420 \
    "Authorization:Bearer MDFjZGI1MTg4MTk3YmEwOWJmMzA4NmRiMTgxNTM0ZDc1MGI3NDgzYjIwNmI3NGQ0NGE0YTQ5YTVhNmNlNDZhZQ"
HTTP/1.1 200 OK
Cache-Control: no-cache
Connection: close
Content-Type: application/json
...

{
    [
        {
            "type": "SMS",
            "call_number_sender": 611222333,
            "call_number_reciever": 1420,
            "is_send_reviece": "Saliente",
            "name": "",
            "datetime": "2016-01-05T22:00:00+01:00",
            "duration": "0:0:0",
            "version": 1
        }
    ]
}
```



Enjoy!

[1]:  https://symfony.com/doc/3.3/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.3/doctrine.html
[8]:  https://symfony.com/doc/3.3/templating.html
[9]:  https://symfony.com/doc/3.3/security.html
[10]: https://symfony.com/doc/3.3/email.html
[11]: https://symfony.com/doc/3.3/logging.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: https://symfony.com/doc/current/setup/built_in_web_server.html
