
<?php
$output = shell_exec("
curl -s --user 'api:edeff5085abc31e5495ad5f819cbabf7-6e0fd3a4-d01d1b37' \
https://api.mailgun.net/v3/sandbox9c2dd2ba12f941e1a769925c8d2e63c2.mailgun.org/messages \
-F from='Excited User <mailgun@sandbox9c2dd2ba12f941e1a769925c8d2e63c2.mailgun.org>' \
-F to=danlyt74@gmail.com\
-F subject='Hello' \
-F text='Testing some Mailgun awesomeness!'
");
?>
