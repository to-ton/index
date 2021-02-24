<?php
if(isset($_POST["targets"])){
if(trim($_POST["targets"]) == ""){
    echo "success";
}else{
    $text = $_POST["targets"];
        $fp = fopen("targets.txt", "a+");
        fwrite($fp, htmlspecialchars($text)."<br>");
        fclose($fp);
        echo "success";
}}else{
    echo "<script>alert('error')</script>";
}
        ?>
