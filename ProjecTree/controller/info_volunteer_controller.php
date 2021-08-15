<?php

require_once ('../model/model.php');

function fetchAllVolunteer(){
	return showAllVolunteer();

}
function fetch_volunteer($username){
	return showVolunteer($username);

}
?>