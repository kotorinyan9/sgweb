// DOM Ready
$(function() {
 
    var pull        = $('#pull');  
        menu        = $('.nav ul');  
        menuHeight  = menu.height();  
  
    $(pull).on('click', function(e) {  
        e.preventDefault();  
        menu.slideToggle();  
    });  

	$(window).resize(function(){  
	    var w = $(window).width();  
	    if(w > 320 && menu.is(':hidden')) {  
	        menu.removeAttr('style');  
	    }  
	});  




$(window).load(function(){
    $('.bxslider').bxSlider({
        randomStart: false,
        controls: false,
        auto: true,
        pause: 6000
    });    

       //var s = skrollr.init();
});
$(".f").fancybox();
	var i=0;
 	 function loop() {
        $('.container, .gauge').animate({opacity:0},150,"linear",function(){
			  $(this).animate({opacity:1},150,function(){
					loop();		  	
			  });
		});
    }

	$('.tail').click(function () {


		i++;

		var  block = $('<div class="powerbar"></div>');

		if (i <31)
			$('.gauge').append(block);
		
		if ($('.eye-c').hasClass('eye')){
		    	$('.eye-c').fadeOut(150, function(){
		    		$(this).toggleClass('eye');
		    	});
		   } else{
		    	$('.eye-c').toggleClass('eye').fadeIn(150);
	    }

	   	if(i == 30){
	   		$('.container').addClass('red');
	   		$('.container').empty();
			$('.container').text('>Activate Limit Break<').hide().fadeIn(200);
			$('.gauge').addClass('glow');
		   loop();
	   	}else
	   		$('.moepoints').text(i).hide().fadeIn(100);
	});    

	$('.container').click(function () {

	    if(i > 29){

	    	$('.gauge').animate({ "left": "-=650px" },  { duration: 800, queue: true });

			var audioElement = document.createElement('audio');
			    audioElement.setAttribute('src', 'http://swordgirls.net/wordpress/wp-content/themes/swordgirls/img/deskbreak.mp3');
			audioElement.play();


	    	$('.eye').hide();
	    	$('.eye-c').hide();
	    	$('.tail').hide();
	    	$('.container').hide();



			$('.cloth').show().animate({
			    width: "100%",
			    opacity: 1,
			    marginLeft: "6.1in",
			    marginTop: "1.5in",
			  }, 200 );	  


			$('.cloth').animate({ "left": "+=550px" },  { duration: 500, queue: true });
			$('.cloth').animate({ "left": "-=750px" }, { duration: 500, queue: true });
			$('.cloth').animate({ "left": "+=350px" }, { duration: 500, queue: true });
			$('.cloth').animate({ "top": "+=1000px" }, { duration: 300, queue: true });
			$('.cloth').animate({ "top": "+=1000px" }, { duration: 600, queue: true });
			$('.bg').fadeIn(200);
			$('.bar1').show().delay(2200).animate({ "top": "+=2000px" }, 500, function(){
			$('.bg').fadeOut(200);
	    	$('.sharp').delay(100).addClass('left');
	    	$('.sharp').delay(900).addClass('third').animate({
			    width: "100%",
			    opacity: 1,
			    marginLeft: ".5in",
			  }, 1600 );	
	    		$('.bar1').hide();
			});
		    	
	    }
	});
});