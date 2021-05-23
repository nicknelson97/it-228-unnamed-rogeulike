<?php
?>
<script>
    $(document).ready(function(){//action window
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.beginPath();
            ctx.rect(141, 500, 300, 125);
            ctx.stroke();
        });
    
</script>
<script>
    $(document).ready(function(){//action window
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "24px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Enemies slain: " + eKillCount, 90, 20);
            var aButton = document.getElementById('cDeath');
            aButton.setAttribute("style", "left: 487px; top: 845px;");
        });

</script>
<script>
    $(document).ready(function(){//result window
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.beginPath();
            ctx.rect(141, 650, 500, 100);
            ctx.stroke();
        });

</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "30px Arial";
            ctx.textAlign= "center";
            ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
        });
</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "40px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Attack", 208, 545);
            var aButton = document.getElementById('pAttack');
            aButton.setAttribute("style", "left: 162px; top: 639px; height: 30px;");
        });
</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "40px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Defend", 368, 545);
        });
</script>
<script>
        $(document).ready(function(){
            var w = (1920 + window.innerWidth)/2;
            var h = (947 + window.innerHeight)/2;
             
             
            ctx.font = "40px Arial";
            ctx.textAlign= "center";
            ctx.fillText("???", 200, 600);
        });
</script>
<script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "40px Arial";
            ctx.textAlign= "center";
            ctx.fillText("???", 380, 600);
        });
</script>

<input onclick="pAttack()" type="button" id="pAttack" name="pAttack" class="invisButton" value="                              ">

<input onclick="" type="button" id="cDeath" name="cDeath" class="invisButton" value="">
<script>
    function pAttack(){
         
         
        var pH = document.getElementById("pHealth");
        var eHit = Math.floor(Math.random() * pMaxAttack) + pMinAttack;
            eHit = eHit - eDefense;
            ctx.fillStyle = 'white'; //Changes enemy health
            ctx.fillRect(970, 602, 100, 30);
            ctx.fillStyle = 'black';
            ctx.font = "30px Arial";
            ctx.textAlign= "center";
            eCHealth = eCHealth - eHit;
            ctx.fillText(eCHealth + " / " + eMHealth, 1021, 627);
            
            ctx.fillStyle = 'white'; //Displays enemy damage taken
            ctx.fillRect(143, 654, 400, 30);
            ctx.fillStyle = 'black';
            ctx.font = "24px Arial";
            ctx.fillText(eName + " takes " + eHit + " damage!", 280, 677);
        
        var pHit = Math.floor(Math.random() * eMaxAttack) + eMinAttack;
            pHit = pHit - pDefense;
            ctx.fillStyle = 'white'; //Changes player health
            ctx.fillRect(239, 105, 100, 30);
            ctx.fillStyle = 'black';
            ctx.font = "30px Arial";
            ctx.textAlign= "center";
            pCHealth = pCHealth - pHit;
            ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
            pH.innerHTML = 'Health<span class="health">: </span>' + pCHealth + ' / ' + pMHealth;
            
            ctx.fillStyle = 'white'; //Displays player damage taken
            ctx.fillRect(143, 685, 400, 30);
            ctx.fillStyle = 'black';
            ctx.font = "24px Arial";
            ctx.fillText(pName + " takes " + pHit + " damage!", 280, 708);
        
        if(eCHealth <= 0 && pCHealth > 0){ // if enemy is dead and player is not
            ctx.fillStyle = 'black';
            ctx.font = "24px Arial";
            ctx.fillText(eName + " has died! Next enemy?", 313, 739);
            var aButton = document.getElementById('pAttack');
            aButton.setAttribute("onclick", " ");
            
            var dButton = document.getElementById('cDeath');
            dButton.setAttribute("class", "visButton" );
            dButton.setAttribute("onclick", "resetEnemy()");
            dButton.setAttribute("value", "  Yes  ");
            
            eKillCount = eKillCount + 1;
                ctx.fillStyle = 'white'; //Changes kill count
                ctx.fillRect(0, 0, 400, 30);
                ctx.fillStyle = 'black';
                ctx.font = "24px Arial";
                ctx.textAlign= "center";
                ctx.fillText("Enemies slain: " + eKillCount, 90, 20);
        }
        else if(eCHealth > 0 && pCHealth <= 0){ // if player is dead and enemy is not
            ctx.fillStyle = 'black';
            ctx.font = "24px Arial";
            ctx.fillText(pName + " has died! Try again?", 300, 739);
            var aButton = document.getElementById('pAttack');
            aButton.setAttribute("onclick", " ");
            
            var dButton = document.getElementById('cDeath');
            dButton.setAttribute("class", "visButton" );
            dButton.setAttribute("onclick", "resetState()");
            dButton.setAttribute("value", "  Yes  ");
        }
        else if(eCHealth <= 0 && pCHealth <= 0){ // if both are dead
            ctx.fillStyle = 'black';
            ctx.font = "24px Arial";
            ctx.fillText("You both died! Try again?", 310, 739);
            var aButton = document.getElementById('pAttack');
            aButton.setAttribute("onclick", " ");
            
            var dButton = document.getElementById('cDeath');
            dButton.setAttribute("class", "visButton" );
            dButton.setAttribute("onclick", "resetState()");
            dButton.setAttribute("value", "  Yes  ");
            
            eKillCount = eKillCount + 1;
                ctx.fillStyle = 'white'; //Changes kill count
                ctx.fillRect(0, 0, 400, 30);
                ctx.fillStyle = 'black';
                ctx.font = "24px Arial";
                ctx.textAlign= "center";
                ctx.fillText("Enemies slain: " + eKillCount, 90, 20);
        }
        else {
            var noVarTest = 0;
        }
    }
</script>
<script>
    function resetEnemy(){
        eCHealth = eMHealth;
        ctx.fillStyle = 'white'; //Changes enemy health
        ctx.fillRect(970, 602, 100, 30);
        ctx.fillStyle = 'black';
        ctx.font = "30px Arial";
        ctx.textAlign= "center";
        ctx.fillText(eCHealth + " / " + eMHealth, 1021, 627);
        
        ctx.fillStyle = 'white'; //Wipe enemy damage message
            ctx.fillRect(143, 654, 400, 30);
        ctx.fillStyle = 'white'; //Wipe player damage message
            ctx.fillRect(143, 685, 400, 30);
        ctx.fillStyle = 'white'; //Wipe death message
            ctx.fillRect(143, 716, 450, 30);  
        
        var aButton = document.getElementById('pAttack');
        aButton.setAttribute("onclick", "pAttack()");
        
        var dButton = document.getElementById('cDeath');
        dButton.setAttribute("onclick", " " );
        dButton.setAttribute("class", "invisButton" );
        dButton.setAttribute("value", " ");
    }
    
    function resetState(){
        var pH = document.getElementById("pHealth");
         
         
        eCHealth = eMHealth;
        ctx.fillStyle = 'white'; //Changes enemy health
        ctx.fillRect(970, 602, 100, 30);
        ctx.fillStyle = 'black';
        ctx.font = "30px Arial";
        ctx.textAlign= "center";
        ctx.fillText(eCHealth + " / " + eMHealth, 1021, 627);
        
        pCHealth = pMHealth;
        ctx.fillStyle = 'white'; //Changes enemy health
        ctx.fillRect(239, 105, 100, 30);
        ctx.fillStyle = 'black';
        ctx.font = "30px Arial";
        ctx.textAlign= "center";
        ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
        pH.innerHTML = 'Health<span class="health">: </span>' + pCHealth + ' / ' + pMHealth;
        
        ctx.fillStyle = 'white'; //Wipe enemy damage message
            ctx.fillRect(143, 654, 400, 30);
        ctx.fillStyle = 'white'; //Wipe player damage message
            ctx.fillRect(143, 685, 400, 30);
        ctx.fillStyle = 'white'; //Wipe death message
            ctx.fillRect(143, 716, 450, 30);  
        
        eKillCount = 0;
            ctx.fillStyle = 'white'; //Changes kill count
            ctx.fillRect(0, 0, 400, 30);
            ctx.fillStyle = 'black';
            ctx.font = "24px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Enemies slain: " + eKillCount, 90, 20);
        
        var aButton = document.getElementById('pAttack');
        aButton.setAttribute("onclick", "pAttack()");
        
        var dButton = document.getElementById('cDeath');
        dButton.setAttribute("onclick", " " );
        dButton.setAttribute("class", "invisButton" );
        dButton.setAttribute("value", " ");
    }

</script>