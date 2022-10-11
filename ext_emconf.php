<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 view helper to load extension configuration in JavaScript',
    'description' => 'Expose your extension configuration to JavaScript',
    'category' => 'misc',
    'author' => 'jop-software Inh. Johannes Przymusinski',
    'author_email' => 'johannes.przymusinski@jop-software.de',
    'author_company' => 'jop-software Inh. Johannes Przymusinski',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.0.99',
            'php' => '8.1.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
