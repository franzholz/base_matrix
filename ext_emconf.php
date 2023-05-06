<?php

########################################################################
# Extension Manager/Repository config file for ext "base_svg".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Matrix Library',
    'description' => 'Library for handling Matrices (PHPMatrix)',
    'category' => 'misc',
    'version' => '3.0.1',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Mark Baker, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
