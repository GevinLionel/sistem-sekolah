<?php
require_once '  ./app/core/Router.php';

use App\core\Router;

$router = new Router();


//regestrasi route
$router->add('GET', '/students', 'StudentController', 'index');
$router->add('GET', '/students/create', 'StudentController', 'create');
$router->add('GET', '/students/{id}', 'StudentController', 'show');

$router->add('POST', '/students', 'StudentController', 'store');

$router->run();
?>