<?php
session_start();

if(isset($_SESSION['username']))
{
  include("../view/head_dashboard.php");

  ?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>
  <fieldset style="width:45%;text-align: center;margin-left: 715;">
    <legend>Tree Collection</legend>
    <script>
    let i=0;
    let len;
    let cd;

function loadXMLDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    const xmlDoc = xhttp.responseXML;
    const cd = xmlDoc.getElementsByTagName("CD");
    len = cd.length;
    myFunction(cd)
    displayCD(i);
  }
  xhttp.open("GET", "../trees.XML");
  xhttp.send();
}
function myFunction(cd) {
  let table="<tr><th>ID</th><th>Name</th><th>Variant</th><th>Stock</th><th>Planted</th></tr>";
  for (let i = 0; i < cd.length; i++) { 
    table += "<tr><td>" +
    cd[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +
    "</td><td>" +
    cd[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</td><td>" +
    cd[i].getElementsByTagName("VARIANT")[0].childNodes[0].nodeValue +
    "</td><td>" +
    cd[i].getElementsByTagName("STOCK")[0].childNodes[0].nodeValue +
    "</td><td>" +
    cd[i].getElementsByTagName("PLANTED")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("CATALOG").innerHTML = table;
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
<table id="CATALOG" style="text-align: center;width: 60%;"></table>
<br><br>
<!-- <input type="button" onclick="previous()" value="<<">
<input type="button" onclick="next()" value=">>">
<br><br> -->
<button type="button" onclick="loadXMLDoc()">Watch Tree Collection</button>
<br><br>
<form action="show_all_tree(Ajax).php">

</form>
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