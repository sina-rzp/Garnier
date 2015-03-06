$(document).ready(function() { 


	$('.filter1').change(function(){
		$('.showimg').hide();
		console.log($(this).val());
		$('.'+$(this).val()).show();
	});

	$('.filter2').change(function(){
		$('.showimg').hide();
		$('.'+$('.filter1').val()).show();
		$('.'+$(this).val()).show();
	});
	$('.filter3').change(function(){
		$('.showimg').hide();
		$('.'+$('.filter1').val()).show();
		$('.'+$('.filter2').val()).show();
		$('.'+$(this).val()).show();
	});
});