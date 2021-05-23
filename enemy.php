<script>
    var eName = "Goblin";
    var eMHealth = 10;
    var eCHealth = 10;
    var eMinAttack = 1;
    var eMaxAttack = 4;
    var eDefense = 0;
    var eMDefense = 0;
</script>
<script>
    $(document).ready(function(){//action window
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             

            ctx.beginPath();
            ctx.rect(948, 500, 300, 180);
            ctx.stroke();
        });

</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "41px Arial";
            ctx.textAlign= "center";
            ctx.fillText(eName, 1095, 545);
        });
</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "34px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Health", 1022, 583);
        });
</script>
<script>
        $(document).ready(function(){
            var w = (1920 + window.innerWidth)/2;
            var h = (947 + window.innerHeight)/2;
             
             
            ctx.font = "34px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Attack", 1172, 583);
        });
</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "30px Arial";
            ctx.textAlign= "center";
            ctx.fillText(eCHealth + " / " + eMHealth, 1021, 627);
        });
</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "30px Arial";
            ctx.textAlign= "center";
            ctx.fillText(eMinAttack + " - " + eMaxAttack, 1170, 627);
        });
</script>