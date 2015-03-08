(function( $ ) {

	var chosenIdx1, chosenIdx2, settings, lastTabShown, cacheAnswers = [];

	var products = {
	  
	    "TURBOLIGHT_ICY_SCRUB": {
	      "name": "TurboLight Icy Scrub",
	      "image": "fym/TL Whitening Scrub.png",
	      "url": "GM-Anti-BlackheadsBrighteningIcyScrub.php"
	    },
	  
	    "TURBOLIGHT_ICY_DUO": {
	      "name": "TurboLight Icy Duo Foam White + Oil Control",
	      "image": "fym/TL Icy Blue.png",
	      "url": "GM-TurboLightIcyDuoFoamWhite+OilControl.php"
	    },

	    "TURBOLIGHT_ICY_DUO_DOUBLE": {
	      "name": "TurboLight Icy Duo Foam Double White",
	      "image": "fym/TL Icy Black.png",
	      "url": "GM-FoamDoubleWhite.php"
	    },

	    "TURBOLIGHT_ICY_DUO_DOUBLE_BLACK": {
	      "name": "TurboLight Icy Duo Foam Double White",
	      "image": "fym/TL Icy Black.png",
	      "url": "GM-FoamDoubleWhite.php"
	    },

	    "OIL_CONTROL": {
	      "name": "TurboLight Oil Control",
	      "image": "fym/TL Oil Control Charcoal Foam.png",
	      "url": "GM-TurboLightOilControlCharcoalFoam.php"
	    },

	    "ACNOFIGHT_WASABI": {
	      "name": "AcnoFight Wasabi",
	      "image": "fym/AF Wasabi.png",
	      "url": "GM-AcnoFightWasabiFoam.php"
	    },

	    "ACNOFIGHT6": {
	      "name": "AcnoFight 6-in-1 Anti-Acne Foam",
	      "image": "fym/AF 6-IN-1 Anti-acne Foam.png",
	      "url": "GM-6-in-1Anti-AcneFoam.php"
	    },

	    "TURBOLIGHT_OIL_CONTROL": {
	      "name": "TurboLight Oil Control",
	      "image": "fym/TL Oil Control Charcoal Foam.png",
	      "url": "GM-TurboLightOilControlCharcoalFoam.php"
	    },

	    "TURBOLIGHT_RANGE": {
	      "name": "TurboLight Intensive Whitening Foam",
	      "image": "fym/TL Whitening Scrub.png",
	      "url": "GM-TurboLightIntensiveWhiteningFoam.php"
	    },

	    "TURBOLIGHT_AQUA_FUEL": {
	      "name": "TurboLight Icy Duo Foam Double White",
	      "image": "fym/TL-double-white.png",
	      "url": "GM-FoamDoubleWhite.php"
	    }
	};

	var questionnaire = [
	  {
	    "question": "What is your skin concern?",
	    "answers": [
	      {
	        "label": " I want whiter, fairer skin",
	        "next": "1"
	      },
	      {
	        "label": " I want to prevent acne from occuring because I have oily skin",
	        "next": "4"
	      },
	      {
	        "label": " I have mild acne, which comes and goes once in a while",
	        "next": "2"
	      },
	      {
	        "label": " I have serious acne, and I want to get rid of it",
	        "next": "3"
	      },
	      {
	        "label": " I have oily and dull skin",
	        "next": "TURBOLIGHT_OIL_CONTROL,TURBOLIGHT_ICY_DUO"
	      },
	      {
	        "label": " I have an uneven skin tone",
	        "next": "TURBOLIGHT_RANGE"
	      },
	      {
	        "label": " I have dull and dehydrated skin",
	        "next": "TURBOLIGHT_ICY_DUO_DOUBLE_BLACK"
	      },
	      {
	        "label": " I want to minimize my pores",
	        "next": "TURBOLIGHT_AQUA_FUEL"
	      }
	    ]
	  },
	  {
	    "question": "What is your Skin type?",
	    "answers": [
	      {
	        "label": "Oily",
	        "next": "TURBOLIGHT_ICY_SCRUB,TURBOLIGHT_ICY_DUO"
	      },
	      {
	        "label": "Dry",
	        "next": "TURBOLIGHT_ICY_DUO_DOUBLE"
	      },
	      {
	        "label": "Normal",
	        "next": "TURBOLIGHT_ICY_DUO_DOUBLE_BLACK"
	      },
	      {
	        "label": "Combination",
	        "next": "TURBOLIGHT_ICY_SCRUB,TURBOLIGHT_ICY_DUO"
	      }
	    ]
	  },
	  {
	    "question": "What is your Skin type?",
	    "answers": [
	      {
	        "label": "Oily",
	        "next": "ACNOFIGHT_WASABI"
	      },
	      {
	        "label": "Dry",
	        "next": "ACNOFIGHT_WASABI"
	      },
	      {
	        "label": "Normal",
	        "next": "ACNOFIGHT_WASABI"
	      },
	      {
	        "label": "Combination",
	        "next": "ACNOFIGHT_WASABI"
	      }
	    ]
	  },
	  {
	    "question": "What is your Skin type?",
	    "answers": [
	      {
	        "label": "Oily",
	        "next": "ACNOFIGHT6"
	      },
	      {
	        "label": "Dry",
	        "next": "ACNOFIGHT6"
	      },
	      {
	        "label": "Normal",
	        "next": "ACNOFIGHT6"
	      },
	      {
	        "label": "Combination",
	        "next": "ACNOFIGHT6"
	      }
	    ]
	  },
	  {
	    "question": "Do you need whitening for your skin?",
	    "answers": [
	      {
	        "label": "Yes",
	        "next": "TURBOLIGHT_ICY_DUO"
	      },
	      {
	        "label": "No",
	        "next": "OIL_CONTROL"
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
							$('#'+settings.rootContainerName).garnierMen({
								action: 'loadNextTabOptions',
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx: nextQuestionIdx,
								currentIdx : index
							});

						}else{
							$('#'+settings.rootContainerName).garnierMen({
								action: 'loadRecommendedItem', 
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx : nextQuestionIdx
							});
						
						}

					}else{
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
			sendResult('GarnierMen', productName, cacheAnswers.join('|') , imagePath, emailFromHiddenDiv);
		}

		//hide 2nd template if only 1 product
		if(recommendedItems.length === 1) $('#productTemplate2').hide();
		else $('#productTemplate2').show();

		$('#'+settings.rootContainerName).bootstrapWizard('show', 4); //need this to move progressbar
		$('#'+settings.rootContainerName+' .tab-pane.active').removeClass('active');
		$('#'+settings.rootContainerName+' #tabResult').addClass('active');
		
	}

    $.fn.garnierMen = function( options ) {
    	// Establish our default settings
        settings = $.extend({
            action         		: 'init',
            chosenOptionIdx		: null,
            rootContainerName 	: null,
            currentIdx 			: null
        }, options);

        if( settings.action === 'init'){

    		var template = $('#hiddenGarnierMenTemplate').html();
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