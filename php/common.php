<?php
	$phpinc = realpath("$root/../phpinc");
	$spaceinc = realpath("$root/../spaceinc");
	
	//start the session first ask questions later
	require_once "$phpinc/ckinc/session.php";
	cSession::set_folder();
	session_start();
	
	//includes
	require_once "$phpinc/ckinc/secret.php";
	require_once "$phpinc/ckinc/common.php";
	require_once "$phpinc/ckinc/auth.php" ;
	require_once "$phpinc/ckinc/header.php";
	require_once "$spaceinc/perseverance/perseverance.php" ;
	
	//check if debugging is needed
	require_once("$phpinc/ckinc/debug.php");
	cDebug::check_GET_or_POST();


	
	//requests without www get redirected to http
	if (!cDebug::is_localhost()){
		if ( strpos($_SERVER["HTTP_HOST"],'www') === false){
			$newURL = "http://www.".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
			cHeader::redirect($newURL);
			end;
		}
		
		//requests without https get redirected to https
	}
	

?>