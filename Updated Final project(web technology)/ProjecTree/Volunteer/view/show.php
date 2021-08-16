<?php
session_start();

if(isset($_SESSION['username']))
{
  include("../view/head_dashboard.php");

  ?>

<!DOCTYPE html>
<html>
<body>


<fieldset style="width:45%;text-align: center;margin-left: 715;">
<div id='CATALOG'></div><br>
<input type="button" onclick="previous()" value="<<">
<input type="button" onclick="next()" value=">>">
<script>
let i=0;
let len;
let cd;

const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
  const xmlDoc = xhttp.responseXML;
  cd = xmlDoc.getElementsByTagName("CD");
  len = cd.length;
  displayCD(i);
}

xhttp.open("GET", "../trees.XML");
xhttp.send();

function displayCD(i) {
    document.getElementById("CATALOG").innerHTML =
   "ID: " + cd[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue + "<br>Name: " + cd[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue + "<br>Variant: " + cd[i].getElementsByTagName("VARIANT")[0].childNodes[0].nodeValue+ "<br>Stock: " + cd[i].getElementsByTagName("STOCK")[0].childNodes[0].nodeValue+ "<br>Planted: " + cd[i].getElementsByTagName("PLANTED")[0].childNodes[0].nodeValue;
}

function next() {
  if (i < len-1) {
    i++;
    displayCD(i);
  }
}

function previous() {
  if (i > 0) {
    i--;
    displayCD(i);
  }
}


</script>
</fieldset>

</body>
</html>
<?php
include("../model/foot.php");

}
else {
header("location:../view/login_volunteer_view.php");
}
 ?>
