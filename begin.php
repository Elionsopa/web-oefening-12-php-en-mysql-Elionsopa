<!doctype html>
<html lang=nl>

<?php include('includes/head.php')?>

<body>
	

<div class="container">
		<?php
		//invoegen menu
			include('includes/menu.php');
			if(!isset($_GET['page'])){
				include("includes/start.php");
			}else
			{
				$link = "includes/".$_GET['page'].".php";
				include($link);
			}
			include("includes/footer.php")
		?>
	</div>
</body>
</html>
