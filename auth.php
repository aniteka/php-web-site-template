
<?php
if($_COOKIE["user"] == "Yes")
{
    setcookie("user", "", time() - 3600, "/");
    header("Location: /");
    exit(); 
}
setcookie("user", "Yes", time() + 3600, "/");
header("Location: /");
?>