<?php

use Gii\ModuleDisease\{
    Models as ModuleDisease,
    Contracts
};

return [
    'contracts'          => [
        'disease'        => Contracts\Disease::class,
        'module_disease' => Contracts\ModuleDisease::class
    ],
    'database'                      => [
        'models'                    => [
            'Disease'               => ModuleDisease\Disease::class,
            'ClassificationDisease' => ModuleDisease\ClassificationDisease::class
        ]
    ],
];
