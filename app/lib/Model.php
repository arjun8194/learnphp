<?php

include '../config/config.php';

class Model
{
	
	// public function create($data)
	// {
	// 	var_dump($data);
	// 	try {
 //            $db = DB();
 //            $query = $db->prepare("INSERT INTO users(name, email, username, password) VALUES (:name,:email,:username,:password)");
 //            $query->bindParam("name", $name, PDO::PARAM_STR);
 //            $query->bindParam("email", $email, PDO::PARAM_STR);
 //            $query->bindParam("username", $username, PDO::PARAM_STR);
 //            $enc_password = hash('sha256', $password);
 //            $query->bindParam("password", $enc_password, PDO::PARAM_STR);
 //            $query->execute();
 //            return $db->lastInsertId();
 //        } catch (PDOException $e) {
 //            exit($e->getMessage());
 //        };

	// }

	public function getById()
	{
		// 
	}

	public function update()
	{
		// 
	}
}