(function( $ ) {

	var chosenIdx1, chosenIdx2, settings;

	var questionnaire = {
	  "questions": [
	    "What is your skin concern?",
	    "What Is Your Skin Type?",
		  "We recommend..."
	  ],
	  "tab1": [
	    {
	      "optionItem": "I want healthy, radiant skin",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "fym/SW Whitening Mask.png",
	            "url": "SW-PinkishRadianceIntensiveWhiteningMask.php"
	          }
	        },
	        {
	          "optionItem": "Dry",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "fym/SW Whitening Mask.png",
	            "url": "SW-PinkishRadianceIntensiveWhiteningMask.php"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "fym/SW Whitening Mask.png",
	            "url": "SW-PinkishRadianceIntensiveWhiteningMask.php"
	          }
	        },
	        {
	          "optionItem": "Combination (i)",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White Range",
	            "image": "fym/SW Whitening Mask.png",
	            "url": "SW-PinkishRadianceIntensiveWhiteningMask.php"
	          }
	        },
	        {
	          "optionItem": "Oily",
	          "recommendedItem": {
	            "id": "LC_MULTIACTION",
	            "name": "Light Complete Multi-action whitening cream, SW Instant",
	            "image": "fym/LCW Night.png",
	            "url": "LC-MultiActionWhiteningCreamNightRestore.php"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I want to moisturise and protect my skin against harsh environments",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW, LC moisturizer (LC sensitive only)",
	            "image": "fym/SW Moisturizing.png",
	            "url": "SW-PinkishRadianceMoisturizingCreamSPF21.php "
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW, LC moisturizer",
	            "image": "fym/SW Moisturizing.png",
	            "url": "SW-PinkishRadianceMoisturizingCreamSPF21.php "
	          }
	        },
	        {
	          "optionItem": "Combination (i)",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW, LC moisturizer",
	            "image": "fym/SW Moisturizing.png",
	            "url": "SW-PinkishRadianceMoisturizingCreamSPF21.php "
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I have dull skin",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Sakura White",
	            "image": "fym/SW Gentle foam.png",
	            "url": "SW-PinkishRadianceGentleCleansingFoam.php"
	          }
	        },
	        {
	          "optionItem": "Dry",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW range",
	            "image": "fym/SW Gentle foam.png",
	            "url": "SW-PinkishRadianceGentleCleansingFoam.php"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Whitening + Oil Control] (Blue)",
	            "image": "fym/Duo Clean Whitening and Oil Control Foam.png",
	            "url": "DC-WhiteningandOilControlFoam.php"
	          }
	        },
	        {
	          "optionItem": "Combination (i)",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Whitening + Oil Control] (Blue)",
	            "image": "fym/Duo Clean Whitening and Oil Control Foam.png",
	            "url": "DC-WhiteningandOilControlFoam.php"
	          }
	        },
	        {
	          "optionItem": "Oily",
	          "recommendedItem": {
	            "id": "LC_MULTIACTION",
	            "name": "Duo Clean [Whitening + Oil Control] (Blue), Light Complete Multi-action whitening cream",
	            "image": "fym/Duo Clean Whitening and Oil Control Foam.png",
	            "url": "DC-WhiteningandOilControlFoam.php"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I have uneven skin tone",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "SW range, LC moisturizer (LC sensitive only)",
	            "image": "fym/SW Moisturizing.png",
	            "url": "SW-PinkishRadianceMoisturizingCreamSPF21.php"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "fym/LCW Extra UV.png",
	            "url": "LC-MultiActionWhiteningCreamExtraUVProtectionSP20.php"
	          }
	        },
	        {
	          "optionItem": "Combination (i)",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "fym/LCW Extra UV.png",
	            "url": "LC-MultiActionWhiteningCreamExtraUVProtectionSP20.php"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I want to get rid of dark spots",
	      "nextTab": [
	        {
	          "optionItem": "Sensitive",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "fym/LCW Extra UV.png",
	            "url": "LC-MultiActionWhiteningCreamExtraUVProtectionSP20.php"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "fym/LCW Extra UV.png",
	            "url": "LC-MultiActionWhiteningCreamExtraUVProtectionSP20.php"
	          }
	        },
	        {
	          "optionItem": "Combination (i)",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "LC range",
	            "image": "fym/LCW Extra UV.png",
	            "url": "LC-MultiActionWhiteningCreamExtraUVProtectionSP20.php"
	          }
	        }
	      ]
	    },
	    {
	      "optionItem": "I want to minimise my pores",
	      "nextTab": [
	        {
	          "optionItem": "Oily",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Double White] (Black)",
	            "image": "fym/Duo Clean Whitening And Foam.png",
	            "url": "DC-WhiteningandPoreMinimizingFoam.php"
	          }
	        },
	        {
	          "optionItem": "Normal",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Double White] (Black)",
	            "image": "fym/Duo Clean Whitening And Foam.png",
	            "url": "DC-WhiteningandPoreMinimizingFoam.php"
	          }
	        },
	        {
	          "optionItem": "Combination (i)",
	          "recommendedItem": {
	            "id": "SAKURA_WHITE_RANGE",
	            "name": "Duo Clean [Double White] (Black)",
	            "image": "fym/Duo Clean Whitening And Foam.png",
	            "url": "DC-WhiteningandPoreMinimizingFoam.php"
	          }
	        }
	      ]
	    }
	  ]
	};
  
	var populateTabHeaders = function(){
		//var tab1 = $('#tab1Header');
		//var tab2 = $('#tab2Header');
		//var tab3 = $('#tab3Header');
		var questions = questionnaire['questions'];

		for(var i=1; i<=questions.length; i++){
			$('#'+settings.rootContainerName+' #tab'+i+'Header').html( questions[i-1] );
		}
	}

	var populateQuestions = function(){
		//var ul = $('#'+settings.rootContainerName+' #tab1 > ul');
		var ul = $('#'+settings.rootContainerName+' #tab1 .tanyelah');
		var questions = questionnaire['tab1'];

		for(var i=0; i<questions.length; i++){
			ul.append('<div class="radio">'+
				  '<label>'+
				    '<input type="radio" name="optionsOnTab1" id="optionsOnTab1" value="'+ i +'">'
				    +questions[i].optionItem+
				  '</label>'+
				'</div>');
			/*ul.append('<li class="list-group-item"> <input type="radio" name="optionsOnTab1" value="'+ i +'" />   ' +
				questions[i].optionItem+ '</li>');*/
		}
		
	}

	var initWizard = function( ){
		$('#'+settings.rootContainerName).bootstrapWizard({
				onTabShow: function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#'+settings.rootContainerName+' .progress-bar').css({width:$percent+'%'});
				},
				onTabClick: function(tab, navigation, index) {
					return false;
				},
				onNext: function(tab, navigation, index) {
					var chosenOptionTab1 = $('input:radio[name=optionsOnTab1]').filter(":checked").val();
					var chosenOptionTab2 = $('input:radio[name=optionsOnTab2]').filter(":checked").val();

					if(index === 1){
			            $('#'+settings.rootContainerName).garnierWhitening({
			            	action: 'loadNextTabOptions',
			            	rootContainerName: settings.rootContainerName,
			            	chosenOptionIdx: chosenOptionTab1 
			            });
			            //$('#'+settings.rootContainerName).garnierWhitening('loadNextTabOptions', chosenOptionTab1 );
					}else if(index === 2){
						$('#'+settings.rootContainerName).garnierWhitening({
			            	action: 'loadRecommendedItem', 
			            	rootContainerName: settings.rootContainerName,
			            	chosenOptionIdx: chosenOptionTab2 
			            });
			            //$('#'+settings.rootContainerName).garnierWhitening('loadRecommendedItem', chosenOptionTab2);
					}
		        }
		});
	}

	var loadNextTabOptions = function( chosenOptionIdx ){
		//var ul = $('#'+settings.rootContainerName+' #tab2 > ul');
		var ul = $('#'+settings.rootContainerName+' #tab2 .tanyelah');
		var chosenOption = questionnaire['tab1'][chosenOptionIdx];
		var questions = chosenOption.nextTab;
		chosenIdx1 = chosenOptionIdx;

		ul.html(''); //clear older list

		for(var i=0; i<questions.length; i++){
			ul.append('<div class="radio">'+
				  '<label>'+
				    '<input type="radio" name="optionsOnTab2" id="optionsOnTab2" value="'+ i +'">'
				    +questions[i].optionItem+
				  '</label>'+
				'</div>');
			/*ul.append('<li class="list-group-item"> <input type="radio" name="optionsOnTab2" value="'+ i +'" />   ' +
				questions[i].optionItem+ '</li>');*/
		}
	}

	var sendResult = function(category, productName, aryOptionsSelected, image, email){

		if(email == '') return;

		$.ajax({
		  type: "POST",
		  url: "http://blackboxdev.co/projects/garnier/save-recommendation.php",
		  data: { 
			user_email: email, 
			product_name: productName,
			category: category,
			options_selected: aryOptionsSelected,
			image: image
		  }
		})
		.done(function( msg ) {
			//alert( "Data Saved: " + msg );
		})
		.fail(function( jqXHR, textStatus ){
			alert( "Request failed: " + jqXHR );
		});
	}

	var prepOptionsSelected = function( answer1, answer2 ){
		var questions = questionnaire['questions'];

		var optionsSelected = [
			questions[0] + " " + answer1,
			questions[1] + " " + answer2
		];

		return optionsSelected.join('|');

	}

	var loadRecommendedItem = function( chosenOptionIdx ){
		
		//var placeholders = $('#'+settings.rootContainerName+' #tab3 .product-name');
		var imagePlaceholder = $('#'+settings.rootContainerName+' #tab3 #productImage');
		var learnMoreBtn = $('#'+settings.rootContainerName+' #tab3 #learnMoreBtn');
		var chosenOption = questionnaire['tab1'][chosenIdx1];
		var productName = chosenOption.nextTab[chosenOptionIdx].recommendedItem.name;
		var productUrl = chosenOption.nextTab[chosenOptionIdx].recommendedItem.url;
		var imageName = chosenOption.nextTab[chosenOptionIdx].recommendedItem.image;
		var imageFolder = 'images/';
		var imagePath = imageFolder + imageName;
		var emailFromHiddenDiv = $('#hidEmailPlaceholder').val();
		var optionsSelected = prepOptionsSelected(
			chosenOption.optionItem, 
			chosenOption.nextTab[chosenOptionIdx].optionItem
		);
		
		/*placeholders.each(function( index ){
			$(this).html( productName );
		});*/

		imagePlaceholder.attr('src', imagePath);

		learnMoreBtn.attr('href', productUrl);
		console.log(learnMoreBtn);
		console.log(productUrl);

		sendResult('Whitening', productName, optionsSelected, imagePath, emailFromHiddenDiv);
	}

    $.fn.garnierWhitening = function( options ) {
    	// Establish our default settings
        settings = $.extend({
            action         		: 'init',
            chosenOptionIdx		: null,
            rootContainerName 	: null
        }, options);

        if( settings.action === 'init'){

    		var template = $('#hiddenWhiteningTemplate').html();
	        this.append(template);
	        //return this;

	        populateTabHeaders();
	        populateQuestions();
	        initWizard();
    	}
    	else if( settings.action === 'loadNextTabOptions'){
    		loadNextTabOptions(settings.chosenOptionIdx);
    	}
    	else if( settings.action === 'loadRecommendedItem'){
    		loadRecommendedItem(settings.chosenOptionIdx);
    	}
    }

    $.fn.garnierWhitening22 = function( action, chosenOptionIdx, opt_rootContainerName ) {
    	if( action === 'init'){
    		this.rootContainerName = opt_rootContainerName;
    		var template = $('#hiddenWhiteningTemplate').html();
	        this.append(template);
	        //return this;

	        populateTabHeaders();
	        populateQuestions();
    	}
    	else if( action === 'loadNextTabOptions'){
    		loadNextTabOptions(chosenOptionIdx);
    	}
    	else if( action === 'loadRecommendedItem'){
    		loadRecommendedItem(chosenOptionIdx);
    	}
    	
    };
 
}( jQuery ));