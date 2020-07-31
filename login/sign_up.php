<?php

  include "db_info.php";

  $id = $_POST['u_name'];
  $gender = $_POST['gender'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $pwd = $_POST['pwd'];
  $email = $_POST['email'];

  $birthday = $_POST['b_day'];

  if($id == null || $gender == null || $phone_number == null || $address == null ||
  $email == null || $birthday == null)
  {
    echo "<a href=register.php>Back to page</a>";
    exit();
  } else {
      echo "good"."<br>";
    }


  $check = "SELECT * FROM login where id = '$id'";
  echo $check;

  $result = $mysqli -> query($check);
  if($result -> num_rows == 1) {
    echo "this id is already being used";
    echo "<a href = register.php>Back to page</a>";
    exit();
  }
  else{
    echo "Okay";
  }

  $query = "INSERT INTO login (name, gender, phone_number, id, password, e_mail,
            birthday, address) VALUES('$name', '$gender', '$phone_number', '$id',
            '$password', '$e_mail', '$birthday', '$address')";
  $execute = $mysqli -> query($query);

  if($execute) {
    echo "Sign up successfully";
    header("location : login.php");
  }
  else {
    echo "error occured". "<br>";
    echo $mysqli -> error;
   }

 ?>
