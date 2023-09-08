<?php

$Name = $_POST['FullName'];
$Username = $_POST['Username'];
$Email = $_POST['Email'];  
$Phone = $_POST['PhoneNumber'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];
$Gender = $_POST['Gender'];
$host = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'resistationcoffee';

$connn = new mysqli($host , $dbuser , $dbpassword , $dbname);

$stmt = $connn->prepare("INSERT INTO resister(Name,Username,Email,Phone,Password,ConfirmPassword,Gender)VALUES(?,?,?,?,?,?,?)");
$stmt->bind_param("sssisss", $Name,$Username,$Email,$Phone,$Password,$ConfirmPassword,$Gender);
$stmt->execute();
$stmt->close();
$connn->close();
