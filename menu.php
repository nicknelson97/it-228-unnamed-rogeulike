
    <script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
            var c = document.getElementById("myCanvas");
            var ctx = c.getContext("2d");
            ctx.font = "" + 0.0125 * w + "px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Settings", 0.9625 * w, 0.025 * h);
            var sButton = document.getElementById('settings');
            sButton.setAttribute("style", "left: " + ((0.942 * w) * 0.99) + "px; top: " + ((0.155 * h) * 0.85) + "px;");
//            <?php
//                if(isset($_POST['settings'])){
//                    echo 'alert("you pressed the settings button");';
//                } ?>
        });
        
    </script>
    <script>
        $(document).ready(function(){
            var w = window.innerWidth;
            var h = window.innerHeight;
            var c = document.getElementById("myCanvas");
            var ctx = c.getContext("2d");
            ctx.font = "" + 0.0125 * w + "px Arial";
            ctx.textAlign= "center";
            ctx.fillText("Inventory", 0.9625 * w, 0.06 * h);
        });
    </script> 
<input type="button" id="settings" name="settings" class="settings" value="                   ">
