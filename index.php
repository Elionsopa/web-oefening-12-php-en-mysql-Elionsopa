<!doctype html>
<html lang=nl>

<?php include('includes/head.php')?>

<title>Cookies pagina</title>
    <script>
        function akkoord() {
            location.href = 'begin.php'; 
        }
        function nietAkkoord() {
            location.href = 'https://www.google.com'; 
        }
    </script>
    
<body>
    <div class="container">
        <?php
        include('includes/menu.php');
        ?>

        <h1>Cookies</h1>
        <p>Wij gebruiken cookies om je ervaring te verbeteren. Accepteer je het gebruik van cookies?</p>
        
        <button onclick="akkoord()">Akkoord</button>
        <button onclick="nietAkkoord()">Niet Akkoord</button>
        
        <?php
        if (!isset($_GET['page'])) {
            include("includes/start.php");
        } else {
            $link = "includes/".$_GET['page'].".php";
            include($link);
        }
        include("includes/footer.php") ?>
    </div>
</body>
</html>
