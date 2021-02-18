<?php
$realm = 'Restricted area';

//user => password
$users = array('neo' => 'tony stark');


if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$realm.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');

    die('This is a restricted file. Authorized pips only!');
}


// analyze the PHP_AUTH_DIGEST variable
if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||
    !isset($users[$data['username']]))
    die('This is a restricted file. Authorized pips only!');


// generate the valid response
$A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
$valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);

if ($data['response'] != $valid_response)
    die('This is a restricted file. Authorized pips only!');



// function to parse the http auth header
function http_digest_parse($txt)
{
    // protect against missing data
    $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $data = array();
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }

    return $needed_parts ? false : $data;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <style>
div{
padding: 50px;}
body{
background-color: black;
color: white;}
   </style>
    </script>
    <title>Tutorial</title>
  </head>
  <body>

<div>
<b>Project Neo Tutorial.. </b>
<br><br>
<h2>QUIZ:</h2>
<p>
1. CLick 'Take Quiz'<br>
2. Randomly answer the questions<br>
3. just right at the submit URI copy the URL<br>
4. Paste it on http://neo.danicfonte.cf/<br>
5. A new window should open provided with answer keys, this should be your answer key. <br>head back now and edit your answers at your original url.<br>
</p>
<br><br>
<h2>ESSAYS/DROPBOX:</h2>
<p>
Unlike quiz. essays and dropbox forms don't have answer key. teachers should be manually grading this. <br>
1. Click Prepare answer now<br>
2. Copy the URL<br>
3. and Paste it on http://neo.danicfonte.cf/<br>
4. In the "Target URI", paste one of your classmate's profile address like below:<br>
"https://sample.com/user/show/123"<br>
<i>or leave it blank and the program will generate the list your class along with their submissions</i><br>
5. you should be able to view their essay/dropbox submissions. :))<br>
</p>
<br><br>
<hr>
If you think you understand now, Click <a href="https://neo.danicfonte.cf">Home</a>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>


