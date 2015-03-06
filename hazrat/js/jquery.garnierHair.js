(function( $ ) {

	var chosenIdx1, chosenIdx2, settings, lastTabShown, cacheAnswers = [];

	var products = {
	  
	    "NAT1": {
	      "name": "Color Natural 1",
	      "image": "fym/CN Hitam Alami.png",
	      "url": "HC-HitamAlami.php"
	    },
	  
	    "NAT3": {
	      "name": "Color Natural 3",
	      "image": "fym/CN Coklat Gelap.png",
	      "url": "HC-Coklat%20Gelap.php"
	    },

	    "NAT4": {
	      "name": "Color Natural 4",
	      "image": "fym/CN Coklat .png",
	      "url": "HC-Coklat.php"
	    },

	    "OLIA1": {
	      "name": "Olia 1",
	      "image": "fym/Olia Soft Black.png",
	      "url": "HC-olia-Darkest%20Black.php"
	    },

	    "OLIA3": {
	      "name": "Olia 3",
	      "image": "fym/Olia Soft Black.png",
	      "url": "HC-olia-SoftBlack.php"
	    },

	    "OLIA4": {
	      "name": "Olia 4",
	      "image": "fym/Olia Dark Brown.png",
	      "url": "HC-olia-DarkBrown.php"
	    },

	    "NAT3_16": {
	      "name": "Color Natural 3.16",
	      "image": "fym/CN Merah Burgundy.png",
	      "url": "HC-MerahBurgundy.php"
	    },

	    "NAT5": {
	      "name": "Color Natural 5",
	      "image": "fym/CN Coklat Terang.png",
	      "url": "HC-CoklatTerang.php"
	    },

	    "OLIA4_15": {
	      "name": "Olia 4.15",
	      "image": "fym/Olia  Iced Chocolate.png",
	      "url": "HC-IcedChocolate.php"
	    },

	    "OLIA4_3": {
	      "name": "Olia 4.3",
	      "image": "fym/Olia Golden Dark Brown.png",
	      "url": "HC-GoldenDarkBrown.php"
	    },

	    "OLIA5_25": {
	      "name": "Olia 5.25",
	      "image": "fym/Olia Frosty Chestnut.png",
	      "url": "HC-olia-FrostyChestnut.php"
	    },

	    "OLIA5_5": {
	      "name": "Olia 5.5",
	      "image": "fym/Olia  Mahogany Brown.png",
	      "url": "HC-MahoganyBrown.php"
	    },

	    "OLIA6": {
	      "name": "Olia 6",
	      "image": "fym/Olia  Light Brown.png",
	      "url": "HC-olia-LightBrown.php"
	    },

	    "OLIA6_6": {
	      "name": "Olia 6.6",
	      "image": "fym/Olia Intense Red .png",
	      "url": "HC-olia-66.php"
	    }

	};

	var questionnaire = [
	  {
	    "question": "Do you have any grey hair?",
	    "answers": [
	      {
	        "label": " No grey hair (0%)",
	        "next": "1"
	      },
	      {
	        "label": " A few grey hairs here and there (25-50%)",
	        "next": "1"
	      },
	      {
	        "label": " Lots of visible grey hair (70%)",
	        "next": "1"
	      },
	      {
	        "label": " Mostly grey hair (100%)",
	        "next": "1"
	      }
	    ]
	  },
	  {
	    "question": "What end result are you looking for?",
	    "answers": [
	      {
	        "label": "Natural results",
	        "next": "2"
	      },
	      {
	        "label": "Intense color",
	        "next": "3"
	      }
	    ]
	  },
	  {
	    "question": "What is more important to you?	",
	    "answers": [
	      {
	        "label": "Affordability",
	        "next": "NAT1,NAT3,NAT4"
	      },
	      {
	        "label": "Healthier-looking hair",
	        "next": "OLIA1,OLIA3,OLIA4"
	      }
	    ]
	  },
	  {
	    "question": "What is more important to you?	",
	    "answers": [
	      {
	        "label": "Affordability",
	        "next": "NAT3_16,NAT5"
	      },
	      {
	        "label": "Healthier-looking hair",
	        "next": "OLIA4_15,OLIA4_3,OLIA5_25,OLIA5_25,OLIA6,OLIA6_6"
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
					} else {
						//$('#'+settings.rootContainerName).find('.pager .next').show();
						$('#'+settings.rootContainerName).find('.pager .finish').hide();
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
							$('#'+settings.rootContainerName).garnierHair({
								action: 'loadNextTabOptions',
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx: nextQuestionIdx,
								currentIdx : index
							});

						}else{
							$('#'+settings.rootContainerName).garnierHair({
								action: 'loadRecommendedItem', 
								rootContainerName: settings.rootContainerName,
								chosenOptionIdx : nextQuestionIdx
							});
						
						}

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
			sendResult('HairColor', productName, cacheAnswers.join('|') , imagePath, emailFromHiddenDiv);
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

    $.fn.garnierHair = function( options ) {
    	// Establish our default settings
        settings = $.extend({
            action         		: 'init',
            chosenOptionIdx		: null,
            rootContainerName 	: null,
            currentIdx 			: null
        }, options);

        if( settings.action === 'init'){

    		var template = $('#hiddenHairTemplate').html();
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