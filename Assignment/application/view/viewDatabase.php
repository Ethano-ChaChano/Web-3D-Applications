<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>X3D Model Data</title> 
	    <style>
        h1 {
            color:#204795;
            margin-left: 5px;
            font-size: 40px;
        }
        h2 {
            color:#E7223A;
            margin: 5px;
            font-size: 20px;
        }
        p {
            color:#204795;
            margin-left: 5px;
            font-size: 20px;
        }
        .imgBox {
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 300px;
        }
        .boxModel{
            border: 3px solid rgba(0, 1, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            width: auto;
            height: auto;
        }
        .boxText{
            border: 1px solid rgba(1, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            width: 220px;
            height: auto;
        }
    </style> 
</head>
<body>
	<h1>Model_3D Data returned from the SQLite database </h1>
    <p>If model cannot be seen, create a table (apiCreateTable) and insert data (apiInsertData)</p>
    	<?php for ($i=0; $i <count ($data); $i++){ ?>
    	<div class="boxModel">
        <div class="boxText">
                <h2><?php echo $data[$i]['idIndex'] ?></h2>
             </div>
            <div class="boxText">
            	<h2><?php echo $data[$i]['model'] ?></h2>
            </div>
        	<div class="boxText">
            	<h2><?php echo $data[$i]['creationMethod'] ?></h2>
            </div>
        	<div class="boxText">
                <h2><?php echo $data[$i]['exportFile'] ?></h2>
             </div>
			 <div class="boxText">
                <h2><?php echo $data[$i]['modelName'] ?></h2>
             </div>
    	</div>
        <br><br><br><br><br>
            <h2>A <?php echo $data[$i]['model'] ?> model created in <?php echo $data[$i]['creationMethod'] ?> and exported to <?php echo $data[$i]['exportFile'] ?>. The file name is: "<?php echo $data[$i]['modelName'] ?>".</h2>
    	<?php } ?>
</body>
</html>