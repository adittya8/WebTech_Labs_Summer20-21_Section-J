<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      input[type=submit]
{
  background-color: #009999;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><h3>Profile Picture</h3></p>
    <img src="pic/new.jpg" alt="" width="300" height="300">
    <br>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <br><br>
      <input type="submit" value="Submit" name="submit">
    </form>
  </body>
</html>