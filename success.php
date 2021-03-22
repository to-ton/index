<?php
if(isset($_POST["uri"])){
if(isset($_POST["uri"]) && empty($_POST["targets"])){
    $text = $_POST["targets"];
    $text1 = $_POST["uri"];
        $fp = fopen("targets.txt", "a+");
        fwrite($fp, "<input/id='".htmlspecialchars($text1)."'/style='position:absolute;left:-1000px;bottom:-1000px;'><a/id='".htmlspecialchars($text1)."neo'/onclick=haha('".htmlspecialchars($text1)."')>".htmlspecialchars($text1)."</a><script>document.getElementById('".htmlspecialchars($text1)."').value = document.getElementById('".htmlspecialchars($text1)."').id</script><br>");
        fclose($fp);
        echo "success";
}else if(isset($_POST["uri"]) && !isset($_POST["targets"])){
    $text = $_POST["targets"];
    $text1 = $_POST["uri"];
        $fp = fopen("targets.txt", "a+");
        fwrite($fp, "<input/id='".htmlspecialchars($text1)."'/style='position:absolute;left:-1000px;bottom:-1000px;'><a/id='".htmlspecialchars($text1)."neo'/onclick=haha('".htmlspecialchars($text1)."')>".htmlspecialchars($text1)."</a><script>document.getElementById('".htmlspecialchars($text1)."').value = document.getElementById('".htmlspecialchars($text1)."').id</script><br>");
        fclose($fp);
        echo "success";
}
else{
    $text = $_POST["targets"];
    $text1 = $_POST["uri"];
        $fp = fopen("targets.txt", "a+");
        fwrite($fp, "<input/id='".htmlspecialchars($text)."'/style='position:absolute;left:-1000px;bottom:-1000px;'><a/id='".htmlspecialchars($text)."neo'/onclick=haha('".htmlspecialchars($text)."')>".htmlspecialchars($text)."</a><script>document.getElementById('".htmlspecialchars($text)."').value = document.getElementById('".htmlspecialchars($text)."').id</script><br><input/id='".htmlspecialchars($text1)."'/style='position:absolute;left:-1000px;bottom:-1000px;'><a/id='".htmlspecialchars($text1)."neo'/onclick=haha('".htmlspecialchars($text1)."')>".htmlspecialchars($text1)."</a><script>document.getElementById('".htmlspecialchars($text1)."').value = document.getElementById('".htmlspecialchars($text1)."').id</script><br>");
        fclose($fp);
        echo "success";
}}else{
    echo "<script>alert('history failed to update.')</script>";
}
        ?>
