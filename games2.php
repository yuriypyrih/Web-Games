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
        <div id="upper_div">

             <p id="timer"></p> 
             <a class="games2_exit hover-btn" href="main.php">ΕΞΟΔΟΣ</a>
             
             <script> 
             var deadline = new Date(); 
             deadline.setMinutes(deadline.getMinutes() + 1);
             deadline.setSeconds(deadline.getSeconds() + 31);
             deadline = deadline.getTime()
             var x = setInterval(function() { 
             var now = new Date().getTime(); 
             var t = deadline - now; 
             var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
             var seconds = Math.floor((t % (1000 * 60)) / 1000); 
             document.getElementById("timer").innerHTML =  minutes + ":" + seconds ; 
                 if (t < 0) { 
                     clearInterval(x); 
                     //document.getElementById("demo").innerHTML = "EXPIRED"; 
                 } 
             }, 1000); 
             </script> 

            

        </div>
        <div id="lower_div">
            <script>

                var context, input, link,  audio, keyword;
                solution = "dog";
                audio = new Audio('audio/' + solution +'.mp3');
                var images = ["dog", "cat", "bird", "train", "car", "trumpet"];

                context = document.getElementById("display");



                for(i = 0; i < 6; i++){

                    link = document.createElement("a");
                    if(solution===images[i]){
                        link.setAttribute('href', "victory.php"); 
                    }
                    else{
                        link.setAttribute('href', "defeat.php"); 
                    }

                    input = document.createElement("input");
                    input.setAttribute('type', 'image');
                    input.setAttribute('class', 'games2_images');
                    input.setAttribute('src', 'img/' + images[i] + '.png');
                    input.setAttribute('alt', images[i]);

                    link.appendChild(input);

                  
                    context.appendChild(link);
                }

                
               // audio.play();



            </script>
        </div>
    </div>
</body>
</html>