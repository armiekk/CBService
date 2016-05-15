<?php
ini_set("soap.wsdl_cache_enabled", "0");

require '../api/database.php';
require '../api/convertToXML.php';

function checkprod($prodName)
{

		$result = mysql_query("SELECT * FROM product WHERE name LIKE '%".$prodName."%'");

    $strXML = sqlToXml($result, "products", "product");


    $xml = new SimpleXMLElement($strXML);


    if($xml->count() != 0)
    {
	    return $xml->asXML();
    }
    else
    {
        return "<err>ไม่พบข้อมูล</err>";
    }

}

$server = new SoapServer("./cooperative_bear.wsdl");
$server->addFunction('checkprod');
$server->handle();
?>
