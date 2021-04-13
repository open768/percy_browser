//<script>
function onLoadJQuery_INDEX(){
	$("#status").html("loaded jquery");
	$("#chooser").solinstrumentChooser({
		onStatus:onStatusEvent,
		onSelect:onSelectSolInstrEvent,
		mission:cMission
	});
}

function onStatusEvent(poEvent){
}

function onSelectSolInstrEvent(poEvent){
}

$(onLoadJQuery_INDEX);
//</script>