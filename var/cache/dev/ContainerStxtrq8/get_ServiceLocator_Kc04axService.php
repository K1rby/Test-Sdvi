<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._kc04ax' shared service.

return $this->privates['.service_locator._kc04ax'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'pizzaioloDao' => ['privates', 'App\\Service\\Dao\\PizzaioloDao', 'getPizzaioloDaoService.php', true],
], [
    'pizzaioloDao' => 'App\\Service\\Dao\\PizzaioloDao',
]);
