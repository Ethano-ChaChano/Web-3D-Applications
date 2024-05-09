// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#pepperDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 

		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide();

		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#coke").show();
		$("#sprite").hide();
		$("#pepper").hide(); 

		$("#galleryCoke").show();
		$("#gallerySprite").hide();
		$("#galleryPepper").hide();

		$("#cokeBtn").css("background-color", "#3399ff");
		$("#spriteBtn").css("background-color", "transparent");
		$("#pepperBtn").css("background-color", "transparent");
	});
}


function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
        $("#spriteDescription").hide();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#coke").show();
		$("#sprite").hide();
		$("#pepper").hide();

		$("#galleryCoke").show();
		$("#gallerySprite").hide();
		$("#galleryPepper").hide();

		$("#cokeBtn").css("background-color", "#3399ff");
		$("#spriteBtn").css("background-color", "transparent");
		$("#pepperBtn").css("background-color", "transparent");

    }); 
}

function spriteDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").show();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_pepper").hide();

		$("#coke").hide();
		$("#sprite").show();
		$("#pepper").hide();

		$("#galleryCoke").hide();
		$("#gallerySprite").show();
		$("#galleryPepper").hide();

		$("#cokeBtn").css("background-color", "transparent");
		$("#spriteBtn").css("background-color", "#3399ff");
		$("#pepperBtn").css("background-color", "transparent");
    }); 
}

function pepperDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").show();

		$("#coke").hide();
		$("#sprite").hide();
		$("#pepper").show();

		$("#galleryCoke").hide();
		$("#gallerySprite").hide();
		$("#galleryPepper").show();

		$("#cokeBtn").css("background-color", "transparent");
		$("#spriteBtn").css("background-color", "transparent");
		$("#pepperBtn").css("background-color", "#3399ff");
    }); 
}

function changeLook() {
	counter += 1;
	switch (counter) {
		//Coke Colour Palette
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = '#FFF8FF';
			document.getElementById('headerColor').style.backgroundColor = '#E7223A';
			document.getElementById('footerColor').style.backgroundColor = '#BA432E';

			var cards = document.getElementsByClassName('card');

			// Loop through each card element
			for (var i = 0; i < cards.length; i++) {
				// Set the background color for each card
				cards[i].style.backgroundColor = '#FFF8FF';
			}
			break;

		//Sprite Colour Palette
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#204795';
			document.getElementById('headerColor').style.backgroundColor = '#02A04C';
			document.getElementById('footerColor').style.backgroundColor = '#F7D704';

			var cards = document.getElementsByClassName('card');

			// Loop through each card element
			for (var i = 0; i < cards.length; i++) {
				// Set the background color for each card
				cards[i].style.backgroundColor = '#DEDEDF';
			}
			break;

		//DrPepper Colour Palette
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = '#54222A';
			document.getElementById('headerColor').style.backgroundColor = '#6B2014';
			document.getElementById('footerColor').style.backgroundColor = '#43241C';

			var cards = document.getElementsByClassName('card');

			// Loop through each card element
			for (var i = 0; i < cards.length; i++) {
				// Set the background color for each card
				cards[i].style.backgroundColor = '#887F85';
			}
			break;
		
		//Custom Palette
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = '#FFF8FF';
			document.getElementById('headerColor').style.backgroundColor = '#204795';
			document.getElementById('footerColor').style.backgroundColor = '#E7223A';

			var cards = document.getElementsByClassName('card');

			// Loop through each card element
			for (var i = 0; i < cards.length; i++) {
				// Set the background color for each card
				cards[i].style.backgroundColor = '#DEDEDF';
			}
			break;
	}
}

//Original Theme (Coke)
function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFF8FF';
	document.getElementById('headerColor').style.backgroundColor = '#204795';
	document.getElementById('footerColor').style.backgroundColor = '#E7223A';

	var cards = document.getElementsByClassName('card');

	// Loop through each card element
	for (var i = 0; i < cards.length; i++) {
		// Set the background color for each card
		cards[i].style.backgroundColor = 'rgb(222, 222, 223)';
	}
}

