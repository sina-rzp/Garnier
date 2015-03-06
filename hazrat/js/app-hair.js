$(document).ready(function() { 
   
   	//steps to activate questionnaires. Must be done repeatedly with all questionnaires.
	/*
	1) Add HTML Container for quest, @include templates via PHP code & jqury plugin file.
	2) init quest on Container & pass sufficient param.
	*/

	//Step 2:
	/*$('#whiteningContainer').garnierWhitening({
		action: 'init', rootContainerName: 'whiteningContainer'
	});*/
	/*$('#acneContainer').garnierAcne({
		action: 'init', rootContainerName: 'acneContainer'
	});*/
	/*$('#garnierMenContainer').garnierMen({
		action: 'init', rootContainerName: 'garnierMenContainer'
	});*/
	$('#hairContainer').garnierHair({
		action: 'init', rootContainerName: 'hairContainer'
	});

	window.prettyPrint && prettyPrint()

	

});