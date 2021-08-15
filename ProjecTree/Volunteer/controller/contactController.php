<?php


if(isset($_POST["name"]))
{
	sleep(1);
	$connect = new PDO("mysql:host=localhost; dbname=lab6", "root", "");

	$success = '';

	$name = $_POST["name"];

	$email = $_POST["email"];

	$comment = $_POST["comment"];

	$gender = $_POST["gender"];

	$name_error = '';
	$email_error = '';
	$comment_error = '';
	$gender_error = '';

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

	if(empty($gender))
	{
		$gender_error = 'Please Select your gender';
	}

	if($name_error == '' && $email_error == '' && $comment_error == '' && $gender_error == '')
	{

		$data = array(
			':name'			=>	$name,
			':email'		=>	$email,
			':comment'		=>	$comment,
			':gender'		=>	$gender
		);

		$query = "INSERT INTO contact(name, email, comment, gender) 
		VALUES(:name, :email, :comment, :gender)";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		$success = '<div class="alert alert-success">Your message is saved. We will contact with you as soon as possible.</div>';
	}

	$output = array(
		'success'		=>	$success,
		'name_error'	=>	$name_error,
		'email_error'	=>	$email_error,
		'comment_error'	=>	$comment_error,
		'gender_error'	=>	$gender_error
	);

	echo json_encode($output);
	
}

?>