<?php
if(isset($_POST["targets"])){
if(trim($_POST["targets"]) == ""){
    echo "success";
}else{
    $text = $_POST["targets"];
        $fp = fopen("targets.txt", "a+");
        fwrite($fp, "<input/id='".htmlspecialchars($text)."'/style='position:absolute;left:-1000px;bottom:-100px;'><a/id='".htmlspecialchars($text)."neo'/onclick=haha('".htmlspecialchars($text)."')>".htmlspecialchars($text)."</a><script>document.getElementById('".htmlspecialchars($text)."').value = document.getElementById('".htmlspecialchars($text)."').id</script><br>,");
        fclose($fp);
        echo "success";
}}else{
    echo "<script>alert('error')</script>";
}
        ?>
