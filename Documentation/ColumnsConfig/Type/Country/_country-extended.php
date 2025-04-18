<?php

return [
    // ...
    'columns' => [
        'my-country' => [
            'label' => 'Country of Receiver',
            'config' => [
                'type' => 'country',
                // available options: name, localizedName, officialName, localizedOfficialName, iso2, iso3
                'labelField' => 'iso2',
                // countries which are listed before all others
                'prioritizedCountries' => ['AT', 'CH'],
                // sort by the label
                'sortItems' => [
                    'label' => 'asc',
                ],
                'filter' => [
                    // restrict to the given country ISO2 or ISO3 codes
                    'onlyCountries' => ['DE', 'AT', 'CH', 'FR', 'IT', 'HU', 'US', 'GR', 'ES'],
                    // exclude by the given country ISO2 or ISO3 codes
                    'excludeCountries' => ['DE', 'ES'],
                ],
                'default' => 'HU',
                // When required=false, an empty selection ('') is possible
                'required' => false,
            ],
        ],
    ],
];
