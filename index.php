<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$A = [
    "Z1" => [
        "X1" => [
            "Y1" => "2",
            "Y2" => "4",
            "Y3" => "6",
            "Y4" => "8"
        ],
        "X2" => [
            "Y1" => "10",
            "Y2" => "12",
            "Y3" => "14",
            "Y4" => "16"
        ],
        "X3" => [
            "Y1" => "18",
            "Y2" => "20",
            "Y3" => "22",
            "Y4" => "24"
        ],
        "X4" => [
            "Y1" => "26",
            "Y2" => "28",
            "Y3" => "30",
            "Y4" => "32"
        ],
    ],
    "Z2" => [
        "X1" => [
            "Y1" => "34",
            "Y2" => "36",
            "Y3" => "38",
            "Y4" => "40"
        ],
        "X2" => [
            "Y1" => "42",
            "Y2" => "44",
            "Y3" => "46",
            "Y4" => "48"
        ],
        "X3" => [
            "Y1" => "50",
            "Y2" => "52",
            "Y3" => "54",
            "Y4" => "56"
        ],
        "X4" => [
            "Y1" => "58",
            "Y2" => "60",
            "Y3" => "62",
            "Y4" => "64"
        ],
    ],
    "Z3" => [
        "X1" => [
            "Y1" => "66",
            "Y2" => "68",
            "Y3" => "70",
            "Y4" => "72"
        ],
        "X2" => [
            "Y1" => "74",
            "Y2" => "76",
            "Y3" => "78",
            "Y4" => "80"
        ],
        "X3" => [
            "Y1" => "82",
            "Y2" => "84",
            "Y3" => "86",
            "Y4" => "88"
        ],
        "X4" => [
            "Y1" => "90",
            "Y2" => "92",
            "Y3" => "94",
            "Y4" => "96"
        ],
    ],
    "Z4" => [
        "X1" => [
            "Y1" => "98",
            "Y2" => "100",
            "Y3" => "102",
            "Y4" => "104"
        ],
        "X2" => [
            "Y1" => "106",
            "Y2" => "108",
            "Y3" => "110",
            "Y4" => "112"
        ],
        "X3" => [
            "Y1" => "114",
            "Y2" => "116",
            "Y3" => "118",
            "Y4" => "120"
        ],
        "X4" => [
            "Y1" => "122",
            "Y2" => "124",
            "Y3" => "126",
            "Y4" => "128"
        ],
    ]
];

function MostrarMatrizTridimensional($A) {

    while (list($indicez, $valorz) = each($A)) {
        while (list($indicex, $valorx) = each($valorz)) {
            while (list($indicey, $valory) = each($valorx)) {
                echo "La matriz de indice1 " . $indicex . ", indice2 " . $indicey . " indice3 " . $indicez . " tiene el valor: " . $valory . "<br/>";
            }
        }
    }
}

MostrarMatrizTridimensional($A);

function CrearMatrizTridimensional($zfin, $xfin, $yfin, $zinc, $n) {
    $valor = 0;
    $matriz;
    for ($z = 1; $z < $zfin + 1; $z++) {
        for ($x = 1; $x < $xfin + 1; $x++) {
            for ($y = 1; $y < $yfin + 1; $y++) {
                if ($valor == 0) {
                    $valor = $n;
                } else {
                    $valor+=$zinc;
                }
                $matriz["Z" . $z]["X" . $x]["Y" . $y] = $valor;
            }
        }
    }
    return $matriz;
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "asjkfasjfbhaksjfbjkasbfkb";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$P = CrearMatrizTridimensional(5, 3, 4, 5, 3);

MostrarMatrizTridimensional($P);

function MostrarMatrizTridimensional_Z($A, $Z) {

    while (list($indicez, $valorz) = each($A)) {
        while (list($indicex, $valorx) = each($valorz)) {
            while (list($indicey, $valory) = each($valorx)) {
                if ($indicez == $Z) {
                    echo "La matriz de indice1 " . $indicex . ", indice2 " . $indicey . " indice3 " . $indicez . " tiene el valor: " . $valory . "<br/>";
                }
            }
        }
    }
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "asjkfasjfbhaksjfbjkasbfkb";
echo "<br/>";
echo "<br/>";
echo "<br/>";

MostrarMatrizTridimensional_Z($A, "Z4");

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "asjkfasjfbhaksjfbjkasbfkb";
echo "<br/>";
echo "<br/>";
echo "<br/>";

MostrarMatrizTridimensional_Z($P, "Z6");


        ?>
    </body>
</html>
