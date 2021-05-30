
    <script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "20px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Settings", 1848, 19);
            var sButton = document.getElementById('settings');
            sButton.setAttribute("style", "left: 1821px; top: 127px;");
        });
        
    </script>
    <script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
             
             
            ctx.font = "" + 0.0125 * w + "px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Inventory", 0.9625 * w, 0.06 * h);
            var iButton = document.getElementById('inventory');
            iButton.setAttribute("style", "left: 1772px; top: 163px; height: 28px; width: 140px; ");
        });
    </script>
    <script>
        $(document).ready(function(){
            var nButton = document.getElementById('name');
            nButton.setAttribute("style", "left: 1717px; top: 15px; height: 20px; width: 70px; ");
        });
    </script> 
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
    <script>
        function setAttack() {
            var x = document.getElementById("inventory");
            var selected = x.value;
            changeAttack();
            function changeAttack() {
                if (selected = 1){
                    pMinAttack = 2;
                    pMaxAttack = 7;
                }
                else if(selected = 2){
                    pMinAttack = 3;
                    pMaxAttack = 10;
                }
                else if(selected = 3){
                    pMinAttack = 4;
                    pMaxAttack = 15;
                }  
            }
            document.getElementById("inventory").value = 0;
        }

    </script>
<input onclick="settingsButton()" type="button" id="settings" name="settings" class="settings" value="                   ">

<select id="inventory" class="inventory" onclick="setAttack()">
        <option value="0">                         </option>
        <option value="4">Dagger : 1-4 atk</option>
        <option value="1" onclick="setAttack()">Sword        : 2-7  atk  </option>
        <option value="2" onclick="setAttack()">Big Sword    : 3-10 atk  </option>
        <option value="3" onclick="setAttack()">Bigger Sword : 4-15 atk  </option>
        
</select>

<input onclick="changeName()" type="button" id="name" name="name" class="invisButton" value="                   ">
