			<?php 
			if(empty($_SESSION['user1'])){
			?>
<a class="home" href="index.php?pg=11">
            <img src="icon/order.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
            <span class="sides" >
			Petunjuk
			<?php
			}else{
			?>
<a class="home" href="<?php echo"index.php?pg=11&u=$_SESSION[user1]"; ?>">
            <img src="icon/order.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
            <span class="sides">
			Petunjuk
			<?php
			}
			?>
			</span>
        </a>