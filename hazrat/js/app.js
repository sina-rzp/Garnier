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


	
	//$('#whiteningContainer').garnierWhitening('init', null, 'whiteningContainer');
	//$('#acneContainer').garnierAcne('init');

	/*$('#rootWhitening').bootstrapWizard({
			onTabShow: function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				var $percent = ($current/$total) * 100;
				$('#rootWhitening .progress-bar').css({width:$percent+'%'});
			},
			onTabClick: function(tab, navigation, index) {
				return false;
			},
			onNext: function(tab, navigation, index) {
				var chosenOptionTab1 = $('input:radio[name=optionsOnTab1]').filter(":checked").val();
				var chosenOptionTab2 = $('input:radio[name=optionsOnTab2]').filter(":checked").val();

				if(index === 1){
		            $('#whiteningContainer').garnierWhitening({
		            	action: 'loadNextTabOptions', 
		            	chosenOptionIdx: chosenOptionTab1 
		            });
		            //$('#whiteningContainer').garnierWhitening('loadNextTabOptions', chosenOptionTab1 );
				}else if(index === 2){
					$('#whiteningContainer').garnierWhitening({
		            	action: 'loadRecommendedItem', 
		            	chosenOptionIdx: chosenOptionTab2 
		            });
		            //$('#whiteningContainer').garnierWhitening('loadRecommendedItem', chosenOptionTab2);
				}
	        }
	});*/
	window.prettyPrint && prettyPrint()

	

});