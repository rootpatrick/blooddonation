<?php

  require_once "db_connect.php";

  session_start();

  if(isset($_SESSION['userid'])) {
    header('location: http://localhost/work/production/admin.php');

  }
 $errors = array();

 if($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || empty($password)) {
    if($email == "") {
      $errors[] = "Email is required";
    }
    if($password == "") {
      $errors[] = "password is required";
    }
  } else {
    $sql = "SELECT * FROM user_details WHERE email = '$email'";
    $result = $con->query($sql);

    if($result->num_rows == 1) {
      $password = md5($password);
      //EXIT
      $mainSql = "SELECT * FROM user_details WHERE email = '$email' AND password = '$password'";
      $mainResult = $connect->query($mainSql);

      if ($mainResult->num_rows == 1) {
        $value = $mainResult->fetch_assoc();
        $user_id = $value['user_id'];

        //SET SESSION
        $_SESSION['userId'] = $user_id;

        header('location: http://localhost/work/production/admin.php');
        # code...
      } else {
        $error[] = "incorect username/password combination";
      }
    } else {
      $errors[] = "email doesnot exists";
    }
  }
 }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Blood Donation Login!! </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <script>
       function validate_required(field,alerttxt)
    {
      with (field)
      {
        if (value==null||value=="")
        {
          alert(alerttxt);return false;
        }
        else
        {
          return true;
        }
      }
    }
    function validate_form(thisform)
    {
      with(thisform)
      {
        if (validate_required(email, "fill it")==false)
         {
          email.focus();return false;
         }
         if (validate_required(password, "fill out")==false)
         {
          password.focus();return false;
         }
      }
    }

    //PASWORD VALIDATION IT SHOULD BE AT LEAST 8 CHARACTERS
     
     function validate_form()
      {  
      var password=document.myform.password.value;  
        
      if (password==null || password=="")
      {  
        alert("password can't be blank");  
        return false;  
      }
      else if(password.length<8)
      {  
        alert("Password must be at least 8 characters long.");  
        return false;  
        }  
      }

    //USERNAME VALIDATION. IT MUST CONTAIN ONLY CHARACTERS
      
      function validate_form(username)
        { 
        var letters = /^[A-Za-z]+$/;
        if(username.value.match(letters))
        {
        return true;
        }
        else
        {
        alert('username must have alphabet characters only');
        username.focus();
        return false;
        }
        }    


    </script>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">

          <section class="login_content">

           <div class="message">
            <?php if($errors) {
              foreach ($errors as $key => $value) {
                echo '<div class="alert alert-warning" role="alert">
                <i class="glyphicon glyphicon-exclamation-sign"></i>
                '.$value.'</div>';
                # code...
              }
              # code...
            }

             ?>
          </div>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="myform" onsubmit="return validate_form(this)" method="post">

              <h1>Login Form</h1>

              <div>
                <input type="text" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-danger" name="login_user" value="Login" style="width: 150px;">
                <!--<a type="submit" class="btn btn-block btn-danger submit">Log in</a>-->
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="red" class="to_register"> Create Your  Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-medkit"></i> Blood Donation Camp System!! </h1>
                  <p>©2018 All Rights Reserved. Blood Donation Camp!!.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <?php include('registration.php') ?>
        
      </div>
    </div>
  </body>
</html>
