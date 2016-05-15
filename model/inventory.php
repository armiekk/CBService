<?php
    require './database.php';
    $result = mysql_query("SELECT * FROM cb_inventory");
    $strXML = "<inventories>";
    while($row = mysql_fetch_assoc($result))
    {
        $strXML = $strXML."<product>";

		    $strXML = $strXML."<id>".$row['Cb_Inv_ID']."</id>";

        $strXML = $strXML."<name>".$row['Cb_Inv_Name']."</name>";

        $strXML = $strXML."<price>".$row['Cb_Inv_Price']."</price>";

        $strXML = $strXML."<qty>".$row['Cb_Inv_Qty']."</qty>";

        $strXML = $strXML."</product>";
    }
    $strXML = $strXML."</inventories>";

    $xml = new SimpleXMLElement($strXML);
    echo $xml->asXML();
    mysql_close($con);
 ?>
