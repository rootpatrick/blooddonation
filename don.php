<?php
    require_once "db_connect.php";
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
                  <i class="fa fa-bullhorn"></i><span>  Request Doantion</span>
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

       <?php include('nav3.php') ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
          <!-- /top tiles -->


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
                <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Name"  name="Name" required="" />
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Address" name="Address" required="" />
                  <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="Email" required="" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
                <!--<div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder=" UserName Of Hospital">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>-->
                <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="Password" required="" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
                <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="ConfirmPassword" name="ConfirmPassword" required="" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Register">
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


       <!--Request Donation-->
       <div class="modal fade" id="nurse">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong> Make A Request </strong>  </h4>
              </div>
              <div class="modal-body">
                <div class="register-box-body">
                <form action="" method="post" onsubmit="return validate_form(this)">
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
        <!-- /. End modal Request Donation-->

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
