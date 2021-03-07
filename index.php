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
    background: #1B1212 !important;
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
    body,html{background:#1a1a1a;width:100%;height:100%;position:relative;z-index: -2;}.view{position:relative;-webkit-perspective:400;perspective:400;z-index: -2;}.plane{width:120px;height:120px;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;position:absolute;z-index: -2;}.plane.main{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;-webkit-transform:rotateX(60deg) rotateZ(-30deg);transform:rotateX(60deg) rotateZ(-30deg);-webkit-animation:rotate 20s infinite linear;animation:rotate 20s infinite linear;z-index: -2;}.plane.main .circle{width:120px;height:120px;position:absolute;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;border-radius:100%;box-sizing:border-box;box-shadow:0 0 60px #a10705,inset 0 0 60px #7a0000;z-index: -2;}.plane.main .circle::after,.plane.main .circle::before{content:'';display:block;position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:5%;height:5%;border-radius:100%;background:#5d0819;box-sizing:border-box;box-shadow:0 0 60px 2px #7a0000;z-index: -2;}.plane.main .circle::before{-webkit-transform:translateZ(-90px);transform:translateZ(-90px)}.plane.main .circle::after{-webkit-transform:translateZ(90px);transform:translateZ(90px)}.plane.main .circle:nth-child(1){-webkit-transform:rotateZ(72deg) rotateX(63.435deg);transform:rotateZ(72deg) rotateX(63.435deg)}.plane.main .circle:nth-child(2){-webkit-transform:rotateZ(144deg) rotateX(63.435deg);transform:rotateZ(144deg) rotateX(63.435deg)}.plane.main .circle:nth-child(3){-webkit-transform:rotateZ(216deg) rotateX(63.435deg);transform:rotateZ(216deg) rotateX(63.435deg)}.plane.main .circle:nth-child(4){-webkit-transform:rotateZ(288deg) rotateX(63.435deg);transform:rotateZ(288deg) rotateX(63.435deg)}.plane.main .circle:nth-child(5){-webkit-transform:rotateZ(360deg) rotateX(63.435deg);transform:rotateZ(360deg) rotateX(63.435deg)}@-webkit-keyframes rotate{0%{-webkit-transform:rotateX(0) rotateY(0) rotateZ(0);transform:rotateX(0) rotateY(0) rotateZ(0)}100%{-webkit-transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg);transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg)}}@keyframes rotate{0%{-webkit-transform:rotateX(0) rotateY(0) rotateZ(0);transform:rotateX(0) rotateY(0) rotateZ(0)}100%{-webkit-transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg);transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg)}}; h2{color:whitesmoke; font-weight:bold; text-decoration:underline;}        
    </style>
  </head>
  <body>
    <audio id="myAudio">

<source type="audio/mpeg" id="playthis" src="">
</audio>


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="myModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
    <p id=greet>Howdie boss!</p>
    </div>
    <div class="modal-footer">
    <button type="button" id="cclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary" style="background-color:black; border-color:white;color:white;" onclick=playAudio() data-dismiss="modal">Play</button>
        </div>
    </div>
  </div>
</div>
<script>
var x = document.getElementById("myAudio"); 

$(document).ready(function(){
	$("#myModal").modal('show');
  var greeting;
  var time = new Date().getHours();
  if (time < 10) {
    greeting = "Good morning, boss. <br>Want me to play a music while you are on it?";
  } else if (time < 12) {
    greeting = "Good noon, boss. <br>Want me to play a music while you are on it?";
  } else if(time <18){
    greeting = "Good afternoon, boss. <br>Want me to play a music while you are on it?";
  } else{
    greeting = "Good evening, boss. <br>Want me to play a music while you are on it?";
  }

  document.getElementById("greet").innerHTML = greeting;

	});

  var playlist = Array("music1.mp3","music2.mp3","music3.mp3","music4.mp3","music5.mp3","music6.mp3","music7.mp3","music8.mp3","music9.mp3","music10.mp3","music11.mp3","music12.mp3","music13.mp3","music15.mp3","music16.mp3","music17.mp3","'Till I Collapse.mp3");
var randomSong = playlist[Math.floor(Math.random()*playlist.length)];
          document.getElementById("playthis").src = randomSong;
          x.load();

function playAudio() { 
  x.play(); 
  document.getElementById('error-message').style.color = "GREEN";
        document.getElementById('error-message').innerHTML = "Playing Music..";
} 

function pauseAudio() { 
  x.pause(); 
}</script>


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
  <h1 style="color:white;">Welcome to Project #NeO</h1>
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
  <br><br><br><br><Br>
  <div class='view'><br><div class='plane main'><div class='circle'></div><div class='circle'></div><div class='circle'></div><div class='circle'></div><div class='circle'></div><div class='circle'></div></div></div>
  <br><br><br><br><br>
  <code style="color:lightgray">"from Knowledge, sea power."</code>
  <br><br>
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


    document.getElementById('error-message').style.color = "GREEN";
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

          document.getElementById('error-message').style.color = "GREEN";
          document.getElementById('error-message').innerHTML = "Getting target info..";

          var attr = document.createAttribute('data-toggle');
          attr.value="modal";
          document.getElementById("subm").setAttributeNode(attr);

          var attr1 = document.createAttribute('data-target');
          attr1.value="#exampleModal";
          document.getElementById("subm").setAttributeNode(attr1);
  
          
             
        }else if(x.includes("dropbox")){

          document.getElementById('error-message').style.color = "GREEN";
          document.getElementById('error-message').innerHTML = "Getting target info..";
          
          
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
             document.getElementById('error-message').style.color = "GREEN";
             document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
              window.open("https://"+domain+"/student_quiz_assignment/submission/"+act+"?results="+result, '_blank');
            
            }else if(x.includes("student_lesson")){
              document.getElementById('error-message').innerHTML = "Visit <a href=/tutorial>tutorial</a> for more details.";
            }else{
          document.getElementById('error-message').style.color = "red";
          document.getElementById('error-message').innerHTML = "Activity not found.";
          var elmnt = document.getElementById("error-message");
          elmnt.scrollIntoView();
          }
        

   }catch(error){
    document.getElementById('error-message').style.color = "red";
    document.getElementById('error-message').innerHTML = "Invalid URI. please include: http, https.";
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
          
          document.getElementById('error-message').style.color = "GREEN";
          document.getElementById('error-message').innerHTML = "Getting target info..";

              if(document.getElementById('target-text').value === ""){
                document.getElementById('error-message').style.color = "GREEN";
                document.getElementById("cclose").click();
                document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
                window.open("https://"+domain+"/student_freeform_assignment/comments_given/"+act, '_blank', 'noopener noreferrer');
              }else{
                document.getElementById('error-message').style.color = "GREEN";
                document.getElementById("cclose").click();
                document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
                window.open("https://"+domain+"/student_freeform_assignment/leave_comment/"+act+"?student="+y.replace(/[^0-9]/g, ''), '_blank','noopener noreferrer');
              }
        }else if(x.includes("dropbox")){
          
          document.getElementById('error-message').style.color = "GREEN";
          document.getElementById('error-message').innerHTML = "Getting target info..";

          if(document.getElementById('target-text').value == ""){
            document.getElementById('error-message').style.color = "GREEN";
            document.getElementById("cclose").click();
            document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
            window.open("https://"+domain+"/student_dropbox_assignment/comments_given/"+act, '_blank','noopener noreferrer');
              }else{
               document.getElementById('error-message').style.color = "GREEN";
               document.getElementById("cclose").click();
               document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
               window.open("https://"+domain+"/student_dropbox_assignment/leave_comment/"+act+"?student="+y.replace(/[^0-9]/g, ''), '_blank','noopener noreferrer');
              }
          }else if(x.includes("quiz")){
            //result_id
            quiz = new URL(x);
            var result = quiz.searchParams.get("results");
             document.getElementById('error-message').style.color = "GREEN";
             document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
            window.open("https://"+domain+"/student_quiz_assignment/submission/"+act+"?results="+result, '_blank','noopener noreferrer');
            
            }else if(x.includes("student_lesson")){
              document.getElementById('error-message').innerHTML = "Visit <a href=/tutorial>tutorial</a> for more details.";
            }else{
          document.getElementById('error-message').style.color = "red";
          document.getElementById('error-message').innerHTML = "Activity not found.";
          document.getElementById("cclose").click();
          var elmnt = document.getElementById("error-message");
          elmnt.scrollIntoView();
          }
        

   }catch(error){
        document.getElementById('error-message').style.color = "red";
        document.getElementById('error-message').innerHTML = "Invalid URI. please include: http, https.";
        document.getElementById("cclose").click();
        var elmnt = document.getElementById("error-message");
        elmnt.scrollIntoView();

   }
  }
  
  function music(){
    getElementById('msic').load();
  }

</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>  </body>

</html>
