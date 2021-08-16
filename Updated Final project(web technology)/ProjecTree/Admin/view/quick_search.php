<?php require 'header.php'; 
 session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <link rel="stylesheet" href="../CSS/general.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <div class="temp"> 
    <h1>SEARCH TREE</h1>

    <input type="text" name="" onkeyup="tamzid(this.value)" placeholder="live search">
    <div id="content">
        Result
    </div>

    <script type="text/javascript">
        let content = document.getElementById('content');

        function tamzid(x){
            if(x.length == 0){
                content.innerHTML = 'empty'
            }
            else{
                var XML = new XMLHttpRequest();
                XML.onreadystatechange = function(){
                    if(XML.readyState == 4 && XML.status == 200){
                        content.innerHTML = XML.responseText;
                    }
                };

                XML.open("GET", "../controller/search_controller.php?q="+x, true);
                XML.send();
            }
        }
    </script>
    </div>
</body>
</html>
