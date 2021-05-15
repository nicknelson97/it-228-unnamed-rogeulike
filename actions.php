<?php
?>
<script>
    $(document).ready(function(){//action window
            var w = window.innerWidth;
            var h = window.innerHeight;
            var c = document.getElementById("myCanvas");
            var ctx = c.getContext("2d");

            ctx.beginPath();
            ctx.rect(141, 500, 0.19 * w, 0.17 * h);
            ctx.stroke();
        });

</script>