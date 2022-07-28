<?php

########################################################################
# Extension Manager/Repository config file for ext "base_svg".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Matrix Library',
    'description' => 'Library for handling Matrices (PHPMatrix)',
    'category' => 'misc',
    'version' => '0.0.1',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Mark Baker, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.1.99',
            'typo3' => '9.5.0-11.5.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
