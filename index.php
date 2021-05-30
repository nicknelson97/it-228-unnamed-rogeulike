<!DOCTYPE html>
<script>
    var pName = "Player";
    var pMHealth = 26;
    var pCHealth = 26;
    var pMinAttack = 1;
    var pMaxAttack = 4;
    var pDefense = 1;
    var pMDefense = 0;
    var pGold = 0;
    var eKillCount = 0;
</script>

<html>
    <head>
        <Title>Game Title</Title>
        <link rel="stylesheet" href="styles.css" />
        <div class="header">
            <p class="logo">LOGO</p>
            <p class="title">Game Name</p>
            <p class="middle" id="middle"></p>
            <div class="info">
                <p class="name" id="pName"></p>
                <p class="health" id="pHealth"></p>
                <p class="gold" id="pGold"></p>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </head>
    <script>
        playerStats();
        function playerStats() {
            var pN = document.getElementById("pName");
            var pH = document.getElementById("pHealth");
            var pG = document.getElementById("pGold");
            pN.innerHTML = pName;
            pH.innerHTML = 'Health<span class="health">: </span>' + pCHealth + ' / ' + pMHealth;
            pG.innerHTML = 'Gold<span class="health">: </span>' + pGold;

        }
    </script>
    <body>
    <canvas id="myCanvas"></canvas>
    
    </body>
    
    
    <script>
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
//            document.getElementById("middle").innerHTML = "Width: " + w + "<br>Height: " + h;
            if(900 <= h){
                $("canvas").attr("width", "" + 0.99 * w + "");
                $("canvas").attr("height", "" + 0.85 * h + "");
            }else{
                $("canvas").attr("width", "" + 0.99 * w + "");
                $("canvas").attr("height", "" + 0.8 * h + "");
            } 
//            $("canvas").css("image-rendering", "-moz-crisp-edges");
//            $("canvas").css("image-rendering", "pixelated");
//            $("canvas").css("image-rendering", "crisp-edges");
            
//            $("canvas").attr("width", "" + w + "");
//            $("canvas").attr("height", "" + h + "");
//            
            $("div.header").css("height", "6em");
            $("div.header").css("width", "" + 0.99 * w + "");
            $("div.info").css("height", "" + 0.15 * h + "");
            $("div.info").css("width", "" + 0.1 * w + "");
            
            $("p.name").css("margin-bottom", "" + 0.01 * h + "px");
            $("p.health").css("margin-bottom", "" + 0.01 * h + "px");
            $("p.gold").css("margin-bottom", "" + 0.1 * h + "px");
            $("p.name").css("margin-top", "" + 0.008 * h + "px");
            $("p.health").css("margin-top", "" + 0.001 * h + "px");
            $("p.gold").css("margin-top", "" + 0.001 * h + "px");
        });
    </script>
<!--
    <script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "" + 0.075 * w + "px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Game Here", 0.5 * w, 0.5 * h);
        });
    </script>
-->
    <?php 
    include('menu.php');
    ?>
    <script>
        drawPlayer();
        function drawPlayer() {
          var ctx = document.getElementById('myCanvas').getContext('2d');
          var img = new Image();
            
          img.onload = function() {
            ctx.imageSmoothingEnabled = false;
            ctx.drawImage(img, 130, 150, img.width * 20, img.height * 20);
          };
          img.src = 'images/player.png';
        }
    </script>

<?php
    include('actionWindow.php');
    include('enemy.php');
?>
</html>