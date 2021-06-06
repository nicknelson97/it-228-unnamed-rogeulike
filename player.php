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

<script>
    function drawPlayer() {
        var ctx = document.getElementById('myCanvas').getContext('2d');
        var img = new Image();
        var bImg = new Image();
        var bImg2 = new Image();
            
        img.onload = function() {
            ctx.imageSmoothingEnabled = false;
            ctx.drawImage(bImg, 106, 15, 530, 380);
            ctx.drawImage(img, 106, 28, img.width * 8.5, img.height * 8.5);
            ctx.drawImage(bImg2, 0, 0, 400, 31);
            ctx.fillStyle = 'black';
            ctx.font = "24px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Enemies slain: " + eKillCount, 90, 20);
            var aButton = document.getElementById('cDeath');
            aButton.setAttribute("style", "left: 487px; top: 845px;");
            drawWindows();
        };
            img.src = 'images/player.png';
            bImg.src = 'images/background/playerBack.png';
            bImg2.src = 'images/background/counterBack.png';
        }
    </script>
    <script>
        function playerStats() {
            var pH = document.getElementById("pHealth");
            var pG = document.getElementById("pGold");
            var pN = document.getElementById("pName");
            pN.innerHTML = pName;
            pH.innerHTML = 'Health<span class="health">: </span>' + pCHealth + ' / ' + pMHealth;
            pG.innerHTML = 'Gold<span class="health">: </span>' + pGold;

        }
    </script>