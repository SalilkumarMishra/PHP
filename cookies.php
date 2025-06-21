<?php
$cookies_name = "user";
$cookies_value = "Salil";
setcookie($cookies_name, $cookies_value,time() + 5);
if(isset($_COOKIE[$cookie_name]))
{
    echo "Cookie " . $cookies_name . " has been set<br>";
    echo "Value is: " . $COOKIES[$cookie_name];
}
else
{
    
}
?>