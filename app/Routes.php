<?php declare(strict_types = 1);

return [
    ['GET', '/', ['PTCore\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['PTCore\Controllers\Page', 'show']],
];