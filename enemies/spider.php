<script>
function spider() {
    eName = "Spider";
    eMHealth = 8;
    eCHealth = 8;
    eMinAttack = 2;
    eMaxAttack = 4;
    eDefense = 0;
    eMDefense = 0;
    eMinGold = 1;
    eMaxGold = 8;

    drawSpider();
        function drawSpider() {
          var ctx = document.getElementById('myCanvas').getContext('2d');
          var img = new Image();
            var bImg = new Image();
            
          img.onload = function() {
            ctx.imageSmoothingEnabled = false;
            ctx.drawImage(bImg, 840, 40, 550, 450);
            ctx.drawImage(img, 847, 44, img.width * 7.8, img.height * 7.8);
          };
          img.src = 'images/spider.png';
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