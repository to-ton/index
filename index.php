<?php
function pc_validate($user,$pass) { /* replace with appropriate username and password checking, such as checking a database */ $users = array('open' => 'sesame'); if (isset($users[$user]) && ($users[$user] == $pass)) { return true; } else { return false; } } 
if (! pc_validate($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) { header('WWW-Authenticate: Basic realm="You have reached the Portal of Gandalf."'); header('HTTP/1.0 401 Unauthorized'); echo "enchant o!. You've got the wrong spell."; exit; }
 
?>
    <!-- 
     

    :))

    


























































































































































































































































































    -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="referrer" content="no-referrer">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mema Langz Project</title>


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
    transition: width 0.2s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 200px;
    caret-color:red;
    transition: width 0.2s linear;
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
        display: none;
    }
    #hist_m{
        font-size: 12px;
        color: lightgray;
        }           
    body,html{background:#1a1a1a;width:100%;height:100%;position:relative;z-index: -2;}.view{position:relative;-webkit-perspective:400;perspective:400;z-index: -2;}.plane{width:120px;height:120px;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;position:absolute;z-index: -2;}.plane.main{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;-webkit-transform:rotateX(60deg) rotateZ(-30deg);transform:rotateX(60deg) rotateZ(-30deg);-webkit-animation:rotate 20s infinite linear;animation:rotate 20s infinite linear;z-index: -2;}.plane.main .circle{width:120px;height:120px;position:absolute;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;border-radius:100%;box-sizing:border-box;box-shadow:0 0 60px #a10705,inset 0 0 60px #7a0000;z-index: -2;}.plane.main .circle::after,.plane.main .circle::before{content:'';display:block;position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:5%;height:5%;border-radius:100%;background:#5d0819;box-sizing:border-box;box-shadow:0 0 60px 2px #7a0000;z-index: -2;}.plane.main .circle::before{-webkit-transform:translateZ(-90px);transform:translateZ(-90px)}.plane.main .circle::after{-webkit-transform:translateZ(90px);transform:translateZ(90px)}.plane.main .circle:nth-child(1){-webkit-transform:rotateZ(72deg) rotateX(63.435deg);transform:rotateZ(72deg) rotateX(63.435deg)}.plane.main .circle:nth-child(2){-webkit-transform:rotateZ(144deg) rotateX(63.435deg);transform:rotateZ(144deg) rotateX(63.435deg)}.plane.main .circle:nth-child(3){-webkit-transform:rotateZ(216deg) rotateX(63.435deg);transform:rotateZ(216deg) rotateX(63.435deg)}.plane.main .circle:nth-child(4){-webkit-transform:rotateZ(288deg) rotateX(63.435deg);transform:rotateZ(288deg) rotateX(63.435deg)}.plane.main .circle:nth-child(5){-webkit-transform:rotateZ(360deg) rotateX(63.435deg);transform:rotateZ(360deg) rotateX(63.435deg)}@-webkit-keyframes rotate{0%{-webkit-transform:rotateX(0) rotateY(0) rotateZ(0);transform:rotateX(0) rotateY(0) rotateZ(0)}100%{-webkit-transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg);transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg)}}@keyframes rotate{0%{-webkit-transform:rotateX(0) rotateY(0) rotateZ(0);transform:rotateX(0) rotateY(0) rotateZ(0)}100%{-webkit-transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg);transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg)}}; h2{color:whitesmoke; font-weight:bold; text-decoration:underline;}        
    </style>
  </head>
  <body>
  <form method="POST" action="/success.php" target="form1">
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="myModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
    <p id=greet>Continue?</p>
    <a href="help">help</a>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="quizzzo">Close</button>
    <button type="Submit" class="btn btn-primary" style="background-color:black; border-color:white;color:white;" onclick=atis()>Generate</button>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Target URI:</h5>
        <a href="help">help</a>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">https://sample.com/user/show/123</label>
            <textarea name="targets" class="form-control" id="target-text"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="cclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary" style="background-color:black; border-color:white;color:white;" onclick=atis()>Generate</button>
      </div>
    </div>
  </div>
</div>
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Target URI')
  modal.find('.modal-body input').val(recipient)
})
</script>
<center>
  <br>
  <h1 style="color:white;">Portal of Gandalf o-o</h1>
  <br>
  <span class="badge bg-danger" onclick="history()">..RECENTS 🕒..</span>
  <div id=history>
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
  <p id=hist_m><br><a href="/">refresh to view your recents.</a></p>
  </div><br><br>
  <img src="wip.webp" class="img-fluid" width="650px" height="650px">
    <br><br><br>
  <code style="color:lightgray; font-family:Arial;">" from Knowledge, sea power. "</code>
  <br><br>
  <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" id="url" name="uri" placeholder="Paste Target URI" onclick=empp()>
          <a type="Submit" id="subm" class="search_icon" onclick=Pota()><i class="fa fa-magic"></i></a>
          <br><br>
          <p id="error-message" style="color:red;"></p>
          <br>
        </div>
      </div>
    </div>
    <br>
    <iframe id="form1" name="form1" style="display:none"></iframe>
    </form>
   
  </center>

    <script>
    function haha(yyy){
  xxx = document.getElementById(yyy);
  xxx.select();
  xxx.setSelectionRange(0, 99999)
  document.execCommand("copy");

alert("copied.");
  }
        
        function history() {  
            var x = document.getElementById("history");
        if (x.style.display == "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
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
            $("#myModal").modal('show');
            var result = quiz.searchParams.get("results");
             document.getElementById('error-message').style.color = "GREEN";
             document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
             var elmnt = document.getElementById("error-message");
             elmnt.scrollIntoView();
            
            }else if(x.includes("student_lesson")){
              document.getElementById('error-message').style.color = "skyblue";
              document.getElementById('error-message').innerHTML = "try clicking 'Prepare Answer' first.";
              var elmnt = document.getElementById("error-message");
              elmnt.scrollIntoView();
            }else{
          document.getElementById('error-message').style.color = "red";
          document.getElementById('error-message').innerHTML = "Activity not found.";
          var elmnt = document.getElementById("error-message");
          elmnt.scrollIntoView();
          }
        

   }catch(error){
    document.getElementById('error-message').style.color = "red";
    document.getElementById('error-message').innerHTML = "Invalid URI.";
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
                var elmnt = document.getElementById("error-message");
                elmnt.scrollIntoView();
                window.open("https://"+domain+"/student_freeform_assignment/comments_given/"+act, '_blank', 'noopener noreferrer');
              }else{
                document.getElementById('error-message').style.color = "GREEN";
                document.getElementById("cclose").click();
                document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
                var elmnt = document.getElementById("error-message");
                elmnt.scrollIntoView();
                window.open("https://"+domain+"/student_freeform_assignment/leave_comment/"+act+"?student="+y.replace(/[^0-9]/g, ''), '_blank','noopener noreferrer');
              }
        }else if(x.includes("dropbox")){
          
          document.getElementById('error-message').style.color = "GREEN";
          document.getElementById('error-message').innerHTML = "Getting target info..";

          if(document.getElementById('target-text').value == ""){
            document.getElementById('error-message').style.color = "GREEN";
            document.getElementById("cclose").click();
            document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
            var elmnt = document.getElementById("error-message");
            elmnt.scrollIntoView();
            window.open("https://"+domain+"/student_dropbox_assignment/comments_given/"+act, '_blank','noopener noreferrer');
              }else{
               document.getElementById('error-message').style.color = "GREEN";
               document.getElementById("cclose").click();
               document.getElementById('error-message').innerHTML = "NOTE: Allow pop-ups from this site.";
               var elmnt = document.getElementById("error-message");
            elmnt.scrollIntoView();
               window.open("https://"+domain+"/student_dropbox_assignment/leave_comment/"+act+"?student="+y.replace(/[^0-9]/g, ''), '_blank','noopener noreferrer');
              }
          }else if(x.includes("quiz")){
            //result_id
            quiz = new URL(x);
            var result = quiz.searchParams.get("results");
            
            document.getElementById("quizzzo").click();

            window.open("https://"+domain+"/student_quiz_assignment/submission/"+act+"?results="+result, '_blank','noopener noreferrer');
            
            }else if(x.includes("student_lesson")){
              document.getElementById('error-message').innerHTML = "try clicking 'Prepare Answer' first.";
              var elmnt = document.getElementById("error-message");
              elmnt.scrollIntoView();
            }else{
          document.getElementById('error-message').style.color = "red";
          document.getElementById('error-message').innerHTML = "Activity not found.";
          document.getElementById("cclose").click();
          var elmnt = document.getElementById("error-message");
          elmnt.scrollIntoView();
          }
        

   }catch(error){
        document.getElementById('error-message').style.color = "red";
        document.getElementById('error-message').innerHTML = "Invalid URI.";
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
