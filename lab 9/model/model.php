<?php

require_once 'db_connect.php';


function showVolunteer($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `volunteer` where USERNAME = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `volunteer` WHERE USERNAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function findPassword($username){
    $conn = db_conn();
    $selectQuery = "SELECT PASSWORD FROM `volunteer` WHERE USERNAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addSignupInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into volunteer (ID, NAME, EMAIL, BIRTH, USERNAME, PASSWORD, GENDER)
VALUES (:id, :name, :email, :birthday, :username, :password, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':id' => $data['id'],
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':birthday' => $data['birthday'],
					':username' => $data['username'],
					':password' => $data['password'],
					':gender' => $data['gender']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateVolunteer($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE volunteer set NAME = ?, EMAIL = ?, BIRTH = ? where USERNAME = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['birth']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updatePasswordVolunteer($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE volunteer set PASSWORD = '$password' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
