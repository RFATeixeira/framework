<?php //framework/src/app.php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add(
    'hello',
    new Routing\Route(
        '/hello/{name}',
        array('name' => 'Mundo')
    )
);

$routes->add(
    'bye',
    new Routing\Route(
        '/bye/{name}',
        array('name' => 'Mundo')
    )
);

$routes->add(
    'home',
    new Routing\Route(
        ''
    )
);

return $routes;