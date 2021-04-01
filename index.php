<?php
	$root=realpath(".");
	require_once("$root/php/common.php");
	
	$sSol = cHeader::get("sol");
	$sInstr = cHeader::get("sol");
	
	cOBjStoreDB::$SHOW_SQL = true;
	$oRover = new cPerseverance;
	
	if ($sSol){
		cDebug::write("TBD show sol details");
	}elseif ($sInstr){
		cDebug::write("TBD show sol,instrument details");
	}else{
		cDebug::write("TBD show list of sols");
	}
	
?>