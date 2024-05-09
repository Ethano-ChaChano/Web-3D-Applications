// JavaScript Document
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

//Make AJAX request to the server
var xmlHttp = getXMLHttp();
//stores newly generated gallery HTML code
var htmlCodeCoke = "";
var htmlCodeSprite = "";
var htmlCodePepper = "";

//temporarily stores server response while code is generated
var response;

$(document).ready(function() {
	// Set up the path to the PHP function that reads the image directory to find the thumbnail file names
	var send = "application/view/hook.php";
	console.log(send);
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			// Response handler code
			response = xmlHttp.responseText.split("~");
			// Loop round the response array
			for (var i=0;i<response.length;i++) {
				// Handler to build the HTML string
				// Use this to provide a link to the image

				if(i<=3)
				{
					htmlCodeCoke += '<a href="assets/images/gallery_images'+ response[i] + ' " data-fancybox data-caption="Coke Image (Reference, Texture, Banner, and Render)"' + response[i] + '> ';
					htmlCodeCoke += '<img class="card-img-top img-thumbnail" src="assets/images/gallery_images' + response[i] + '"/>';
					htmlCodeCoke += '</a>';	
				}
				else if (i >= 4 && i <= 7)
				{
					htmlCodeSprite += '<a href="assets/images/gallery_images'+ response[i] + ' " data-fancybox data-caption="Sprite Image (Reference, Texture, Banner, and Render)"' + response[i] + '> ';
					htmlCodeSprite += '<img class="card-img-top img-thumbnail" src="assets/images/gallery_images' + response[i] + '"/>';
					htmlCodeSprite += '</a>';	
				}
				else
				{
					htmlCodePepper += '<a href="assets/images/gallery_images'+ response[i] + ' " data-fancybox data-caption="Dr Pepper Image (Reference, Texture, Banner, and Render)"' + response[i] + '> ';
					htmlCodePepper += '<img class="card-img-top img-thumbnail" src="assets/images/gallery_images' + response[i] + '"/>';
					htmlCodePepper += '</a>';	
				}
				console.log(response[i]);	
			}
			// Return the HTML string to each of the 4 3D App pages
			document.getElementById('galleryCoke').innerHTML = htmlCodeCoke;
			document.getElementById('gallerySprite').innerHTML = htmlCodeSprite;
			document.getElementById('galleryPepper').innerHTML = htmlCodePepper;
		}
	}
});

