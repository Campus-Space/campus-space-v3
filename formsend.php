<?php
if($_POST["Message"]) {
mail("studentcouncil@smit.smu.edu.in", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: rishabh_201900307@smit.smu.edu.in");
}
?>