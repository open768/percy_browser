<?php
	$root=realpath(".");
	require_once("$root/php/common.php");
	$jsinc = "../jsinc";

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
	require_once("$root/php/fragments/header.php");
?>
	<script type="text/javascript" src="js/widgets/solinstrchooser.js"></script>
	<script type="text/javascript" src="js/pages/index.js"></script>
	<div id="chooser">Loading</div>
<?php
	require_once("$root/php/fragments/footer.php");
?>
