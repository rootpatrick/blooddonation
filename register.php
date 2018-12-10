<?php

 $localhost = "localhost";
 $username = "root";
 $password = "";
 $dbname = "blood";

 //DB CONNECTION
 $db = mysqli_connect('localhost', 'root', '', 'blood');
 
  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $Address = mysqli_real_escape_string($db, $_POST['Address']);
    $DOB = mysqli_real_escape_string($db, $_POST['DOB']);
    $BloodGroup = mysqli_real_escape_string($db, $_POST['BloodGroup']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
    $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);
    $Username = mysqli_real_escape_string($db, $_POST['Username']);

    // form validation: ensure that the form is correctly filled
    if (empty($FirstName)) { array_push($errors, "Firstname is required"); }
    if (empty($LastName)) { array_push($errors, "LastName is required"); }
    if (empty($Address)) { array_push($errors, "Address is required"); }
    if (empty($DOB)) { array_push($errors, "DOB is required"); }
    if (empty($BloodGroup)) { array_push($errors, "BloodGroup is required"); }
    if (empty($Email)) { array_push($errors, "Email is required"); }
    if (empty($Password_1)) { array_push($errors, "Password is required"); }
    if (empty($Username)) { array_push($errors, "username is required"); }

    if ($Password_1 != $Password_2) {
      array_push($errors, "The two passwords do not match");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
      $Password = md5($Password_1);//encrypt the password before saving in the database
      $query = "INSERT INTO donator (Firstname, LastName, Address, DOB, BloodGroup, Email, Password, Username) 
            VALUES('$FirstName', '$LastName', '$Address', '$DOB', '$BloodGroup', '$Email', '$Password', '$Username')";
      mysqli_query($db, $query);

      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }

  }

  
    // ... 

  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $Username = mysqli_real_escape_string($db, $_POST['Username']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);

    if (empty($Username)) {
      array_push($errors, "Username is required");
    }
    if (empty($Password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $Password = md5($Password);
      $query = "SELECT * FROM donator WHERE Username='$Username' AND Password='$Password'";
      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {
        $_SESSION['Username'] = $Username;
        $_SESSION['success'] = "You are now logged in";
        header('location: don.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }

?>