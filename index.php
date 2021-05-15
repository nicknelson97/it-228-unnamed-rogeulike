<!DOCTYPE html>
<?php
        $pName = "Character Name";
        $pMaxHealth = 10;
        $pCurrentHealth = 10;
        $mMaxHealth = 5;
        $mCurrentHealth = 5;
        $pGold = 1000;
        
    ?>
<html>
    <head>
        <Title>Game Title</Title>
        <link rel="stylesheet" href="styles.css" />
        <div class="header">
            <p class="logo">LOGO</p>
            <p class="header">Game Name</p>
            <p class="middle" id="middle"></p>
            <div class="info">
                <p class="name"><?php echo $pName; ?></p>
                <p class="health">Health<span class="health">: <?php echo "".$pCurrentHealth."/".$pMaxHealth.""; ?></span></p>
                <p class="gold">Gold<span class="health">: <?php echo $pGold; ?></span></p>
            </div>
        </div>
    </head>
    <body>
    <canvas id="myCanvas"></canvas>
    
    </body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
//            document.getElementById("middle").innerHTML = "Width: " + w + "<br>Height: " + h;
            $("canvas").css("width", "" + 0.99 * w + "");
            $("canvas").css("height", "" + 0.85 * h + "");
//            $("canvas").css("image-rendering", "-moz-crisp-edges");
//            $("canvas").css("image-rendering", "pixelated");
//            $("canvas").css("image-rendering", "crisp-edges");
            
            $("canvas").attr("width", "" + w + "");
            $("canvas").attr("height", "" + h + "");
            
            $("div.header").css("height", "" + 0.1 * h + "");
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
    <script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
            var c = document.getElementById("myCanvas");
            var ctx = c.getContext("2d");
            ctx.font = "" + 0.075 * w + "px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Game Here", 0.5 * w, 0.5 * h);
        });
    </script>
    <?php include('menu.php');?>
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
        
        drawGoblin();
        function drawGoblin() {
          var ctx = document.getElementById('myCanvas').getContext('2d');
          var img = new Image();
            
          img.onload = function() {
            ctx.imageSmoothingEnabled = false;
            ctx.drawImage(img, 930, 150, img.width * 20, img.height * 20);
          };
          img.src = 'images/goblin.png';
        }
    </script>
    <?php include('actions.php');?>
</html>