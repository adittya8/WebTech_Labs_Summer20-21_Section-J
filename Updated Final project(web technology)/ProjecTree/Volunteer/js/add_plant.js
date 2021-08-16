<script type="text/javascript">


function checkID()
{
  var vid= document.getElementById("vid");
  if(vid.value.trim()=="" )
  {
     document.getElementById("vidErr").innerHTML= "*ID is requied";
     return false;
  }
  else {

  
       document.getElementById("vidErr").innerHTML= "";

  }
}




function checkAmount()
{
    var amount= document.getElementById("amount");
  if(phone.value.trim()=="")
  {
    document.getElementById("amountErr").innerHTML= "*Amount is requied";
    return false;
  }
  else {

    document.getElementById("amountErr").innerHTML= "";

}
}

function checkNursery()
{
    var nursery= document.getElementById("nursery");

    if(nursery.value.trim()=="")
    {
      document.getElementById("nurseryErr").innerHTML= "*Nursery name is requied";
      return false;
    }
    else {

        document.getElementById("nurseryErr").innerHTML= "";

    }
}




</script>
