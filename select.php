<html>
<body>
<?php
    if(empty($_COOKIE["lang"])){
        setcookie("lang", $_GET["language"], time() + 10);
    }
    if(isset($_COOKIE["lang"])){
        setcookie("lang", $_GET["language"], time() + 10);
    }
?>
</body>
</html>