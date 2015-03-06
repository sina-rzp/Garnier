(function( $ ) {

	var chosenIdx1, chosenIdx2, settings, lastTabShown, cacheAnswers = [];

	var products = {
	  
	    "SAKURA_WHITE_RADIANCE": {
	      "name": "Sakura White Pinkish Radiance Gentle Cleansing Foam",
	      "image": "fym/SW Gentle foam.png",
	      "url": "SW-PinkishRadianceGentleCleansingFoam.php"
	    },
	  
	    "SAKURA_WHITE_MOISTURISING": {
	      "name": "Sakura White Pinkish Radiance Moisturising Cream SPF21",
	      "image": "fym/SW Moisturizing.png",
	      "url": "SW-PinkishRadianceMoisturizingCreamSPF21.php"
	    },

	    "SAKURA_WHITE_SLEEPING": {
	      "name": "Sakura White Pinkish Radiance Sleeping Essence",
	      "image": "fym/Light Complete Multi-Action Whitening 3 in 1 Essence Mask.png",
	      "url": "SW-PinkishRadianceSleepingEssence.php"
	    },

	    "SAKURA_WHITENING_MASK": {
	      "name": "Sakura White Pinkish Radiance Intensive Whitening Mask",
	      "image": "fym/SW Whitening Mask.png",
	      "url": "SW-PinkishRadianceIntensiveWhiteningMask.php"
	    },

	    "SAKURA_ULTIMATE_SERUM": {
	      "name": "Sakura White Pinkish Radiance Ultimate Serum",
	      "image": "fym/SW Serum.png",
	      "url": "SW-PinkishRadianceUltimateSerum.php"
	    },

	    "LIGHT_MULTI_ACTION_WHITENING": {
	      "name": "Light Complete White Speed Multi-Action Whitening Serum Cream Night Restore",
	      "image": "fym/LCW Night.png",
	      "url": "LC-MultiActionWhiteningCreamNightRestore.php"
	    },

	    "LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20": {
	      "name": "Light Complete White SpeedTM Multi-Action Whitening Serum Cream SPF20/PA+++",
	      "image": "fym/Light Complete White SpeedTM Multi-Action Whitening Serum CreamSPF20-PA.png",
	      "url": "LC-MultiActionWhiteningCreamExtraUVProtectionSP20.php"
	    },

	    "DCWHITENINGANDOILCONTROLFOAM": {
	      "name": "Duo Clean Whitening and Oil Control Foam",
	      "image": "fym/Duo Clean Whitening and Oil Control Foam.png",
	      "url": "DC-WhiteningandOilControlFoam.php"
	    },

	    "LCMULTIACTIONBRIGHTENINGFOAM": {
	      "name": "Light Complete White Speed Multi-Action Brightening Foam",
	      "image": "fym/LCW Foam.png",
	      "url": "LC-MultiActionBrighteningFoam.php"
	    },

	    "LCMULTIACTIONBRIGHTENINGSCRUB": {
	      "name": "Light Complete White SpeedTM Multi-Action Brightening Scrub",
	      "image": "fym/LCW Scrub.png",
	      "url": "LC-MultiActionBrighteningScrub.php"
	    },

	    "LCMILKYLIGHTENINGDEWTONER": {
	      "name": "Light Complete Lightening Dew Toner",
	      "image": "fym/LCW Tonner.png",
	      "url": "LC-MilkyLighteningDewToner.php"
	    },

	    "LCLIGHTCOMPLETEWHITESPEEDMULTIACTIONWHITENINGCREAM8HOURSSHINE": {
	      "name": "Light Complete White SpeedTM Multi-Action Whitening Cream 8 Hours Shine-Free",
	      "image": "fym/LCW Cream 8Hour.png",
	      "url": "LC-LightCompleteWhiteSpeedMultiActionWhiteningCream8HoursShine-Free.php"
	    },

	    "LCLIGHTENINGPEELOFFMASK": {
	      "name": "Light Complete Multi-Action Whitening Peel-off Mask",
	      "image": "fym/LCW Peel Mask.png",
	      "url": "LC-LighteningPeelOffMask.php"
	    },
	    
	    "LCMULTIACTIONWHITENING3IN1ESSENCEMASK": {
	      "name": "Light Complete Multi-Action Whitening 3 in 1 Essence Mask",
	      "image": "fym/Light Complete Multi-Action Whitening 3 in 1 Essence Mask.png",
	      "url": "LC-Multi-ActionWhitening3in1EssenceMask.php"
	    },
	    
	    "DCWHITENINGANDPOREMINIMIZINGFOAM": {
	      "name": "Duo Clean Whitening and Pore Minimizing Foam",
	      "image": "fym/Duo Clean Whitening And Foam.png",
	      "url": "DC-WhiteningandPoreMinimizingFoam.php"
	    }

	};

	var questionnaire = [
	  {
	    "question": "What is your skin concern?",
	    "answers": [
	      {
	        "label": " I want healthy, radiant skin",
	        "next": "1"
	      },
	      {
	        "label": " I want to moisturise and protect my skin against harsh environments",
	        "next": "2"
	      },
	      {
	        "label": " I have dull skin",
	        "next": "3"
	      },
	      {
	        "label": " I have uneven skin tone",
	        "next": "4"
	      },
	      {
	        "label": " I want to get rid of dark spots",
	        "next": "5"
	      },
	      {
	        "label": " I want to minimise my pores",
	        "next": "6"
	      }
	    ]
	  },
	  {
	    "question": "What Is Your Skin Type?",
	    "answers": [
	      {
	        "label": "Sensitive",
	        "next": "SAKURA_WHITE_RADIANCE,SAKURA_WHITE_MOISTURISING,SAKURA_WHITE_SLEEPING,SAKURA_WHITENING_MASK,SAKURA_ULTIMATE_SERUM"
	      },
	      {
	        "label": "Dry",
	        "next": "SAKURA_WHITE_RADIANCE,SAKURA_WHITE_MOISTURISING,SAKURA_WHITE_SLEEPING,SAKURA_WHITENING_MASK,SAKURA_ULTIMATE_SERUM"
	      },
	      {
	        "label": "Normal",
	        "next": "SAKURA_WHITE_RADIANCE,SAKURA_WHITE_MOISTURISING,SAKURA_WHITE_SLEEPING,SAKURA_WHITENING_MASK,SAKURA_ULTIMATE_SERUM"
	      },
	      {
	        "label": "Combination (i)",
	        "next": "SAKURA_WHITE_RADIANCE,SAKURA_WHITE_MOISTURISING,SAKURA_WHITE_SLEEPING,SAKURA_WHITENING_MASK,SAKURA_ULTIMATE_SERUM"
	      },
	      {
	        "label": "Oily",
	        "next": "LIGHT_MULTI_ACTION_WHITENING,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,SAKURA_WHITE_MOISTURISING"
	      }
	    ]
	  },
	  {
	    "question": "What Is Your Skin Type?",
	    "answers": [
	      {
	        "label": "Sensitive",
	        "next": "SAKURA_WHITE_MOISTURISING,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING"
	      },
	      {
	        "label": "Normal",
	        "next": "SAKURA_WHITE_MOISTURISING,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING"
	      },
	      {
	        "label": "Combination",
	        "next": "SAKURA_WHITE_MOISTURISING,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING"
	      }
	    ]
	  },
	  {
	    "question": "What Is Your Skin Type?",
	    "answers": [
	      {
	        "label": "Sensitive",
	        "next": "SAKURA_WHITE_RADIANCE"
	      },
	      {
	        "label": "Oily",
	        "next": "DCWHITENINGANDOILCONTROLFOAM,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING"
	      },
	      {
	        "label": "Dry",
	        "next": "SAKURA_WHITE_RADIANCE,SAKURA_WHITE_MOISTURISING,SAKURA_WHITE_SLEEPING,SAKURA_WHITENING_MASK,SAKURA_ULTIMATE_SERUM"
	      },
	      {
	        "label": "Normal",
	        "next": "DCWHITENINGANDOILCONTROLFOAM"
	      },
	      {
	        "label": "Combination",
	        "next": "DCWHITENINGANDOILCONTROLFOAM"
	      }
	    ]
	  },
	  {
	    "question": "What Is Your Skin Type?",
	    "answers": [
	      {
	        "label": "Sensitive",
	        "next": "SAKURA_WHITE_RADIANCE,SAKURA_WHITE_MOISTURISING,SAKURA_WHITE_SLEEPING,SAKURA_WHITENING_MASK,SAKURA_ULTIMATE_SERUM"
	      },
	      {
	        "label": "Normal",
	        "next": "LCMULTIACTIONBRIGHTENINGFOAM,LCMULTIACTIONBRIGHTENINGSCRUB,LCMILKYLIGHTENINGDEWTONER,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING,LCLIGHTCOMPLETEWHITESPEEDMULTIACTIONWHITENINGCREAM8HOURSSHINE,LCLIGHTENINGPEELOFFMASK,LCMULTIACTIONWHITENING3IN1ESSENCEMASK"
	      },
	      {
	        "label": "Combination",
	        "next": "LCMULTIACTIONBRIGHTENINGFOAM,LCMULTIACTIONBRIGHTENINGSCRUB,LCMILKYLIGHTENINGDEWTONER,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING,LCLIGHTCOMPLETEWHITESPEEDMULTIACTIONWHITENINGCREAM8HOURSSHINE,LCLIGHTENINGPEELOFFMASK,LCMULTIACTIONWHITENING3IN1ESSENCEMASK"
	      }
	    ]
	  },
	  {
	    "question": "What Is Your Skin Type?",
	    "answers": [
	      {
	        "label": "Sensitive",
	        "next": "LCMULTIACTIONBRIGHTENINGFOAM,LCMULTIACTIONBRIGHTENINGSCRUB,LCMILKYLIGHTENINGDEWTONER,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING,LCLIGHTCOMPLETEWHITESPEEDMULTIACTIONWHITENINGCREAM8HOURSSHINE,LCLIGHTENINGPEELOFFMASK,LCMULTIACTIONWHITENING3IN1ESSENCEMASK"
	      },
	      {
	        "label": "Normal",
	        "next": "LCMULTIACTIONBRIGHTENINGFOAM,LCMULTIACTIONBRIGHTENINGSCRUB,LCMILKYLIGHTENINGDEWTONER,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING,LCLIGHTCOMPLETEWHITESPEEDMULTIACTIONWHITENINGCREAM8HOURSSHINE,LCLIGHTENINGPEELOFFMASK,LCMULTIACTIONWHITENING3IN1ESSENCEMASK"
	      },
	      {
	        "label": "Combination ",
	        "next": "LCMULTIACTIONBRIGHTENINGFOAM,LCMULTIACTIONBRIGHTENINGSCRUB,LCMILKYLIGHTENINGDEWTONER,LCMULTIACTIONWHITENINGCREAMEXTRAUVPROTECTIONSP20,LIGHT_MULTI_ACTION_WHITENING,LCLIGHTCOMPLETEWHITESPEEDMULTIACTIONWHITENINGCREAM8HOURSSHINE,LCLIGHTENINGPEELOFFMASK,LCMULTIACTIONWHITENING3IN1ESSENCEMASK"
	      }
	    ]
	  },
	  {
	    "question": "What Is Your Skin Type?",
	    "answers": [
	      {
	        "label": "Oily",
	        "next": "DCWHITENINGANDPOREMINIMIZINGFOAM"
	      },
	      {
	        "label": "Normal",
	        "next": "DCWHITENINGANDPOREMINIMIZINGFOAM"
	      },
	      {
	        "label": "Combination",
	        "next": "DCWHITENINGANDPOREMINIMIZINGFOAM"
	      }
	    ]
	  }
	];
  
	var populateTabHeaders = function(){
		//var tab1 = $('#tab1Header');
		//var tab2 = $('#tab2Header');
		//var tab3 = $('#tab3Header');
		var questions = questionnaire['questions'];

		for(var i=1; i<=questions.length; i++){
			$('#'+settings.rootContainerName+' #tab'+i+'Header').html( questions[i-1] );
		}
	}

	var populateQuestions = function(tabNumber){
		//var ul = $('#'+settings.rootContainerName+' #tab'+tabNumber.toString()+' > ul');
		var ul = $('#'+settings.rootContainerName+' #tab'+tabNumber.toString()+' .tanyelah');
		var questionIdx = (settings.chosenOptionIdx > 0)? settings.chosenOptionIdx : 0;
		var q = questionnaire[questionIdx];
		var questionPlaceholder = $('#'+settings.rootContainerName+' #tab'+tabNumber+' .tanye');
		
		ul.html(''); //clear older list

		questionPlaceholder.html( q.question );

		for(var i=0; i<q.answers.length; i++){
			//var value = (q.answers[i].next != undefined)? 
			//				q.answers[i].next : JSON.stringify(q.answers[i].recommendedItem);
			ul.append(
				'<div class="radio">'+
				  '<label>'+
				    '<input type="radio" name="'+settings.rootContainerName+'_optionsOnTab'+tabNumber+
				    '" class="radioAnswers" value="'+ q.answers[i].next +
				    '" data-label="'+q.answers[i].label+'" />'
				    	+q.answers[i].label+
				  '</label>'+
				'</div>');
			/*ul.append(
				'<li class="list-group-item"> <input type="radio" class="radioAnswers" name="'+
				settings.rootContainerName+'_optionsOnTab'+tabNumber+'" value="'+ q.answers[i].next +'" data-label="'+
				q.answers[i].label+'" />' +
				q.answers[i].label+ '</li>');*/
		}

		$('#'+settings.rootContainerName+' .radioAnswers').click(function(){
			var ans = q.question + ' ' + $(this).attr('data-label');
			var curIdx = $('#'+settings.rootContainerName).bootstrapWizard('currentIndex');
			cacheAnswers[curIdx] = ans;
		});
		
	}

	var initWizard = function( ){
		$('#'+settings.rootContainerName).bootstrapWizard({
				onTabShow: function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#'+settings.rootContainerName+' .progress-bar').css({width:$percent+'%'});

					// If it's the last tab then hide the last button and show the finish instead
					if($current >= $total) {
						$('#'+settings.rootContainerName).find('.pager .next').hide();
						$('#'+settings.rootContainerName).find('.pager .previous').hide();
						$('#'+settings.rootContainerName).find('.pager .finish').show();
						$('#'+settings.rootContainerName).find('.pager .finish').removeClass('disabled');
						$('#'+settings.rootContainerName).find('.progress').hide();
					} else {
						//$('#'+settings.rootContainerName).find('.pager .next').show();
						$('#'+settings.rootContainerName).find('.pager .finish').hide();
						$('#'+settings.rootContainerName).find('.progress').show();
					}

				},
				onTabClick: function(tab, navigation, index) {
					return false;
				},
				onNext: function(tab, navigation, index) {
					//var chosenOptionTab1 = $('input:radio[name='+settings.rootContainerName+'_optionsOnTab1]').filter(":checked").val();
					//var chosenOptionTab2 = $('input:radio[name='+settings.rootContainerName+'_optionsOnTab2]').filter(":checked").val();
					
					lastTabShown = index;

					var nextQuestionIdx = $('input:radio[name='+settings.rootContainerName+'_optionsOnTab'+index+']')
											.filter(":checked").val();

					if(nextQuestionIdx != undefined){
						if(nextQuestionIdx.length <= 2){
							$('#'+settings.rootContainerName).garnierWhitening({
								action: 'loadNextTabOptions',
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx: nextQuestionIdx,
								currentIdx : index
							});

						}else{
							$('#'+settings.rootContainerName).garnierWhitening({
								action: 'loadRecommendedItem', 
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx : nextQuestionIdx
							});
						
						}

					}
					else{
						return false;
					}
		        },
		        onPrevious: function(tab, navigation, index) {
		        	
		        	$('#'+settings.rootContainerName).bootstrapWizard('show', lastTabShown);
		        }
		});

		//clicks Restart button
		$('#'+settings.rootContainerName+' .finish').click(function() {
			
			$('#'+settings.rootContainerName).bootstrapWizard('first');

			$('#'+settings.rootContainerName).find('.pager .next').show();
			$('#'+settings.rootContainerName).find('.pager .previous').show();
			$('#'+settings.rootContainerName).find('.pager .finish').hide();

			cacheAnswers = [];
		});

        //hiding steps/tab headers
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 0);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 1);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 2);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 3);
        $('#'+settings.rootContainerName).bootstrapWizard('hide', 4);
	}

	var loadNextTabOptions = function(){

		populateQuestions( settings.currentIdx+1 );
		return;

		var ul = $('#'+settings.rootContainerName+' #tab'+(settings.currentIdx+1)+' > ul');
		//var chosenOption = questionnaire['tab1'][chosenOptionIdx];
		var question = questionnaire[chosenOptionIdx];
		//chosenIdx1 = chosenOptionIdx;

		ul.html(''); //clear older list

		for(var i=0; i<questions.length; i++){
			ul.append('<li class="list-group-item"> <input type="radio" name="optionsOnTab2" value="'+ i +'" />   ' +
				questions[i].optionItem+ '</li>');
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

		var emailFromHiddenDiv = $('#hidEmailPlaceholder').val();

		//chosenOptionIdx may contains 2 product IDs
		var recommendedItems = settings.chosenOptionIdx.split(',');
		

		for(var i=1; i<=recommendedItems.length; i++){
			var placeholders = $('#'+settings.rootContainerName+' #tabResult .product-name'+i);
			var imagePlaceholder = $('#'+settings.rootContainerName+' #tabResult #productImage'+i);
			var learnMoreBtn = $('#'+settings.rootContainerName+' #tabResult #learnMoreBtn'+i);

			var theProduct = products[ recommendedItems[i-1] ];
			
			var productName = theProduct.name;
			var productUrl = theProduct.url;
			var imageName = theProduct.image;

			var imageFolder = 'images/';
			var imagePath = imageFolder + imageName;
			
			placeholders.each(function( index ){
				$(this).html( productName );
			});

			imagePlaceholder.attr('src', imagePath);

			learnMoreBtn.attr('href', productUrl);	

			//TODO: Find a way, on server to dispay 2 products, if need be.
			sendResult('Whitening', productName, cacheAnswers.join('|') , imagePath, emailFromHiddenDiv);
		}

		//hide unused product template
		for(var j=3; j<=6; j++){
			if(j<=recommendedItems.length) $('#productTemplate'+j).show();
			else $('#productTemplate'+j).hide();
		}

		$('#'+settings.rootContainerName).bootstrapWizard('show', 4); //need this to move progressbar
		$('#'+settings.rootContainerName+' .tab-pane.active').removeClass('active');
		$('#'+settings.rootContainerName+' #tabResult').addClass('active');
		
	}

    $.fn.garnierWhitening = function( options ) {
    	// Establish our default settings
        settings = $.extend({
            action         		: 'init',
            chosenOptionIdx		: null,
            rootContainerName 	: null,
            currentIdx 			: null
        }, options);

        if( settings.action === 'init'){

    		var template = $('#hiddenWhiteningTemplate').html();
	        this.append(template);
	        //return this;

	        //populateTabHeaders();
	        populateQuestions('1');
	        initWizard();
    	}
    	else if( settings.action === 'loadNextTabOptions'){
    		loadNextTabOptions();
    	}
    	else if( settings.action === 'loadRecommendedItem'){
    		loadRecommendedItem(settings.chosenOptionIdx);
    	}
    }
 
}( jQuery ));