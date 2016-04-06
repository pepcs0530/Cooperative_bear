<?php

	include 'connect.php';
	
	$sql = "SELECT * FROM cb_inventory";
    $query = mysql_query($sql);
    $data=array();
    while($row = mysql_fetch_array ($query))
    {
        array_push($data,$row);
    }
    echo json_encode($data);
	
	
	/*
	$xml = new XMLWriter();
	
	$xml->openURI("php://output");
	$xml->startDocument();
	$xml->setIndent(true);
	
	$xml->startElement('inventories');
	while ($rowXML = mysql_fetch_assoc($query)) {
	  $xml->startElement("ID");
	  $xml->writeRaw($rowXML['Cb_Inv_ID']);
	  $xml->startElement("Name");
	  $xml->writeRaw($rowXML['Cb_Inv_Name']);
	  $xml->startElement("Price");
	  $xml->writeRaw($rowXML['Cb_Inv_Prices']);
	  $xml->startElement("Balance");
	  $xml->writeRaw($rowXML['Cb_Inv_Balance']);

	  $xml->endElement();
	}
	
	$xml->endElement();

	header('Content-type: text/xml');
	$xml->flush();
	*/
	
	/*
	$sql = "SELECT * FROM cb_inventory";
    $query = mysql_query($sql);
    $data=array();
	
	$xml = new XMLWriter();
	$xml->openURI("php://output");
	$xml->startDocument();
	$xml->setIndent(true);
	$xml->startElement('inventories');
	
    while($row = mysql_fetch_array ($query))
    {
        array_push($data,$row);
		
		$xml->startElement("ID");
		$xml->writeRaw($row['Cb_Inv_ID']);
		$xml->startElement("Name");
		$xml->writeRaw($row['Cb_Inv_Name']);
		$xml->startElement("Price");
		$xml->writeRaw($row['Cb_Inv_Prices']);
		$xml->startElement("Balance");
		$xml->writeRaw($row['Cb_Inv_Balance']);
		
		$xml->endElement();
    }
    echo json_encode($data);
	
	$xml->endElement();

	header('Content-type: text/xml');
	$xml->flush();
	*/
?>