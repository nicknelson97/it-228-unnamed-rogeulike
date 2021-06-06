<script>
function knight() {
    eName = "Knight";
    eMHealth = 10;
    eCHealth = 10;
    eMinAttack = 1;
    eMaxAttack = 3;
    eDefense = 1;
    eMDefense = 0;
    eMinGold = 2;
    eMaxGold = 14;

    drawKnight();
        function drawKnight() {
          var ctx = document.getElementById('myCanvas').getContext('2d');
          var img = new Image();
            var bImg = new Image();
            
          img.onload = function() {
            ctx.imageSmoothingEnabled = false;
            ctx.drawImage(bImg, 840, 40, 550, 450);
            ctx.drawImage(img, 930, 150, img.width * 8.5, img.height * 8.5);
          };
          img.src = 'images/knight.png';
            bImg.src = 'images/background/enemyBack.png';

            ctx.fillStyle = 'white';
            ctx.fillRect(950, 502, 296, 176);
            
            ctx.fillStyle = 'black';
     //action window
            ctx.beginPath();
            ctx.rect(948, 500, 300, 180);
            ctx.stroke();
         
            ctx.font = "41px Arial";
            ctx.textAlign= "center";
            ctx.fillText(eName, 1095, 545);

            ctx.font = "34px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Health", 1022, 583);

            ctx.font = "34px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Attack", 1172, 583);

            ctx.font = "30px Arial";
            ctx.textAlign= "center";
            ctx.fillText(eCHealth + " / " + eMHealth, 1021, 627);

            ctx.font = "30px Arial";
            ctx.textAlign= "center";
            ctx.fillText(eMinAttack + " - " + eMaxAttack, 1170, 627);
    }
         
}
</script>