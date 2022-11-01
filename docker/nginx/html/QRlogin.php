<?php
    $html_docs = <<<EOD
    <form name="form" action="./login.php" method="post">
    <input type="hidden" name="id" value="${_GET["id"]}">
    <input type="hidden" name="password" value="${_GET["password"]}">
    </form>
    <script>
    alert("id : ${_GET["id"]}\\npassword : ${_GET["password"]}");
    var f = document.forms["form"];
    f.method = "POST"; 
    f.submit(); 
    </script>
EOD;
    if(!empty($_GET["id"]) and !empty($_GET["password"]))
        print($html_docs);
    else
       header("Location:./index.html");
    
    exit;
?>
