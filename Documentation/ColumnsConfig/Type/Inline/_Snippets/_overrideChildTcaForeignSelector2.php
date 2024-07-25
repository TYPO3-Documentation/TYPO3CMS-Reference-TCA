<?php

$GLOBALS['TCA']['tt_content']['types']['myCType'] = [
    'columnsOverrides' => [
        'myForeignTableColumnInTtContent' => [
            'config' => [
                'overrideChildTca' => [
                    //...  same as above
                ],
            ],
        ],
    ],
];
