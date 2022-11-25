<?php

$paragrafo = $_GET['paragr'];
$parola = $_GET['parola'];

echo $paragrafo . ' è lungo ' . strlen($paragrafo) . ' caratteri' . '<br>';

$paragrafoCensurato = str_ireplace($parola, '***', $paragrafo);
echo $paragrafoCensurato . ' è lungo '. strlen($paragrafoCensurato);