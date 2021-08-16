<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title style="text-align: center;">OUR TEAM</title>
</head>
<body>
</body>
</html>
<?php
$dtls = file_get_contents('video.json');
$dtlsOK=json_decode($dtls);
?>
<div class="container">
     <h1 style="text-align:center;">OUR TEAM</h1>
     <div class="row">
               <?php foreach($dtlsOK as $ok)
                    echo "<div class=col-md-3>
                    <img height='200px'class='img-thumbnail' src=\"$ok->Picture\"/>
                    <h2 class='text-center text-danger'>$ok->ID</h2>
                    <h3 class='text-center text-success'>$ok->NAME</h3>
                    <h4 class='text-center'>$ok->EMAIL</h4>
                    </div>";
               ?>
     </div>
</div>
