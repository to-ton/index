
<?php


$str = "MjlmMDU1NTQwOTE5ZDA0ZmFiNDdiOTY2OTAxM2E5YmYtNmUwZmQzYTQtYWIyM2M5YmY=";
$domain = "aHR0cHM6Ly9hcGkubWFpbGd1bi5uZXQvdjMvc2FuZGJveDI3OGRiMGFhNDFmOTQ5Zjc4NzU4NzczM2NkNTBlNDFjLm1haWxndW4ub3JnL21lc3NhZ2Vz";
$sm =  base64_decode($str);
$sdomain = base64_decode($domain);
$output = shell_exec("
curl -s --user 'api:".$sm."' \
	".$sdomain." \
	-F from='Excited User <mailgun@sandbox278db0aa41f949f787587733cd50e41c.mailgun.org>' \
	-F to=danlyt74@gmail.com \
	-F subject='Hello' \
	-F text='Testing some Mailgun awesomeness!'
");

echo "it works!";
?>
