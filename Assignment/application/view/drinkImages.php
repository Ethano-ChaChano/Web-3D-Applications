<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test View</title>
    <style>
        h1 {
            color:#204795;
            margin-left: 5px;
            font-size: 80px;
        }
        h2 {
            color:#E7223A;
            margin: 5px;
            font-size: 40px;
        }
        p {
            color:#204795;
            margin-left: 5px;
            font-size: 40px;
        }
        .imgBox {
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 200px;
        }

        .box{
            border: 1px solid rgba(0, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            height: 100%;
        }

        .center{
            margin:auto;
            width: 60%;
            padding: 10%;
        }

    </style>

</head>
<body>
    <div class="center">
        <h1>Images of rendered drink models</h1>
        <p>If you are seeing 3D Image Data below, the MVC Framework is working.</p>
        <p> Images of rendered drinks should be shown: </p>
        <div class="box">
            <h2><?php echo $model_1 ?></h2>
            <img class="imgBox" src='../assets/images/render_images/<?php echo $image3D_1?>.jpg'>
        </div>
        <div class="box">
            <h2><?php echo $model_2 ?></h2>
            <img class="imgBox" src='../assets/images/render_images/<?php echo $image3D_2 ?>.jpg'>
        </div>
        <div class="box">
            <h2><?php echo $model_3 ?></h2>
            <img class="imgBox" src='../assets/images/render_images/<?php echo $image3D_3 ?>.jpg'>
        </div>
    </div>
</body>
</html>