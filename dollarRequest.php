<?php

header('Content-type: text/html; charset=UTF-8');
$Moeda = "1";
$date = new DateTime(date('Y-m-d'));

// evitar que o arquivo WSDL seja colocado no cache
ini_set("soap.wsdl_cache_enabled", "0");
$WsSOAP = new SoapClient("https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl");

$array = [];
try {

    for ($i = 0; $i < 30; $i++) {
        $value = "";
        $dateBr = $date->format('d/m/Y');
        
        try {
            $result = $WsSOAP->getValor($Moeda, $dateBr);
            $value = $result;
            $array[] = ["date" => $dateBr, "value" => $value, "error" => ""];
        } catch (Exception $e) {
            $array[] = ["date" => $dateBr, "value" => "", "error" => "Error {$e->getMessage()}"];
            // $date->sub(new DateInterval('P1D'));
        }finally{
            $date->sub(new DateInterval('P1D'));
        }
    }
    // var_dump($array);
} catch (Exception $e) {
    $e->getMessage();
}
