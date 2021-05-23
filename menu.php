
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
        });
    </script> 
    <script>
        function settingsButton() {
            alert("You clicked on the settings button!");
        }
    </script>
<input onclick="settingsButton()" type="button" id="settings" name="settings" class="settings" value="                   ">
