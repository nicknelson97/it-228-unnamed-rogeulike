<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>drawBackground();</script>
<?php
    include('player.php');
?>
<html>
    <head>
        <Title>Game Title</Title>
        <link rel="stylesheet" href="styles.css" />
        <div class="header">
            <img src="images/logo.png" alt="Red Dragon Logo" class="logo">
            <p class="title">Game Name</p>
            <p class="middle" id="middle"></p>
            <div class="info">
                <p class="name" id="pName"></p>
                <p class="health" id="pHealth"></p>
                <p class="gold" id="pGold"></p>
            </div>
        </div>
    </head>
    <script>
        playerStats();
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

            if(900 <= h){
                $("canvas").attr("width", "" + 0.99 * w + "");
                $("canvas").attr("height", "" + 0.85 * h + "");
            }else{
                $("canvas").attr("width", "" + 0.99 * w + "");
                $("canvas").attr("height", "" + 0.8 * h + "");
            }   
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
    <script>
        $(document).ready(function(){
        drawBackground();
        });
        function drawBackground() {
            var ctx = document.getElementById('myCanvas').getContext('2d');
            var img = new Image();
            img.onload = function() {
                ctx.drawImage(img, 0, 0, 2000, 820);
                drawMenu();
            };
                img.src = 'images/background/pxArt.png';
            }
    </script>
<?php 
    include('menu.php');
    include('actionWindow.php');
    include('enemy.php');
?>
</html>