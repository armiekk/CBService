<?php
    require './database.php';
    require './convertToXML.php';
    $result = mysql_query("SELECT * FROM product");
    $strXML = sqlToXml($result, "products", "product");

    $xml = new SimpleXMLElement($strXML);
    echo $xml->asXML();
    mysql_close($con);
 ?>
