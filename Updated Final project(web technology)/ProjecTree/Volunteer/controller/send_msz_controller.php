<?php


if(isset($_POST["name"]))
{
	sleep(1);
	$connect = new PDO("mysql:host=localhost; dbname=lab6", "root", "");

	$success = '';

	$name = $_POST["name"];

	$email = $_POST["email"];

	$comment = $_POST["comment"];

	$vid = $_POST["vid"];

	$name_error = '';
	$email_error = '';
	$comment_error = '';
	$vid_error = '';

	if(empty($name))
	{
		$name_error = 'Name is Required';
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
		{
			$name_error = 'Only Letters and White Space Allowed';
		}
	}

	if(empty($email))
	{
		$email_error = 'Email is Required';
	}
	else
	{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$email_error = 'Email is invalid';
		}
	}

	

	if(empty($comment))
	{
		$comment_error = 'Comment is Required Field';
	}

	if(empty($vid))
	{
		$vid_error = 'Please enter your volunteer ID';
	}

	if($name_error == '' && $email_error == '' && $comment_error == '' && $vid_error == '')
	{

		$data = array(
			':name'			=>	$name,
			':email'		=>	$email,
			':comment'		=>	$comment,
			':vid'		=>	$vid
		);

		$query = "INSERT INTO message(name, email, comment, vid) 
		VALUES(:name, :email, :comment, :vid)";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		$success = '<div class="alert alert-success">Your message is saved. We will contact with you as soon as possible.</div>';
	}

	$output = array(
		'success'		=>	$success,
		'name_error'	=>	$name_error,
		'email_error'	=>	$email_error,
		'comment_error'	=>	$comment_error,
		'vid_error'	=>	$vid_error
	);

	echo json_encode($output);
	
}

?>