<?php
include("session.php"); // Include Login Script

//Delete this echo later
echo " Your session is " . $_SESSION["username"];

if(!isset($_SESSION["username"])){
   // header("location: index.php"); //Redirecting to index
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="canvas.css" type="text/css" media="screen" />
<link rel="stylesheet" href="games.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div id="display">

    <p id="demo"></p> 
    <a class="games2_exit hover-btn" href="main.php">ΕΞΩΔΟΣ</a>

        <script>

            var context, input;
            var images = ["dog", "cat", "bird", "train", "car", "trumpet"];

            context = document.getElementById("display");

            

            for(i = 0; i < 6; i++){
                input = document.createElement("input");
                input.setAttribute('type', 'image');
                input.setAttribute('class', 'games2_images');
                input.setAttribute('src', 'img/' + images[i] + '.png');
                input.setAttribute('alt', images[i]);

                context.appendChild(input);
            }
            
            var audio = new Audio('audio/dog.mp3');
           // audio.play();

            
            
        </script>
       <!-- <input type="image" class="games2_images" name="imgbtn" src="img/dog.png" alt="png"> -->
    </div>
</body>
</html>