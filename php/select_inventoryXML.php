<?php

	include 'connect.php';
	
	$sql = "SELECT * FROM cb_inventory";
    $query = mysql_query($sql);
    //$data=array();
	
	$xml = new XMLWriter();

	$xml->openURI("php://output");
	$xml->startDocument();
	$xml->setIndent(true);
	
	$xml->startElement('inventories');
    while($row = mysql_fetch_assoc($query))
    {
        //array_push($data,$row);
		
		$xml->startElement("ID");
		$xml->writeRaw($row['Cb_Inv_ID']);
		$xml->endElement();
		$xml->startElement("Name");
		$xml->writeRaw($row['Cb_Inv_Name']);
		$xml->endElement();
		$xml->startElement("Price");
		$xml->writeRaw($row['Cb_Inv_Prices']);
		$xml->endElement();
		$xml->startElement("Balance");
		$xml->writeRaw($row['Cb_Inv_Balance']);

		$xml->endElement();
    }
    $xml->endElement();

	header('Content-type: text/xml');
	$xml->flush();
	
	print "XML";
?>