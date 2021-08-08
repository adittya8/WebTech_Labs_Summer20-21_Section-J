<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
       <style>
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   
  

    <fieldset align = "right">

       <h1 align="left"><b> Projec<span style="color:green">Tree</span>.com</b></h1>

       <div class="topnav">
         <a href ='../controller/logout_volunteer_controller.php'>Logout </a>
       </div>




     </fieldset>

  </body>
</html>