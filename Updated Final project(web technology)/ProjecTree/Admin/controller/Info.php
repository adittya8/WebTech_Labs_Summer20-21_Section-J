<?php

require_once ('../model/model.php');

function fetchAllUsers(){
	return showAllUsers();

}

function fetchAllFund(){
	return showAllFund();

}
function fetch($username){
	return show($username);

}
?>
