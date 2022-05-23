<?php
if($_POST["Message"]) {
mail("kaushalswami7178@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: kaushalswami7178@outlook.com");
}
?>