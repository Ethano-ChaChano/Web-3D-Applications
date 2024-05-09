<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Sample</title>
</head>
<body>

    <div id="placeholder"></div>
    <script src="../assets/scripts/js/jquery-3.4.1.js" crossorigin="anonymous"></script>

    <script>
	// Use a relative path so that it works on the ITS Web Server, 
    // or http://users.sussex.ac.uk/~your_user_name/[insert_rest_of_path]/[php_function]
    // A localhost path like below won't work on the ITS server:
    // $.getJSON('http://localhost:8888/lab7/part_c/application/model/createJson.php', function(data) {
	$.getJSON('../application/model/createJson.php', function(data) {
  	
        var output="<ul>";
        for (var i in data.users) {
            output+="<li>" + data.users[i].firstName + " " + data.users[i].lastName + "--" 
			+ data.users[i].joined.month+"--" 
			+ data.users[i].joined.year+"</li>";
        }

        output+="</ul>";
        console.log(output);
        // Assign HTML to the placeholder tag using JQuery .html() method
        $('#placeholder').html(output);
       
        // Alternatively, you can use the JavaScript document.getElelementById() method
        //document.getElementById("placeholder").innerHTML=output;
  	});
    </script>

    <p>Names Retrieved via getJSON</p>
</body>
</html>