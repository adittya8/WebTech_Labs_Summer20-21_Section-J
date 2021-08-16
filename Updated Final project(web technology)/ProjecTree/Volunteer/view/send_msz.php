<link rel="stylesheet" href="../CSS/signup/signupVolunteerCSS2.css">


<?php
session_start();

if(isset($_SESSION['username']))
{
  include("../view/head_dashboard.php");

  ?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h2 class="text-center mt-4 mb-2"> Send message to admin</h2>
      
      <span id="message"></span>
      <form id="sample_form">
        <div class="card">
          <div class="card-header"></div>
          <div class="card-body">
            <div class="form-group">
              <label>Name <span class="text-danger">*</span></label>
              <input type="text" name="name" id="name" class="form-control form_data" />
              <span id="name_error" class="text-danger"></span>
            </div>
            <div class="form-group">
              <label>E-mail <span class="text-danger">*</span></label>
              <input type="text" name="email" id="email" class="form-control form_data" />
              <span id="email_error" class="text-danger"></span>
            </div>
            
    
            <div class="form-group">
              <label>Message <span class="text-danger">*</span></label>
              <textarea name="comment" id="comment" cols="40" rows="5" class="form-control form_data"></textarea>
              <span id="comment_error" class="text-danger"></span>
            </div>

            <div class="form-group">
              <label>Volunteer ID <span class="text-danger">*</span></label>
              <input type="text" name="vid" id="vid" class="form-control form_data" />
              <span id="vid_error" class="text-danger"></span>
            </div>
            
          </div>
          <div class="card-footer">
            <button type="button" name="submit" id="submit" class="btn btn-primary" onclick="save_data(); return false;">Send</button>
          </div>
        </div>
    </form>
    <br />
    <br />
    </div>
</body>
</html>

<script>

function save_data()
{
  var form_element = document.getElementsByClassName('form_data');

  var form_data = new FormData();

  for(var count = 0; count < form_element.length; count++)
  {
    form_data.append(form_element[count].name, form_element[count].value);
  }

  document.getElementById('submit').disabled = true;

  var ajax_request = new XMLHttpRequest();

  ajax_request.open("POST", "../controller/send_msz_controller.php");

  ajax_request.send(form_data);

  ajax_request.onreadystatechange = function()
  {
    if(ajax_request.readyState == 4 && ajax_request.status == 200)
    {
      document.getElementById('submit').disabled = false;

      var response = JSON.parse(ajax_request.responseText);

      if(response.success != '')
      {
        document.getElementById('message').innerHTML = response.success;

        document.getElementById('sample_form').reset();


        setTimeout(function(){

          document.getElementById('message').innerHTML = '';

        }, 5000);

        document.getElementById('name_error').innerHTML = '';
        document.getElementById('email_error').innerHTML = '';
        document.getElementById('comment_error').innerHTML = '';
        document.getElementById('vid_error').innerHTML = '';
      }
      else
      {
        //display validation error
        document.getElementById('name_error').innerHTML = response.name_error;
        document.getElementById('email_error').innerHTML = response.email_error;
        document.getElementById('comment_error').innerHTML = response.comment_error;
        document.getElementById('vid_error').innerHTML = response.gender_error;
      }

      
    }
  }
}
  

</script>

<?php
include("../model/foot.php");

}
else {
header("location:../view/login_volunteer_view.php");
}
 ?>