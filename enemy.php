<?php 
    include('enemies/goblin.php');
    include('enemies/bandit.php');
    include('enemies/spider.php');
    include('enemies/knight.php');
?>
<script>
    var eName = "";
    var eMHealth = 0;
    var eCHealth = 0;
    var eMinAttack = 0;
    var eMaxAttack = 0;
    var eDefense = 0;
    var eMDefense = 0;
    
    var enemySelect;
    randoEnemy();
    
    function randoEnemy() {
        var x = Math.floor(Math.random() * 4 + 1);
        enemySelect = x;
        if(enemySelect == 1){
            goblin();
        }
        else if(enemySelect == 2){
            bandit();
        }
        else if(enemySelect == 3){
            spider();
        }
        else if(enemySelect == 4){
            knight();
        }
    }

</script>