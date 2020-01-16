<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-15
 * Time: 10:24
 */
/*
Klasė: 5b
    o Kodas (turi būti sugeneruotas naudojant rand funkciją)
    o Duomenų formavimo data (turi būti šios dienos naudojant date funkciją, lietuvišku
    formatu)
    o Vardas (turi būti transformuotas į didžiąsias raides)
    o Pavardė (turi būti transformuota į didžiąsias raides)
    o Kontrolinių darbų įvertinimai:
         Matematika: 5
         Informacinės technologijos: 9
         Anglų kalba: 10
*/

$pupilsData = [
    "classes" => [
        "class 4a" => [
            "pupil-1" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("richard"),
                "lastName" => strtoupper("hammond"),
                "exams" => [
                    "Math" => 6,
                    "Computer Science" => 8,
                    "SQL databases" => 7,
                    "Python scripting" => 9
                ],
            ],
            "pupil-2" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("jeremy"),
                "lastName" => strtoupper("clarkson"),
                "exams" => [
                    "Math" => 8,
                    "Computer Science" => 9,
                    "SQL databases" => 8,
                    "Python scripting" => 10
                ],
            ],
            "pupil-3" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("james"),
                "lastName" => strtoupper("may"),
                "exams" => [
                    "Math" => 8,
                    "Computer Science" => 6,
                    "SQL databases" => 9,
                    "Python scripting" => 4
                ],
            ],
        ],
        "class 4b" => [
            "pupil-1" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("lars"),
                "lastName" => strtoupper("ulrich"),
                "exams" => [
                    "Math" => 10,
                    "Computer Science" => 8,
                    "SQL databases" => 7,
                    "Python scripting" => 9
                ],
            ],
            "pupil-2" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("kirk"),
                "lastName" => strtoupper("hammet"),
                "exams" => [
                    "Math" => 9,
                    "Computer Science" => 10,
                    "SQL databases" => 8,
                    "Python scripting" => 7
                ],
            ],
            "pupil-3" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("jason"),
                "lastName" => strtoupper("newsted"),
                "exams" => [
                    "Math" => 8,
                    "Computer Science" => 8,
                    "SQL databases" => 8,
                    "Python scripting" => 8
                ],
            ],
            "pupil-4" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("james"),
                "lastName" => strtoupper("hetfield"),
                "exams" => [
                    "Math" => 9,
                    "Computer Science" => 4,
                    "SQL databases" => 7,
                    "Python scripting" => 9
                ],
            ]
        ],
        "class 4c" => [
            "pupil-1" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("frank"),
                "lastName" => strtoupper("sinatra"),
                "exams" => [
                    "Math" => 8,
                    "Computer Science" => 7,
                    "SQL databases" => 9,
                    "Python scripting" => 10
                ],
            ],
            "pupil-2" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("johnny"),
                "lastName" => strtoupper("cash"),
                "exams" => [
                    "Math" => 7,
                    "Computer Science" => 8,
                    "SQL databases" => 8,
                    "Python scripting" => 5
                ],
            ],
            "pupil-3" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("luois"),
                "lastName" => strtoupper("armstrong"),
                "exams" => [
                    "Math" => 2,
                    "Computer Science" => 3,
                    "SQL databases" => 1,
                    "Python scripting" => 7
                ],
            ],
            "pupil-4" => [
                "id" => rand(1000, 9999),
                "recordDate" => date("Y-m-d"),
                "name" => strtoupper("barry"),
                "lastName" => strtoupper("white"),
                "exams" => [
                    "Math" => 7,
                    "Computer Science" => 6,
                    "SQL databases" => 5,
                    "Python scripting" => 7
                ]
            ]
    ]
    ]
];
