<?php
$magnitude = 2;

switch($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
    break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
}