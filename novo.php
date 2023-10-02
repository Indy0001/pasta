<?php

$anoatual = date("Y");
$mesatual = 1;

$pasta = "companies/shortname/financeiro/" . $anoatual;
if (!file_exists($pasta)) {
    mkdir($pasta, 0777, true);

} 
for ($mes = $mesatual; $mes <= 12; $mes++) {
    $mesano = sprintf("%02d", $mes);
    $pasta = "companies/shortname/financeiro/" . $anoatual. "/". $mesano ;
    if (!file_exists($pasta)) {
        mkdir($pasta, 0777, true);
    }
}
