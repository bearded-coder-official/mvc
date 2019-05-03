<?php

$routerContainer = new \Aura\Router\RouterContainer();
$router = $routerContainer->getMap();

$router->get('home', '/', \NtSchool\Action\HomeAction::class);
$router->get('user.get', '/users/{id}', \NtSchool\Action\UserGetAction::class);
$router->get('contacts', '/contact-us', \NtSchool\Action\ContactUsAction::class);