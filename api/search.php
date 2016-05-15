<?php

$checkpotdNo = $_POST['search'];
$client = new SoapClient("../services/cooperative_bear.wsdl");
echo $client->checkprod($checkpotdNo);
?>
