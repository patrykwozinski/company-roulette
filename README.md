# Symfony 4 ES CQRS Boilerplate

A boilerplate for DDD, CQRS, Event Sourcing applications using Symfony as framework and running with php7

[![Build Status](https://travis-ci.org/jorge07/symfony-4-es-cqrs-boilerplate.svg?branch=master)](https://travis-ci.org/jorge07/symfony-4-es-cqrs-boilerplate)
[![Coverage Status](https://coveralls.io/repos/github/jorge07/symfony-4-es-cqrs-boilerplate/badge.svg?branch=master)](https://coveralls.io/github/jorge07/symfony-4-es-cqrs-boilerplate?branch=coverage)
[![StyleCI](https://github.styleci.io/repos/116064483/shield?branch=master)](https://github.styleci.io/repos/116064483)

## Documentation

[Buses](https://github.com/jorge07/symfony-4-es-cqrs-boilerplate/tree/master/doc/GetStarted/Buses.md)

[Creating an Application Use Case](https://github.com/jorge07/symfony-4-es-cqrs-boilerplate/tree/master/doc/GetStarted/UseCases.md)

[Adding Projections](https://github.com/jorge07/symfony-4-es-cqrs-boilerplate/tree/master/doc/GetStarted/Projections.md)

[Async executions](https://github.com/jorge07/symfony-4-es-cqrs-boilerplate/tree/master/doc/GetStarted/Async.md)

[UI workflow](https://github.com/jorge07/symfony-4-es-cqrs-boilerplate/blob/master/doc/Workflow.md)

## Architecture

![Architecture](https://i.imgur.com/SzHgMft.png)

## Implementations

- [x] Environment in Docker
- [x] Command Bus, Query Bus, Event Bus
- [x] Event Store
- [x] Read Model
- [x] Async Event subscribers
- [x] Rest API
- [x] Web UI (A Terrible UX/UI)
- [x] Event Store Rest API 
- [x] Swagger API Doc

## Use Cases

#### User
- [x] Sign up
- [x] Change Email
- [x] Sign in
- [x] Logout

![API Doc](https://i.imgur.com/DBZsPlE.png)

## Stack

- PHP 7.2
- Mysql 5.7
- Elastic & Kibana 6.3
- RabbitMQ 3

## Project Setup

Up environment:

`make start`

Execute tests:

`make phpunit`

Static code analysis:

`make style`

Code style fixer:

`make cs`

Code style checker:

`make cs-check`

Enter in php container:

`make s=php sh`

Disable\Enable Xdebug:

`make xoff`

`make xon`

Build image to deploy

`make artifact`

## PHPStorm integration

PHPSTORM has native integration with Docker compose. That's nice but will stop your php container after run the test scenario. That's not nice when using fpm. A solution could be use another container just for that purpose. But I don't want. For that reason I use ssh connection.

IMPORTANT

> ssh in the container it's ONLY for that reason, if you've ssh installed in your production container, you're doing it wrong... 

Use ssh remote connection.
---

Host: 
- Docker 4 Mac: `localhost`
- docker machine OR dinghy: `192.168.99.100`

Port: 
 - `2323`

Filesystem mapping:
 - `{PROJECT_PATH}` -> `/app`
