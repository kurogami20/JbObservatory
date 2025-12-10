<?php 
require_once 'janvier.php';
require_once 'fev.php';
require_once 'mar.php';
require_once 'av.php';
require_once 'mai.php';
require_once 'jun.php';
require_once 'jui.php';
require_once 'aou.php';
require_once 'sep.php';   
require_once 'oct.php';
require_once 'nov.php';
require_once 'dec.php';

$tabMap = [
    
        'janvier' => ['mois'=> 'janvier',
                        'carte' => $mapHTMLJan,
                        '1' => ['département'=> 'Haute-Garonne', 'nuitées' => 1879292],
                        '2' => ['département'=> 'Hérault', 'nuitées' => 1738164],
                        '3' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 1255027],
                        'total' => 8561728,
    ],
        'février' => [
                        'mois'=> 'février',
            'carte' => $mapHTMLFev,
                        '1' => [ 'département'=> 'Hérault', 'nuitées' => 1794954],
                        '2' => ['département'=> 'Haute-Garonne', 'nuitées' => 1793526],
                        '3' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 1469580],
                        'total' => 9122917,
    ],
        'mars' => [
            'mois'=> 'mars',
            'carte' => $mapHTMLMar,
                        '1' => ['département'=> 'Hérault', 'nuitées' => 2362276],
                        '2' => ['département'=> 'Haute-Garonne', 'nuitées' => 2182628],
                        '3' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 1601921],
                        'total' => 11124692,
    ],
        'avril' => [
            'mois'=> 'avril',
            'carte' => $mapHTMLAv,
                        '1' => ['département'=> 'Hérault', 'nuitées' => 3711060],
                        '2' => ['département'=> 'Haute-Garonne', 'nuitées' => 2049197],
                        '3' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 1910365],
                        'total' => 13920650,
    ],
        'mai' => ['carte' => $mapHTMLMai,
            'mois'=> 'mai',
            'carte' => $mapHTMLMai,
                        '1' => ['département'=> 'Hérault', 'nuitées' => 3795738],
                        '2' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 2066847],
                        '3' => ['département'=> 'Haute-Garonne', 'nuitées' => 1997227],
                        'total' => 14635826,
    ],
        'juin' => [
            'mois'=> 'juin',
            'carte' => $mapHTMLJun,
                        '1' => ['département'=> 'Hérault', 'nuitées' => 4485559],
                        '2' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 2712222],
                        '3' => ['département'=> 'Haute-Garonne', 'nuitées' => 2406790],
                        'total' => 17530156,
    ],
        'juillet' => [
            'mois'=> 'juillet',
            'carte' => $mapHTMLJui,
                        '1' => ['département'=> 'Hérault', 'nuitées' => 8248762],
                        '2' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 5930666],
                        '3' => ['département'=> 'Gard', 'nuitées' => 2205678],
                        'total' => 32472883,
    ],
        'août' => [
            'mois'=> 'août',
            'carte' => $mapHTMLAou,
                        '1' => ['département'=> 'Hérault', 'nuitées' => 9853709],
                        '2' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 7079742],
                        '3' => ['département'=> 'Gard', 'nuitées' => 3783614],
                        'total' => 36819700,
    ],
        'septembre' => [
            
            'mois'=> 'septembre',
            'carte' => $mapHTMLSep,
                        '1' => ['département'=> 'Hérault', 'nuitées' => 5071212],
                        '2' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 3113641],
                        '3' => ['département'=> 'Haute-Garonne', 'nuitées' => 2757576],
                        'total' => 19214826,
    ],
        'octobre' => [
            'mois'=> 'octobre',
            'carte' => $mapHTMLOct,
                        '1' => [ 'département'=> 'Hérault', 'nuitées' => 3580258],
                        '2' => ['département'=> 'Haute-Garonne', 'nuitées' => 2759185],
                        '3' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 1198096],
                        'total' => 14916995,
    ],
        'novembre' => [
            'mois'=> 'novembre',
            'carte' => $mapHTMLNov,
                        '1' => [ 'département'=> 'Hérault', 'nuitées' => 2622436],
                        '2' => ['département'=> 'Haute-Garonne', 'nuitées' => 2185247],
                        '3' => ['département'=> 'Gard', 'nuitées' => 1288425],
                        'total' => 10399035,
    ],
        'décembre' => [
            'mois'=> 'décembre',
            'carte' => $mapHTMLDec,
                        '1' => ['département'=> 'Haute-Garonne', 'nuitées' => 2504444],
                        '2' => ['département'=> 'Hérault', 'nuitées' => 2501682],
                        '3' => ['département'=> 'Pyrénées-Orientales', 'nuitées' => 1614626],
                        'total' => 12034497,
    ],
];


$tabNuiteeParMois = [
    "Janvier" => [
        "Haute-Garonne" => [
            "nuitees" => 1879292,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Hérault" => [
            "nuitees" => 1738164,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 1255027,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Gard" => [
            "nuitees" => 826584,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 569482,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 547236,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Tarn" => [
            "nuitees" => 321100,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 293754,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Ariège" => [
            "nuitees" => 269882,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Aveyron" => [
            "nuitees" => 267377,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Lot" => [
            "nuitees" => 249860,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Gers" => [
            "nuitees" => 240222,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Lozère" => [
            "nuitees" => 103748,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Février" => [
        "Hérault" => [
            "nuitees" => 1794954,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Haute-Garonne" => [
            "nuitees" => 1793526,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 1469580,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 839219,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Gard" => [
            "nuitees" => 796344,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 614493,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Ariège" => [
            "nuitees" => 338391,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Tarn" => [
            "nuitees" => 322724,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Aveyron" => [
            "nuitees" => 287908,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 276161,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Lot" => [
            "nuitees" => 266617,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Gers" => [
            "nuitees" => 217843,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Lozère" => [
            "nuitees" => 105157,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Mars" => [
        "Hérault" => [
            "nuitees" => 2362276,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Haute-Garonne" => [
            "nuitees" => 2182628,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 1601921,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Gard" => [
            "nuitees" => 1042642,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 842966,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 778276,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Aveyron" => [
            "nuitees" => 399505,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn" => [
            "nuitees" => 385761,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 377376,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Lot" => [
            "nuitees" => 356083,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Ariège" => [
            "nuitees" => 331137,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Gers" => [
            "nuitees" => 316094,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Lozère" => [
            "nuitees" => 148027,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Avril" => [
        "Hérault" => [
            "nuitees" => 3711060,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Haute-Garonne" => [
            "nuitees" => 2049197,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 1910365,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Gard" => [
            "nuitees" => 1613490,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 1122210,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 630619,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Lot" => [
            "nuitees" => 555220,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Aveyron" => [
            "nuitees" => 536368,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn" => [
            "nuitees" => 451923,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 421746,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Gers" => [
            "nuitees" => 388887,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 278171,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 251394,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Mai" => [
        "Hérault" => [
            "nuitees" => 3795738,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 2066847,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Haute-Garonne" => [
            "nuitees" => 1997227,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Gard" => [
            "nuitees" => 1596197,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 1187157,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 790507,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Lot" => [
            "nuitees" => 625133,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Aveyron" => [
            "nuitees" => 611796,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn" => [
            "nuitees" => 479209,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 458219,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Gers" => [
            "nuitees" => 452215,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Lozère" => [
            "nuitees" => 297213,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ],
        "Ariège" => [
            "nuitees" => 278368,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ]
    ],
    "Juin" => [
        "Hérault" => [
            "nuitees" => 4485559,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 2712222,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Haute-Garonne" => [
            "nuitees" => 2406790,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Gard" => [
            "nuitees" => 1884880,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 1475630,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 936668,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Lot" => [
            "nuitees" => 680211,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Aveyron" => [
            "nuitees" => 670233,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 560141,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Tarn" => [
            "nuitees" => 554189,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Gers" => [
            "nuitees" => 501523,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 336429,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 325681,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Juillet" => [
        "Hérault" => [
            "nuitees" => 8248762,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 5930666,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Gard" => [
            "nuitees" => 3445817,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Haute-Garonne" => [
            "nuitees" => 3097510,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Aude" => [
            "nuitees" => 2844447,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 1599304,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Lot" => [
            "nuitees" => 1494640,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Aveyron" => [
            "nuitees" => 1425812,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Gers" => [
            "nuitees" => 1074089,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Tarn" => [
            "nuitees" => 932292,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 908828,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Ariège" => [
            "nuitees" => 821574,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 649142,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Août" => [
        "Hérault" => [
            "nuitees" => 9853709,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 7079742,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Gard" => [
            "nuitees" => 3783614,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 3298896,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Haute-Garonne" => [
            "nuitees" => 3000117,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 1865857,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Lot" => [
            "nuitees" => 1742175,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Aveyron" => [
            "nuitees" => 1626401,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn" => [
            "nuitees" => 1050861,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Gers" => [
            "nuitees" => 997329,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 906093,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 870073,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Lozère" => [
            "nuitees" => 744833,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Septembre" => [
        "Hérault" => [
            "nuitees" => 5071212,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 3113641,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Haute-Garonne" => [
            "nuitees" => 2757576,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Gard" => [
            "nuitees" => 2057089,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 1605261,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 1096174,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Aveyron" => [
            "nuitees" => 660805,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Lot" => [
            "nuitees" => 656854,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 551129,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Tarn" => [
            "nuitees" => 511809,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Gers" => [
            "nuitees" => 460004,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 361344,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 311928,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Octobre" => [
        "Hérault" => [
            "nuitees" => 3580258,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Haute-Garonne" => [
            "nuitees" => 2759185,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 1845714,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Gard" => [
            "nuitees" => 1727954,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 1105609,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 851435,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Aveyron" => [
            "nuitees" => 591982,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Lot" => [
            "nuitees" => 506801,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 500257,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Tarn" => [
            "nuitees" => 481205,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Gers" => [
            "nuitees" => 418717,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 280623,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 267255,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Novembre" => [
        "Hérault" => [
            "nuitees" => 2622436,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Haute-Garonne" => [
            "nuitees" => 2185247,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Gard" => [
            "nuitees" => 1288425,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 1198096,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Aude" => [
            "nuitees" => 688284,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 389716,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Aveyron" => [
            "nuitees" => 384565,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn" => [
            "nuitees" => 362583,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 336840,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Lot" => [
            "nuitees" => 329969,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Gers" => [
            "nuitees" => 282701,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 180846,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 149327,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Décembre" => [
        "Haute-Garonne" => [
            "nuitees" => 2504444,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Hérault" => [
            "nuitees" => 2501682,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 1614626,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Gard" => [
            "nuitees" => 1317485,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 796268,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 690835,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Tarn" => [
            "nuitees" => 483803,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Aveyron" => [
            "nuitees" => 481969,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 422270,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Lot" => [
            "nuitees" => 416018,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Gers" => [
            "nuitees" => 346918,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 292618,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 165561,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ],
    "Total_2018" => [
        "Hérault" => [
            "nuitees" => 49765810,
            "hebergement" => ["collectif" => 36347, "locatif" => 33269, "plein_air" => 125262, "hotel" => 21992, "total" => 216870]
        ],
        "Pyrénées-Orientale" => [
            "nuitees" => 31798447,
            "hebergement" => ["collectif" => 30638, "locatif" => 34328, "plein_air" => 105360, "hotel" => 14951, "total" => 185277]
        ],
        "Haute-Garonne" => [
            "nuitees" => 28612739,
            "hebergement" => ["collectif" => 16248, "locatif" => 10569, "plein_air" => 11284, "hotel" => 10231, "total" => 48332]
        ],
        "Gard" => [
            "nuitees" => 21380521,
            "hebergement" => ["collectif" => 11402, "locatif" => 13392, "plein_air" => 66087, "hotel" => 6912, "total" => 97793]
        ],
        "Aude" => [
            "nuitees" => 16150703,
            "hebergement" => ["collectif" => 11534, "locatif" => 21106, "plein_air" => 35451, "hotel" => 7662, "total" => 75753]
        ],
        "Hautes-Pyrénées" => [
            "nuitees" => 10962970,
            "hebergement" => ["collectif" => 25351, "locatif" => 16531, "plein_air" => 18796, "hotel" => 23963, "total" => 84641]
        ],
        "Aveyron" => [
            "nuitees" => 7944721,
            "hebergement" => ["collectif" => 5651, "locatif" => 18554, "plein_air" => 31042, "hotel" => 9705, "total" => 64952]
        ],
        "Lot" => [
            "nuitees" => 7879581,
            "hebergement" => ["collectif" => 6727, "locatif" => 21549, "plein_air" => 27180, "hotel" => 4823, "total" => 60279]
        ],
        "Tarn" => [
            "nuitees" => 6337459,
            "hebergement" => ["collectif" => 3786, "locatif" => 7661, "plein_air" => 8640, "hotel" => 3748, "total" => 23835]
        ],
        "Tarn-et-Garonne" => [
            "nuitees" => 6029670,
            "hebergement" => ["collectif" => 0, "locatif" => 3437, "plein_air" => 4383, "hotel" => 1127, "total" => 8947]
        ],
        "Gers" => [
            "nuitees" => 5696542,
            "hebergement" => ["collectif" => 4288, "locatif" => 11151, "plein_air" => 11943, "hotel" => 2536, "total" => 29918]
        ],
        "Ariège" => [
            "nuitees" => 4675476,
            "hebergement" => ["collectif" => 187, "locatif" => 2972, "plein_air" => 6337, "hotel" => 1138, "total" => 10634]
        ],
        "Lozère" => [
            "nuitees" => 3519266,
            "hebergement" => ["collectif" => 5551, "locatif" => 11957, "plein_air" => 8886, "hotel" => 118, "total" => 26512]
        ]
    ]
];





$donnees_tourisme_2018 = [
    'Janvier' => [
        '2018-01-01' => [
            'Ariège' => 110910, 'Aude' => 202467, 'Aveyron' => 102316, 'Gard' => 270737, 'Haute-Garonne' => 552455, 'Gers' => 81545, 'Hérault' => 536988, 'Lot' => 97033, 'Lozère' => 41982, 'Hautes-Pyrénées' => 241697, 'Pyrénées-Orientales' => 494665, 'Tarn' => 116257, 'Tarn-et-Garonne' => 91062, 'Total Occitanie' => 2998760
        ],
        '2018-01-08' => [
            'Ariège' => 47496, 'Aude' => 105647, 'Aveyron' => 47342, 'Gard' => 162135, 'Haute-Garonne' => 381224, 'Gers' => 44192, 'Hérault' => 343653, 'Lot' => 45055, 'Lozère' => 17304, 'Hautes-Pyrénées' => 75714, 'Pyrénées-Orientales' => 221982, 'Tarn' => 59398, 'Tarn-et-Garonne' => 59728, 'Total Occitanie' => 1610870
        ],
        '2018-01-15' => [
            'Ariège' => 46318, 'Aude' => 112182, 'Aveyron' => 49570, 'Gard' => 180825, 'Haute-Garonne' => 416416, 'Gers' => 48040, 'Hérault' => 367346, 'Lot' => 50216, 'Lozère' => 19986, 'Hautes-Pyrénées' => 98489, 'Pyrénées-Orientales' => 228653, 'Tarn' => 61220, 'Tarn-et-Garonne' => 60706, 'Total Occitanie' => 1739966
        ],
        '2018-01-22' => [
            'Ariège' => 52233, 'Aude' => 111250, 'Aveyron' => 47165, 'Gard' => 148440, 'Haute-Garonne' => 349975, 'Gers' => 41977, 'Hérault' => 329011, 'Lot' => 48313, 'Lozère' => 17506, 'Hautes-Pyrénées' => 104282, 'Pyrénées-Orientales' => 248116, 'Tarn' => 64881, 'Tarn-et-Garonne' => 54149, 'Total Occitanie' => 1617297
        ],
        '2018-01-29' => [
            'Ariège' => 42623, 'Aude' => 106430, 'Aveyron' => 45617, 'Gard' => 155363, 'Haute-Garonne' => 363454, 'Gers' => 45784, 'Hérault' => 347544, 'Lot' => 44262, 'Lozère' => 18532, 'Hautes-Pyrénées' => 111600, 'Pyrénées-Orientales' => 240032, 'Tarn' => 56195, 'Tarn-et-Garonne' => 54485, 'Total Occitanie' => 1631921
        ],
    ],
    'Février' => [
        '2018-02-05' => [
            'Ariège' => 53767, 'Aude' => 112559, 'Aveyron' => 50144, 'Gard' => 169730, 'Haute-Garonne' => 403363, 'Gers' => 50120, 'Hérault' => 393234, 'Lot' => 49895, 'Lozère' => 19231, 'Hautes-Pyrénées' => 161695, 'Pyrénées-Orientales' => 283816, 'Tarn' => 67091, 'Tarn-et-Garonne' => 58729, 'Total Occitanie' => 1873373
        ],
        '2018-02-12' => [
            'Ariège' => 93572, 'Aude' => 164165, 'Aveyron' => 72878, 'Gard' => 208676, 'Haute-Garonne' => 456636, 'Gers' => 53605, 'Hérault' => 457950, 'Lot' => 63940, 'Lozère' => 25736, 'Hautes-Pyrénées' => 230182, 'Pyrénées-Orientales' => 367433, 'Tarn' => 86644, 'Tarn-et-Garonne' => 71834, 'Total Occitanie' => 2347251
        ],
        '2018-02-19' => [
            'Ariège' => 110339, 'Aude' => 199437, 'Aveyron' => 99924, 'Gard' => 222581, 'Haute-Garonne' => 507315, 'Gers' => 61726, 'Hérault' => 511164, 'Lot' => 80507, 'Lozère' => 34061, 'Hautes-Pyrénées' => 245684, 'Pyrénées-Orientales' => 466226, 'Tarn' => 98094, 'Tarn-et-Garonne' => 84964, 'Total Occitanie' => 2722021
        ],
        '2018-02-26' => [
            'Ariège' => 99738, 'Aude' => 201568, 'Aveyron' => 98565, 'Gard' => 212966, 'Haute-Garonne' => 468126, 'Gers' => 70882, 'Hérault' => 510327, 'Lot' => 79319, 'Lozère' => 36225, 'Hautes-Pyrénées' => 224507, 'Pyrénées-Orientales' => 442851, 'Tarn' => 93795, 'Tarn-et-Garonne' => 82250, 'Total Occitanie' => 2621119
        ],
    ],
    'Mars' => [
        '2018-03-05' => [
            'Ariège' => 86996, 'Aude' => 169133, 'Aveyron' => 78578, 'Gard' => 221634, 'Haute-Garonne' => 508576, 'Gers' => 74243, 'Hérault' => 496731, 'Lot' => 71369, 'Lozère' => 33015, 'Hautes-Pyrénées' => 192004, 'Pyrénées-Orientales' => 363859, 'Tarn' => 84017, 'Tarn-et-Garonne' => 89976, 'Total Occitanie' => 2469130
        ],
        '2018-03-12' => [
            'Ariège' => 53490, 'Aude' => 179497, 'Aveyron' => 78646, 'Gard' => 185819, 'Haute-Garonne' => 439883, 'Gers' => 60488, 'Hérault' => 446918, 'Lot' => 66181, 'Lozère' => 26276, 'Hautes-Pyrénées' => 139993, 'Pyrénées-Orientales' => 312870, 'Tarn' => 80828, 'Tarn-et-Garonne' => 79305, 'Total Occitanie' => 2153194
        ],
        '2018-03-19' => [
            'Ariège' => 60773, 'Aude' => 184754, 'Aveyron' => 88566, 'Gard' => 231656, 'Haute-Garonne' => 495200, 'Gers' => 73632, 'Hérault' => 539312, 'Lot' => 77343, 'Lozère' => 29277, 'Hautes-Pyrénées' => 132872, 'Pyrénées-Orientales' => 318643, 'Tarn' => 88675, 'Tarn-et-Garonne' => 86515, 'Total Occitanie' => 2407218
        ],
        '2018-03-26' => [
            'Ariège' => 75424, 'Aude' => 277825, 'Aveyron' => 114624, 'Gard' => 321002, 'Haute-Garonne' => 569220, 'Gers' => 85417, 'Hérault' => 768072, 'Lot' => 110999, 'Lozère' => 44287, 'Hautes-Pyrénées' => 212672, 'Pyrénées-Orientales' => 487553, 'Tarn' => 108867, 'Tarn-et-Garonne' => 96113, 'Total Occitanie' => 3271975
        ],
    ],
    'Avril' => [
        '2018-04-02' => [
            'Ariège' => 54242, 'Aude' => 238679, 'Aveyron' => 101245, 'Gard' => 311615, 'Haute-Garonne' => 473609, 'Gers' => 79436, 'Hérault' => 686220, 'Lot' => 102753, 'Lozère' => 42855, 'Hautes-Pyrénées' => 149261, 'Pyrénées-Orientales' => 369367, 'Tarn' => 92887, 'Tarn-et-Garonne' => 90707, 'Total Occitanie' => 2793876
        ],
        '2018-04-09' => [
            'Ariège' => 61046, 'Aude' => 239749, 'Aveyron' => 109654, 'Gard' => 340180, 'Haute-Garonne' => 482170, 'Gers' => 86484, 'Hérault' => 781180, 'Lot' => 111661, 'Lozère' => 53777, 'Hautes-Pyrénées' => 127302, 'Pyrénées-Orientales' => 412951, 'Tarn' => 102987, 'Tarn-et-Garonne' => 93929, 'Total Occitanie' => 2999072
        ],
        '2018-04-16' => [
            'Ariège' => 76669, 'Aude' => 304069, 'Aveyron' => 150780, 'Gard' => 401258, 'Haute-Garonne' => 518584, 'Gers' => 101989, 'Hérault' => 933690, 'Lot' => 152724, 'Lozère' => 66798, 'Hautes-Pyrénées' => 188642, 'Pyrénées-Orientales' => 525348, 'Tarn' => 125041, 'Tarn-et-Garonne' => 112048, 'Total Occitanie' => 3656640
        ],
        '2018-04-23' => [
            'Ariège' => 60030, 'Aude' => 240735, 'Aveyron' => 116805, 'Gard' => 400370, 'Haute-Garonne' => 398566, 'Gers' => 82522, 'Hérault' => 994407, 'Lot' => 131525, 'Lozère' => 73953, 'Hautes-Pyrénées' => 108800, 'Pyrénées-Orientales' => 453088, 'Tarn' => 98041, 'Tarn-et-Garonne' => 90840, 'Total Occitanie' => 3341682
        ],
        '2018-04-30' => [
            'Ariège' => 71493, 'Aude' => 317400, 'Aveyron' => 138317, 'Gard' => 397847, 'Haute-Garonne' => 487194, 'Gers' => 104521, 'Hérault' => 1007091, 'Lot' => 163171, 'Lozère' => 75019, 'Hautes-Pyrénées' => 187068, 'Pyrénées-Orientales' => 572206, 'Tarn' => 119467, 'Tarn-et-Garonne' => 106312, 'Total Occitanie' => 3796106
        ],
    ],
    'Mai' => [
        '2018-05-07' => [
            'Ariège' => 96052, 'Aude' => 393301, 'Aveyron' => 204445, 'Gard' => 509306, 'Haute-Garonne' => 545450, 'Gers' => 127289, 'Hérault' => 1294380, 'Lot' => 224079, 'Lozère' => 101441, 'Hautes-Pyrénées' => 232176, 'Pyrénées-Orientales' => 664167, 'Tarn' => 148247, 'Tarn-et-Garonne' => 133347, 'Total Occitanie' => 4737980
        ],
        '2018-05-14' => [
            'Ariège' => 54526, 'Aude' => 243459, 'Aveyron' => 123033, 'Gard' => 315751, 'Haute-Garonne' => 468939, 'Gers' => 94336, 'Hérault' => 739821, 'Lot' => 124233, 'Lozère' => 55572, 'Hautes-Pyrénées' => 215178, 'Pyrénées-Orientales' => 443356, 'Tarn' => 119091, 'Tarn-et-Garonne' => 113728, 'Total Occitanie' => 3111023
        ],
        '2018-05-21' => [
            'Ariège' => 37618, 'Aude' => 151699, 'Aveyron' => 75166, 'Gard' => 215978, 'Haute-Garonne' => 274769, 'Gers' => 59754, 'Hérault' => 450787, 'Lot' => 69456, 'Lozère' => 36788, 'Hautes-Pyrénées' => 102014, 'Pyrénées-Orientales' => 260216, 'Tarn' => 63686, 'Tarn-et-Garonne' => 68051, 'Total Occitanie' => 1865980
        ],
        '2018-05-28' => [
            'Ariège' => 61280, 'Aude' => 288497, 'Aveyron' => 136048, 'Gard' => 373784, 'Haute-Garonne' => 563360, 'Gers' => 106641, 'Hérault' => 896905, 'Lot' => 135153, 'Lozère' => 64247, 'Hautes-Pyrénées' => 200472, 'Pyrénées-Orientales' => 496462, 'Tarn' => 123607, 'Tarn-et-Garonne' => 123238, 'Total Occitanie' => 3619694
        ],
    ],
    'Juin' => [
        '2018-06-04' => [
            'Ariège' => 64947, 'Aude' => 287990, 'Aveyron' => 134292, 'Gard' => 361991, 'Haute-Garonne' => 518535, 'Gers' => 111204, 'Hérault' => 863194, 'Lot' => 141843, 'Lozère' => 67197, 'Hautes-Pyrénées' => 196384, 'Pyrénées-Orientales' => 530081, 'Tarn' => 121216, 'Tarn-et-Garonne' => 120739, 'Total Occitanie' => 3600603
        ],
        '2018-06-11' => [
            'Ariège' => 74635, 'Aude' => 340005, 'Aveyron' => 145372, 'Gard' => 417847, 'Haute-Garonne' => 565678, 'Gers' => 103167, 'Hérault' => 1042017, 'Lot' => 141190, 'Lozère' => 73914, 'Hautes-Pyrénées' => 211961, 'Pyrénées-Orientales' => 632023, 'Tarn' => 120023, 'Tarn-et-Garonne' => 128367, 'Total Occitanie' => 4040212
        ],
        '2018-06-18' => [
            'Ariège' => 71183, 'Aude' => 357010, 'Aveyron' => 143742, 'Gard' => 422175, 'Haute-Garonne' => 555425, 'Gers' => 110500, 'Hérault' => 1075220, 'Lot' => 158506, 'Lozère' => 80570, 'Hautes-Pyrénées' => 251187, 'Pyrénées-Orientales' => 697101, 'Tarn' => 126954, 'Tarn-et-Garonne' => 128926, 'Total Occitanie' => 4178500
        ],
        '2018-06-25' => [
            'Ariège' => 98096, 'Aude' => 398940, 'Aveyron' => 184194, 'Gard' => 493881, 'Haute-Garonne' => 599924, 'Gers' => 140031, 'Hérault' => 1195233, 'Lot' => 199988, 'Lozère' => 84030, 'Hautes-Pyrénées' => 264406, 'Pyrénées-Orientales' => 807437, 'Tarn' => 158135, 'Tarn-et-Garonne' => 150102, 'Total Occitanie' => 4774403
        ],
    ],
    'Juillet' => [
        '2018-07-02' => [
            'Ariège' => 160215, 'Aude' => 478522, 'Aveyron' => 239655, 'Gard' => 569504, 'Haute-Garonne' => 651090, 'Gers' => 207039, 'Hérault' => 1387143, 'Lot' => 234329, 'Lozère' => 113429, 'Hautes-Pyrénées' => 262508, 'Pyrénées-Orientales' => 980635, 'Tarn' => 171426, 'Tarn-et-Garonne' => 183919, 'Total Occitanie' => 5645414
        ],
        '2018-07-09' => [
            'Ariège' => 205911, 'Aude' => 627068, 'Aveyron' => 313063, 'Gard' => 743008, 'Haute-Garonne' => 710404, 'Gers' => 256347, 'Hérault' => 1767718, 'Lot' => 321445, 'Lozère' => 152143, 'Hautes-Pyrénées' => 335186, 'Pyrénées-Orientales' => 1316283, 'Tarn' => 211411, 'Tarn-et-Garonne' => 207986, 'Total Occitanie' => 7168013
        ],
        '2018-07-16' => [
            'Ariège' => 179438, 'Aude' => 698291, 'Aveyron' => 351164, 'Gard' => 903645, 'Haute-Garonne' => 745528, 'Gers' => 226718, 'Hérault' => 2005052, 'Lot' => 363113, 'Lozère' => 157669, 'Hautes-Pyrénées' => 374338, 'Pyrénées-Orientales' => 1508647, 'Tarn' => 225352, 'Tarn-et-Garonne' => 211109, 'Total Occitanie' => 7960064
        ],
        '2018-07-23' => [
            'Ariège' => 201234, 'Aude' => 759874, 'Aveyron' => 364735, 'Gard' => 925896, 'Haute-Garonne' => 733833, 'Gers' => 277416, 'Hérault' => 2089791, 'Lot' => 412876, 'Lozère' => 163162, 'Hautes-Pyrénées' => 473661, 'Pyrénées-Orientales' => 1562057, 'Tarn' => 240161, 'Tarn-et-Garonne' => 224584, 'Total Occitanie' => 8329277
        ],
        '2018-07-30' => [
            'Ariège' => 215898, 'Aude' => 761143, 'Aveyron' => 373784, 'Gard' => 933108, 'Haute-Garonne' => 674084, 'Gers' => 268095, 'Hérault' => 2245137, 'Lot' => 451077, 'Lozère' => 196606, 'Hautes-Pyrénées' => 400904, 'Pyrénées-Orientales' => 1650940, 'Tarn' => 251777, 'Tarn-et-Garonne' => 209859, 'Total Occitanie' => 8502245
        ],
    ],
    'Août' => [
        '2018-08-06' => [
            'Ariège' => 239494, 'Aude' => 841211, 'Aveyron' => 453174, 'Gard' => 1038980, 'Haute-Garonne' => 674825, 'Gers' => 257698, 'Hérault' => 2562001, 'Lot' => 459299, 'Lozère' => 215565, 'Hautes-Pyrénées' => 425041, 'Pyrénées-Orientales' => 1802092, 'Tarn' => 271455, 'Tarn-et-Garonne' => 213194, 'Total Occitanie' => 9403762
        ],
        '2018-08-13' => [
            'Ariège' => 254365, 'Aude' => 884811, 'Aveyron' => 441576, 'Gard' => 1012956, 'Haute-Garonne' => 743714, 'Gers' => 257692, 'Hérault' => 2630460, 'Lot' => 476574, 'Lozère' => 216298, 'Hautes-Pyrénées' => 516179, 'Pyrénées-Orientales' => 1878206, 'Tarn' => 291910, 'Tarn-et-Garonne' => 226151, 'Total Occitanie' => 9789620
        ],
        '2018-08-20' => [
            'Ariège' => 185813, 'Aude' => 694511, 'Aveyron' => 319934, 'Gard' => 748693, 'Haute-Garonne' => 719505, 'Gers' => 199762, 'Hérault' => 2147224, 'Lot' => 363577, 'Lozère' => 133931, 'Hautes-Pyrénées' => 448221, 'Pyrénées-Orientales' => 1546426, 'Tarn' => 217626, 'Tarn-et-Garonne' => 184947, 'Total Occitanie' => 7908977
        ],
        '2018-08-27' => [
            'Ariège' => 134522, 'Aude' => 531382, 'Aveyron' => 221685, 'Gard' => 536718, 'Haute-Garonne' => 677314, 'Gers' => 158757, 'Hérault' => 1614779, 'Lot' => 227165, 'Lozère' => 87568, 'Hautes-Pyrénées' => 299873, 'Pyrénées-Orientales' => 1129095, 'Tarn' => 163113, 'Tarn-et-Garonne' => 164121, 'Total Occitanie' => 5886090
        ],
    ],
    'Septembre' => [
        '2018-09-03' => [
            'Ariège' => 100297, 'Aude' => 393234, 'Aveyron' => 170870, 'Gard' => 501664, 'Haute-Garonne' => 647847, 'Gers' => 119023, 'Hérault' => 1247140, 'Lot' => 180186, 'Lozère' => 85898, 'Hautes-Pyrénées' => 266597, 'Pyrénées-Orientales' => 817904, 'Tarn' => 129220, 'Tarn-et-Garonne' => 139729, 'Total Occitanie' => 4799609
        ],
        '2018-09-10' => [
            'Ariège' => 83969, 'Aude' => 398966, 'Aveyron' => 162414, 'Gard' => 500290, 'Haute-Garonne' => 661283, 'Gers' => 104597, 'Hérault' => 1271201, 'Lot' => 157599, 'Lozère' => 71083, 'Hautes-Pyrénées' => 274445, 'Pyrénées-Orientales' => 766828, 'Tarn' => 124840, 'Tarn-et-Garonne' => 130962, 'Total Occitanie' => 4708437
        ],
        '2018-09-17' => [
            'Ariège' => 64277, 'Aude' => 344321, 'Aveyron' => 125798, 'Gard' => 400376, 'Haute-Garonne' => 620985, 'Gers' => 93110, 'Hérault' => 1075572, 'Lot' => 128072, 'Lozère' => 63292, 'Hautes-Pyrénées' => 253663, 'Pyrénées-Orientales' => 652481, 'Tarn' => 112502, 'Tarn-et-Garonne' => 120273, 'Total Occitanie' => 4054720
        ],
        '2018-09-24' => [
            'Ariège' => 69001, 'Aude' => 297428, 'Aveyron' => 125153, 'Gard' => 371183, 'Haute-Garonne' => 604044, 'Gers' => 91586, 'Hérault' => 872131, 'Lot' => 121461, 'Lozère' => 63938, 'Hautes-Pyrénées' => 214791, 'Pyrénées-Orientales' => 510655, 'Tarn' => 97861, 'Tarn-et-Garonne' => 112183, 'Total Occitanie' => 3551415
        ],
    ],
    'Octobre' => [
        '2018-10-01' => [
            'Ariège' => 54835, 'Aude' => 265041, 'Aveyron' => 107752, 'Gard' => 321684, 'Haute-Garonne' => 580411, 'Gers' => 91039, 'Hérault' => 762813, 'Lot' => 98102, 'Lozère' => 44866, 'Hautes-Pyrénées' => 233874, 'Pyrénées-Orientales' => 419331, 'Tarn' => 90736, 'Tarn-et-Garonne' => 104223, 'Total Occitanie' => 3178798
        ],
        '2018-10-08' => [
            'Ariège' => 57933, 'Aude' => 254312, 'Aveyron' => 110572, 'Gard' => 349923, 'Haute-Garonne' => 606521, 'Gers' => 96980, 'Hérault' => 721886, 'Lot' => 112309, 'Lozère' => 52685, 'Hautes-Pyrénées' => 218064, 'Pyrénées-Orientales' => 425752, 'Tarn' => 111753, 'Tarn-et-Garonne' => 117302, 'Total Occitanie' => 3239992
        ],
        '2018-10-15' => [
            'Ariège' => 55864, 'Aude' => 220165, 'Aveyron' => 113361, 'Gard' => 377651, 'Haute-Garonne' => 632027, 'Gers' => 93331, 'Hérault' => 823888, 'Lot' => 107293, 'Lozère' => 56362, 'Hautes-Pyrénées' => 163295, 'Pyrénées-Orientales' => 347431, 'Tarn' => 97732, 'Tarn-et-Garonne' => 111678, 'Total Occitanie' => 3199078
        ],
        '2018-10-22' => [
            'Ariège' => 73540, 'Aude' => 260567, 'Aveyron' => 158926, 'Gard' => 447979, 'Haute-Garonne' => 648881, 'Gers' => 114279, 'Hérault' => 901954, 'Lot' => 142519, 'Lozère' => 77627, 'Hautes-Pyrénées' => 208478, 'Pyrénées-Orientales' => 450491, 'Tarn' => 137190, 'Tarn-et-Garonne' => 126820, 'Total Occitanie' => 3809231
        ],
        '2018-10-29' => [
            'Ariège' => 75352, 'Aude' => 238650, 'Aveyron' => 169773, 'Gard' => 433037, 'Haute-Garonne' => 599004, 'Gers' => 105500, 'Hérault' => 925197, 'Lot' => 150790, 'Lozère' => 80188, 'Hautes-Pyrénées' => 157207, 'Pyrénées-Orientales' => 456045, 'Tarn' => 134500, 'Tarn-et-Garonne' => 120710, 'Total Occitanie' => 3645953
        ],
    ],
    'Novembre' => [
        '2018-11-05' => [
            'Ariège' => 45425, 'Aude' => 152245, 'Aveyron' => 80573, 'Gard' => 299923, 'Haute-Garonne' => 486429, 'Gers' => 64681, 'Hérault' => 610268, 'Lot' => 74196, 'Lozère' => 32034, 'Hautes-Pyrénées' => 80008, 'Pyrénées-Orientales' => 255600, 'Tarn' => 80916, 'Tarn-et-Garonne' => 93134, 'Total Occitanie' => 2344412
        ],
        '2018-11-12' => [
            'Ariège' => 33935, 'Aude' => 132892, 'Aveyron' => 70808, 'Gard' => 264983, 'Haute-Garonne' => 454416, 'Gers' => 60098, 'Hérault' => 561038, 'Lot' => 63852, 'Lozère' => 29274, 'Hautes-Pyrénées' => 78893, 'Pyrénées-Orientales' => 246825, 'Tarn' => 78359, 'Tarn-et-Garonne' => 91620, 'Total Occitanie' => 2177003
        ],
        '2018-11-19' => [
            'Ariège' => 26314, 'Aude' => 123930, 'Aveyron' => 58135, 'Gard' => 260610, 'Haute-Garonne' => 466734, 'Gers' => 50176, 'Hérault' => 556211, 'Lot' => 55242, 'Lozère' => 25363, 'Hautes-Pyrénées' => 64911, 'Pyrénées-Orientales' => 244388, 'Tarn' => 67925, 'Tarn-et-Garonne' => 82898, 'Total Occitanie' => 2102837
        ],
        '2018-11-26' => [
            'Ariège' => 22211, 'Aude' => 126852, 'Aveyron' => 63912, 'Gard' => 250873, 'Haute-Garonne' => 461469, 'Gers' => 53434, 'Hérault' => 502964, 'Lot' => 54992, 'Lozère' => 23338, 'Hautes-Pyrénées' => 53400, 'Pyrénées-Orientales' => 253862, 'Tarn' => 68867, 'Tarn-et-Garonne' => 81762, 'Total Occitanie' => 2018936
        ],
    ],
    'Décembre' => [
        '2018-12-03' => [
            'Ariège' => 23793, 'Aude' => 110069, 'Aveyron' => 50000, 'Gard' => 185119, 'Haute-Garonne' => 400357, 'Gers' => 40102, 'Hérault' => 379863, 'Lot' => 39881, 'Lozère' => 15801, 'Hautes-Pyrénées' => 44872, 'Pyrénées-Orientales' => 196673, 'Tarn' => 55539, 'Tarn-et-Garonne' => 57220, 'Total Occitanie' => 1608289
        ],
        '2018-12-10' => [
            'Ariège' => 27619, 'Aude' => 113775, 'Aveyron' => 56805, 'Gard' => 202524, 'Haute-Garonne' => 419663, 'Gers' => 47759, 'Hérault' => 408891, 'Lot' => 47483, 'Lozère' => 19231, 'Hautes-Pyrénées' => 51411, 'Pyrénées-Orientales' => 209729, 'Tarn' => 58642, 'Tarn-et-Garonne' => 69425, 'Total Occitanie' => 1732961
        ],
        '2018-12-17' => [
            'Ariège' => 67525, 'Aude' => 193923, 'Aveyron' => 104525, 'Gard' => 289029, 'Haute-Garonne' => 592173, 'Gers' => 97872, 'Hérault' => 634947, 'Lot' => 138316, 'Lozère' => 45306, 'Hautes-Pyrénées' => 161184, 'Pyrénées-Orientales' => 363602, 'Tarn' => 119503, 'Tarn-et-Garonne' => 108855, 'Total Occitanie' => 2916760
        ],
        '2018-12-24' => [
            'Ariège' => 145398, 'Aude' => 305005, 'Aveyron' => 206122, 'Gard' => 487046, 'Haute-Garonne' => 851924, 'Gers' => 141350, 'Hérault' => 863676, 'Lot' => 189249, 'Lozère' => 74397, 'Hautes-Pyrénées' => 377750, 'Pyrénées-Orientales' => 664457, 'Tarn' => 206582, 'Tarn-et-Garonne' => 160568, 'Total Occitanie' => 4669524
        ],
        '2018-12-31' => [
            'Ariège' => 26681, 'Aude' => 49482, 'Aveyron' => 29585, 'Gard' => 77267, 'Haute-Garonne' => 137257, 'Gers' => 22162, 'Hérault' => 153813, 'Lot' => 29453, 'Lozère' => 12634, 'Hautes-Pyrénées' => 71178, 'Pyrénées-Orientales' => 131465, 'Tarn' => 29471, 'Tarn-et-Garonne' => 23002, 'Total Occitanie' => 793450
        ],
    ],
];

// Exemple d'utilisation : Afficher le total Occitanie pour la première semaine de Janvier

?>


