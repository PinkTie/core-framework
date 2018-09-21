<?php declare(strict_types = 1);

return [
    ['GET', '/', ['PTCore\Controllers\Homepage', 'show']],
    ['GET', '/hello-world', function () {
        echo 'Hello World';
    }],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];