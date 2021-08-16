<?php
session_start();

if(isset($_SESSION['username']))
{
    include("../view/head_dashboard.php");

  ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <div class="temp"> 
    <h1>Search users</h1>
    <input type="text" name="" onkeyup="imu(this.value)" placeholder="live search by name/username">
    <div id="content">
        Result
    </div>

    <script type="text/javascript">
        let content = document.getElementById('content');

        function imu(x){
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
<?php
include("../model/foot.php");

}
else {
header("location:../view/login_volunteer_view.php");
}
 ?>
