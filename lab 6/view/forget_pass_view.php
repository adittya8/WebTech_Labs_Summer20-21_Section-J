 
       <?php
include("../model/head.php");
?>
 <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../controller/forget_pass_controller.php">

  Enter your user name: <input type="text" name="username" value="">
         

   <br><br>
   <input type="submit" name="submit" value="Submit" class="btn btn-info" />
 </form>
       <?php
include("../model/foot.php");
?>
  </body>
</html>