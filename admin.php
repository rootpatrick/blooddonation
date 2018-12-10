<?php
    require_once "db_connect.php";
?>

<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'blood'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * 
    FROM donator';
    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- META, TITLE, CSS, FAVICONS, ETC. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Donating Blood Is Saving Lives!! </title>

    <!-- BOOTSTRAP -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

     <!--style modals-->
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

  <style>
    #donate {
      background-color: #e74c3c !important;
    }
  </style>
  <!--End Style Modals-->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a  class="site_title"><i class="fa fa-medkit"></i> <span>Blood Donation!</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div  class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li>
                  <a href="#" data-toggle="modal" data-target="#Partnership">
                  <i class="fa fa-medkit"></i><span>  Register Hospital</span>
                 </a>
               </li>
                  <li>
                  <a href="#" data-toggle="modal" data-target="#hospital">
                  <i class="fa fa-user"></i><span>  Register Admin</span>
                 </a>
               </li>
                  <li>
                  <a href="#" data-toggle="modal" data-target="#nurse">
                  <i class="fa fa-bullhorn"></i><span>  Post Notification</span>
                 </a>
               </li>
              </ul>
            </div>
          </div>
            <!-- /sidebar menu -->

            <!--Modals Contents-->


            <!--End Modals Contents-->

            <?php include('footer.php') ?>

          </div>
        </div>

       <?php include('nav.php') ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
          <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-home"></i></div>
                  <span class="count_top"><i class="fa fa-home"></i> Total Banks</span>
                  <div class="count">179</div>
                  <center>
                  <h3 style="color: #e74c3c; line-height: 50px;text-align: center;font-family: "Helvetica Neue
                  ",Helvetica,Arial,sans-serif,font-weight: 300;"> <strong> Number Of Blood In Banks </strong> </h3>
                  </center>
                  <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                </div>
              </div>
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <span class="count_top"><i class="fa fa-sort-amount-desc"></i> Total Blood Group</span>
                  <div class="count">179</div>
                  <center>
                  <h3 style="color: #e74c3c; line-height: 50px;text-align: center;font-family: "Helvetica Neue
                  ",Helvetica,Arial,sans-serif,font-weight: 300;"> <strong> Number Of Blood By Group Types </strong></h3>
                  </center>
                  <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                </div>
              </div>
              </div>

            <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-male"></i></div>
                  <span class="count_top"><i class="fa fa-male"></i> Total Donators</span>
                  <div class="count">179</div>
                  <center>
                  <h3 style="color: #e74c3c; line-height: 50px;text-align: center;font-family: "Helvetica Neue
                  ",Helvetica,Arial,sans-serif,font-weight: 300;"> <strong> Number Of Donators Per Month </strong> </h3>
                  </center>
                  <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                </div>
              </div>
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-medkit"></i></div>
                  <span class="count_top"><i class="fa fa-medkit"></i> Total Hospitals</span>
                  <div class="count">179</div>
                  <center>
                  <h3 style="color: #e74c3c; line-height: 50px;text-align: center;font-family: "Helvetica Neue
                   ",Helvetica,Arial,sans-serif,font-weight: 300;"> <strong> Number Of Hospitals </strong></h3>
                  </center>
                  <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                </div>
              </div>
            </div>
          <!-- /top tiles -->

          <!--Latest Donators List On month-->
          <div class="col-md-12">
            <div class="panel panel-default">
                        
                        <div id="donate" class="panel-heading main-color-bg"> <h3 class="panel-title" style="line-height: 20px;text-align: left;font-family: "Helvetica Neue
                        ",Helvetica,Arial,sans-serif,font-weight: 300;"><strong> Latest Donators </strong></h3> </div>
                        <div class="panel-body">
                    
                    <div class="row">
                    <div class="col-md-12">
                    
                          
                  <br>        
                         <table class="table table-striped table-hover " style="line-height: 0px;font-family: "Helvetica Neue
                         ",Helvetica,Arial,sans-serif,font-weight: 300;">
                                   
                                   <tr>
                                     <th> FirstName</th>
                                     <th> LastName</th>
                                     <th> Email </th>
                                     <th> Details</th>
                                   </tr>
                                   <?php
                                  while ($row = mysqli_fetch_array($query))
                                  {
                                    echo '<tr>
                                        <td>'.$row['FirstName'].'</td>
                                        <td>'.$row['LastName'].'</td>
                                        <td>'.$row['Email'].'</td>
                                        <td><a href="#" data-toggle="modal" data-target="#type" style="color: #e74c3c !important;"><span> View </span>

                                        </tr>';
                                  }?>


                              </table>
                        </div>
                    </div>

                </div>

              </div>
          </div>
          <!--End Latest Donators List On month-->

          <!--MODAL VIEW-->
          <div class="modal fade" id="type">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong> Donator Informations </strong> </h4>
              </div>
              <div class="modal-body">
              <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title"><strong> View Details </strong>  </h3>
                        </div>
                        
                        <div class="panel-body">

                             <table class="table table-striped table-hover ">
                                   
                                   <tr>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <!--<th>PhoneNumber</th>-->
                                            <th>Address</th>
                                            <th>DOB</th>
                                            <th>BloodGroup</th>
                                          </tr>

                              </table>
                          
                        </div>
                   </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"> Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
         <!--END MODAL VIEW-->

        <!--MODAL VIEW-->
        <div class="modal fade" id="grouptype">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><strong> Donator Informations </strong> </h4>
            </div>
            <div class="modal-body">
            <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title"><strong> View Details </strong> </h3>
                        </div>
                        
                        <div class="panel-body">

                             <table class="table table-striped table-hover ">
                                   
                                   <tr>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <!--<th>PhoneNumber</th>-->
                                            <th>Address</th>
                                            <th>DOB</th>
                                            <th>BloodGroup</th>
                                          </tr>

                              </table>
                          
                        </div>
                   </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal"> Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
       <!--END MODAL VIEW-->
      
         <!--MODAL VIEW-->
          <div class="modal fade" id="bloodgroup">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong> Donator Informations </strong> </h4>
              </div>
              <div class="modal-body">
              <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title"><strong> View Details </strong> </h3>
                        </div>
                        
                        <div class="panel-body">

                             <table class="table table-striped table-hover ">
                                   
                                   <tr>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <!--<th>PhoneNumber</th>-->
                                            <th>Address</th>
                                            <th>DOB</th>
                                            <th>BloodGroup</th>
                                          </tr>

                              </table>
                          
                        </div>
                   </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"> Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
         <!--END MODAL VIEW-->  


       <!--MODAL VIEW-->
        <div class="modal fade" id="groupblood">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><strong> Donator Informations </strong> </h4>
            </div>
            <div class="modal-body">
            <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title"><strong> View Details </strong> </h3>
                        </div>
                        
                        <div class="panel-body">

                             <table class="table table-striped table-hover ">
                                   
                                   <tr>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <!--<th>PhoneNumber</th>-->
                                            <th>Address</th>
                                            <th>DOB</th>
                                            <th>BloodGroup</th>
                                          </tr>

                              </table>
                          
                        </div>
                   </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal"> Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
       <!--END MODAL VIEW-->


       <!--register hospital modal-->
       <div class="modal fade" id="Partnership">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <strong> Hospital Registration </strong> </h4>
              </div>
              <div class="modal-body">
              <div class="register-box-body">
              <form action="register.php" method="post" onsubmit="return validate_form(this)">
              
              <?php include('errors.php'); ?>

                <div>
                <input type="text" class="form-control" placeholder="Name"  name="Name" required="" />
                </div>
                <br>
                <div>
                <input type="text" class="form-control" placeholder="Address" name="Address" required="" />
                </div>
                <br>
                <div>
                <input type="email" class="form-control" placeholder="Email" name="Email" required="" />
              </div>
              <br>
                <div>
                <input type="password" class="form-control" placeholder="Password_1" name="Password_1" required="" />
              </div>
              <br>
                <div>
                <input type="password" class="form-control" placeholder="Password_2" name="Password_2" required="" />
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="Username"  required="" />
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit"  class="btn btn-primary" name="hosp_reg" value="Register">
              </div>

                <!--<div>
                <input type="submit" class="btn btn-danger" value="Register" style="width: 250px;">
                <a class="btn btn-block btn-danger submit" href="#">Donate</a>
              </div>-->

              </form>
             </div>
             <!-- /.form-box -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.End modal register hospital-->

       <!--register admin modal-->
       <div class="modal fade" id="hospital">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong> Admin Registration </strong>  </h4>
              </div>
              <div class="modal-body">
                <div class="register-box-body">
                <form action="" method="post" onsubmit="return validate_form(this)">

                <?php include('errors.php'); ?>

                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="UserName"  name="UserName" required="" />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="Password" required="" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="Email" required="" />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Register Admin">
                  </div>
                </form>
              </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /. End modal register admin-->


       <!--post notification modal-->
        <div class="modal fade" id="nurse">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong> Post Notification </strong>  </h4>
              </div>
              <div class="modal-body">
              <form action="" onsubmit="return validate_form(this)" method="post">

                <!-- select -->
                <div class="form-group">
                  <label>Select Destinators</label>
                  <select class="form-control">
                    <option selected='select' value=''> Select </option>
                    <option>Donators</option>
                    <option>Nurse</option>
                    <option>Hospitals</option>
                    <option>Public</option>
                  </select>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Description Of The Notification</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content Of Notification</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
              </div>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.End modal post notification-->

        </div>
        <!-- /page content -->
      </div>
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




    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  
  </body>
</html>
