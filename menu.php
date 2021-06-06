    <script>
        function drawMenu(){
            
            ctx.font = "20px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Settings", 1848, 19);
            var sButton = document.getElementById('settings');
            sButton.setAttribute("style", "left: 1821px; top: 127px;");

            ctx.font = "20px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Inventory", 1848, 40);
            var iButton = document.getElementById('inventory');
            iButton.setAttribute("style", "left: 1810px; top: 146px; height: 21px; width: 90px; ");

            ctx.font = "20px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Shop", 1848, 61);
            var iButton = document.getElementById('shop');
            iButton.setAttribute("style", "left: 1810px; top: 168px; height: 21px; width: 90px; ");

            var nButton = document.getElementById('name');
            nButton.setAttribute("style", "left: 1717px; top: 15px; height: 20px; width: 70px; ");
            
            randoEnemy();
        }
    </script>
<!--SETTINGS SECTION-->
    <script>
        function settingsButton() {
            alert("You clicked on the settings button!");
        }
        function changeName() {
            var value = prompt('Change Player Name');
            var pN = document.getElementById("pName");
            
            if (value.length > 0){
                pName = value;
                pN.innerHTML = pName;
            } 
        }
    </script>
<!--END SETTINGS-->
<!--INVENTORY SECTION-->
    <script>
        function openInv(){
            var modal = document.getElementById("invMod");
            modal.setAttribute("style", "display: block;");
        }
        function closeInv(){
            var modal = document.getElementById("invMod");
            modal.setAttribute("style", "display: none;");
            setAttack()
        }
    </script>
    <script>
        $(document).ready(function(){
            drawInitWeapon();
        });
        function drawInitWeapon(){
            drawPlayer();
            var ctx = document.getElementById('myCanvas').getContext('2d');
            var img = new Image();
            
            img.onload = function() {
                ctx.imageSmoothingEnabled = false;
                ctx.drawImage(img, 106, 28, img.width * 8.5, img.height * 8.5);
                ctx.fillStyle = 'black';
                ctx.font = "30px Arial";
                ctx.textAlign= "center";
                ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
            };
                img.src = 'images/dagger.png';
            }
        function setWeaponDagger(){
            pMinAttack = 1;
            pMaxAttack = 4;
            drawPlayer();
            var ctx = document.getElementById('myCanvas').getContext('2d');
            var img = new Image();
            
            img.onload = function() {
                ctx.imageSmoothingEnabled = false;
                ctx.drawImage(img, 106, 28, img.width * 8.5, img.height * 8.5);
                ctx.fillStyle = 'black';
                ctx.font = "30px Arial";
                ctx.textAlign= "center";
                ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
                
            };
                img.src = 'images/dagger.png';
        }
        function setWeaponSword(){
            pMinAttack = 2;
            pMaxAttack = 7;
            drawPlayer();
            var ctx = document.getElementById('myCanvas').getContext('2d');
            var img = new Image();
            
            img.onload = function() {
                ctx.imageSmoothingEnabled = false;
                ctx.drawImage(img, 106, 28, img.width * 8.5, img.height * 8.5);
                ctx.fillStyle = 'black';
                ctx.font = "30px Arial";
                ctx.textAlign= "center";
                ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
                
            };
                img.src = 'images/sword.png';
        }
        function setWeaponBSword(){
            pMinAttack = 3;
            pMaxAttack = 10;
            drawPlayer();
            var ctx = document.getElementById('myCanvas').getContext('2d');
            var img = new Image();
            
            img.onload = function() {
                ctx.imageSmoothingEnabled = false;
                ctx.drawImage(img, 106, 28, img.width * 8.5, img.height * 8.5);
                ctx.fillStyle = 'black';
                ctx.font = "30px Arial";
                ctx.textAlign= "center";
                ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
                
            };
                img.src = 'images/big_sword.png';
        }
        function setWeaponBRSword(){
            pMinAttack = 4;
            pMaxAttack = 15;
            drawPlayer();
            var ctx = document.getElementById('myCanvas').getContext('2d');
            var img = new Image();
            
            img.onload = function() {
                ctx.imageSmoothingEnabled = false;
                ctx.drawImage(img, 106, 28, img.width * 8.5, img.height * 8.5);
                ctx.fillStyle = 'black';
                ctx.font = "30px Arial";
                ctx.textAlign= "center";
                ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
                
            };
                img.src = 'images/bigger_sword.png';
        }

    </script>
<!--END INVENTORY-->
<!--SHOP SECTION-->
    <script>
        function openShop(){
            var modal = document.getElementById("shopMod");
            modal.setAttribute("style", "display: block;");
        }
        function closeShop(){
            var modal = document.getElementById("shopMod");
            modal.setAttribute("style", "display: none;");
            setAttack()
        }
    </script>
    <script>
        var pH = document.getElementById("pHealth");
        var pG = document.getElementById("pGold");
        function purchWeaponSword(){
            var buy = document.getElementById("isword");
            var label = document.getElementById("iswordL");
            var pMes = document.getElementById("purchMes");
            if(pGold >= 10){
                pGold = pGold - 10;
                buy.setAttribute("type", "radio" );
                label.setAttribute("style", "display: inline" );
                pG.innerHTML = 'Gold<span class="health">: </span>' + pGold;
                pMes.innerHTML = 'Purchased Sword for 10 gold';
            }
        }
        function purchWeaponBSword(){
            var buy = document.getElementById("ibsword");
            var label = document.getElementById("ibswordL");
            var pMes = document.getElementById("purchMes");
            if(pGold >= 20){
                pGold = pGold - 20;
                buy.setAttribute("type", "radio" );
                label.setAttribute("style", "display: inline" );
                pG.innerHTML = 'Gold<span class="health">: </span>' + pGold;
                pMes.innerHTML = 'Purchased Big Sword for 20 gold';
            }
        }
        function purchWeaponBRSword(){
            var buy = document.getElementById("ibrsword");
            var label = document.getElementById("ibrswordL");
            var pMes = document.getElementById("purchMes");
            if(pGold >= 30){
                pGold = pGold - 30;
                buy.setAttribute("type", "radio" );
                label.setAttribute("style", "display: inline" );
                pG.innerHTML = 'Gold<span class="health">: </span>' + pGold;
                pMes.innerHTML = 'Purchased Bigger Sword for 30 gold';
            }
        }
        function purchHPot(){
            var pMes = document.getElementById("purchMes");
            if(pGold >= 20 && pCHealth < pMHealth){
                pGold = pGold - 20;
                pCHealth = pCHealth + 20;
                pH.innerHTML = 'Health<span class="health">: </span>' + pCHealth + ' / ' + pMHealth;
                pG.innerHTML = 'Gold<span class="health">: </span>' + pGold;
                ctx.fillStyle = 'white'; //Changes player health
                ctx.fillRect(239, 105, 100, 30);
                ctx.fillStyle = 'black';
                ctx.font = "30px Arial";
                ctx.textAlign= "center";
                ctx.fillText(pCHealth + " / " + pMHealth, 290, 130);
                pMes.innerHTML = 'Purchased Health Potion for 20 gold, healed 20 health';
            }
        }
        
        
    </script>
<!--END SHOP-->
<input onclick="settingsButton()" type="button" id="settings" name="settings" class="settings" value="                   ">

<input onclick="openInv()" onload="" type="button" id="inventory" name="inventory" class="invisButton" value="                   ">

<input onclick="openShop()" onload="" type="button" id="shop" name="shop" class="invisButton" value="                   ">

<input onclick="changeName()" type="button" id="name" name="name" class="invisButton" value="                   ">

<div id="invMod" class="modal">

  <div class="modal-content">
    <span class="close" onclick="closeInv()">&times;</span>
      <ul>
        <h3>Inventory</h3>
        <input type="radio" value="1" onclick="setWeaponDagger()" name="weapon" id="idagger"><label id="idaggerL">Dagger: 1-4 atk</label><br>
        <input type="hidden" value="2" onclick="setWeaponSword()" name="weapon" id="isword"><label id="iswordL" style="display: none;">Sword: 2-7  atk</label><br>
        <input type="hidden" value="3" onclick="setWeaponBSword()" name="weapon" id="ibsword"><label id="ibswordL" style="display: none;">Big Sword: 3-10 atk</label><br>
        <input type="hidden" value="4" onclick="setWeaponBRSword()" name="weapon" id="ibrsword"><label id="ibrswordL" style="display: none;">Bigger Sword: 4-15 atk</label><br>
      </ul>
  </div>

</div>

<div id="shopMod" class="modal">

  <div class="modal-content">
    <span class="close" onclick="closeShop()">&times;</span>
      <ul>
        <h3>Shop</h3>
        <input type="button" onclick="purchWeaponSword()" value="Purchase" name="weapon" id="ssword"><label id="sswordL"> Sword: 2-7  atk --<p class="gold" style="display: inline-block;">&nbsp;10&nbsp;</p> Gold</label><br>
        <input type="button" onclick="purchWeaponBSword()" value="Purchase" name="weapon" id="sbsword"><label id="sbswordL"> Big Sword: 3-10 atk --<p class="gold" style="display: inline-block;">&nbsp;20&nbsp;</p> Gold</label><br>
        <input type="button" onclick="purchWeaponBRSword()" value="Purchase" name="weapon" id="sbrsword"><label id="sbrswordL"> Bigger Sword: 4-15 atk --<p class="gold" style="display: inline-block;">&nbsp;30&nbsp;</p> Gold</label><br>
        <input type="button" onclick="purchHPot()" value="Purchase" name="pot" id="hPot"><label id="hPotL"> Health Potion: 20 HP --<p class="gold" style="display: inline-block;">&nbsp;20&nbsp;</p> Gold</label><br>
      </ul>
      <p id="purchMes"></p>
  </div>

</div>
