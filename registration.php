 
 <?php include('register.php') ?>

<div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="register.php" onsubmit="return validate_form(this)" method="post">

            <?php include('errors.php'); ?>
            
              <h1>Create Your Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="FirstName"  name="FirstName" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="LastName"  name="LastName"  required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Address" name="Address"  required="" />
              </div>
              <div>
                <input type="date" class="form-control" placeholder="DOB"  name="DOB" required="" />
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="BloodGroup"  name="BloodGroup" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="Password" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password_2" name="Password_2" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="Username"  required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-danger" name="reg_user" value="Register" style="width: 250px;">
                <!--<a class="btn btn-block btn-danger submit" href="#">Donate</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="red" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-medkit"></i> Blood Donation Camp!</h1>
                  <p>©2018 All Rights Reserved. Blood Donation Camp!!</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <!--FORM VALIDATION USING JAVASCRIPT-->

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
        if (validate_required(Name, "fill out the Firstname")==false)
         {
          Name.focus();return false;
         }
         if (validate_required(Address, "fill out the Lastname")==false)
         {
          Address.focus();return false;
         }
         if (validate_required(Email, "fill out the PhoneNumber")==false)
         {
          Email.focus();return false;
         }
         if (validate_required(Password, "fill out the Address")==false)
         {
          Password.focus();return false;
         }
         if (validate_required(ConfirmPassword, "fill out the Email")==false)
         {
          ConfirmPassword.focus();return false;
         }
         }
      }
    }

    //Email VALIDATION. IT MUST CONTAIN AN @ SIGN AND A DOT (.)
      
      function validate_Email(field,alerttxt)
      {
        with(field)
        {
          apos=value.indexOf("@");
          dotpos=value.lastIndexOf(".");
          if(apos<1||dotpos-apos<2)
          {
            alert(alerttxt);
            return false;
          }
          else
          {
            return true;
          }
        }
      }


    </script>
