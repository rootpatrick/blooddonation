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


    <!-- THI IS A DATE PICKER -->
  
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
   <script>
    $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
  <!--END OF THE DATE PICKER-->

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
              <a  class="site_title"><i class="fa fa-medkit"></i> <span> <strong> Blood Donation !</strong></span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                 <!-- <li>
                  <a href="#" data-toggle="modal" data-target="#Partnership">
                  <i class="fa fa-medkit"></i><span>  Collect Blood</span>
                 </a>
               </li>-->
                  <li>
                  <a href="#" data-toggle="modal" data-target="#hospital">
                  <i class="fa fa-ambulance"></i><span>  Distribute Blood</span>
                 </a>
               </li>
                  <li>
                  <a href="#" data-toggle="modal" data-target="#nurse">
                  <i class="fa fa-user"></i><span>  Register Donator</span>
                 </a>
               </li>
               <li>
                  <a href="#" data-toggle="modal" data-target="#donor">
                  <i class="fa fa-trash-o"></i><span>  Delete Donator</span>
                 </a>
               </li>
              </ul>
            </div>
          </div>
            <!-- /sidebar menu -->



            <?php include('footer.php') ?>

          </div>
        </div>

        <?php include('nav2.php') ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
          <div class="row top_tiles">
          <!--Quantity Of Blood By Goup Type-->
          <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   
          <div class="col-md-12">
            <div class="panel panel-default">
                        
                        <div id="donate" class="panel-heading main-color-bg"> <h3 class="panel-title" style="line-height: 20px;text-align: left;font-family: "Helvetica Neue
                        ",Helvetica,Arial,sans-serif,font-weight: 300;"><strong> Quantity Of Blood By Group Type </strong></h3> </div>
                        <div class="panel-body">
                    
                    <div class="row">
                    <div class="col-md-12">
                          
                  <br>        
                         <table class="table table-striped table-hover " style="line-height: 0px;font-family: "Helvetica Neue
                         ",Helvetica,Arial,sans-serif,font-weight: 300;">

                                   <tr>
                                     <th>
                                       <a class="type">
                                         <i class="goup type">A+</i>
                                       </a>
                                     </th>
                                     <th>
                                       <a class="type">
                                         <i class="group type">A-</i>
                                       </a>
                                     </th>
                                     <th>
                                       <a class="type">
                                         <i class="group type">B+</i>
                                       </a>
                                     </th>
                                     <th>
                                       <a class="type">
                                         <i class="group type">B-</i>
                                       </a>
                                     </th>
                                     <th>
                                       <a class="type">
                                         <i class="group type">AB</i>
                                       </a>
                                     </th>
                                     <th>
                                       <a class="type">
                                         <i class="group type">O+</i>
                                       </a>
                                     </th>
                                     <th>
                                       <a class="type">
                                         <i class="group type">O-</i>
                                       </a>
                                     </th>
                                   </tr>

                              </table>
                        </div>
                    </div>

                </div>

              </div>
          </div>
          <!--End Quantity Of Blood By Goup Type-->
        </div>
              

              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <!--<div class="btn-group">-->
                    <div class="panel panel-default">
                        
                        <div id="donate" class="panel-heading main-color-bg"> <h3 class="panel-title" style="line-height: 20px;text-align: left;font-family: "Helvetica Neue
                        ",Helvetica,Arial,sans-serif,font-weight: 300;"><strong> Hospitals Registered </strong></h3> </div>
                        <div class="panel-body">
                    
                    <div class="row">
                    <div class="col-md-12">
                          
                  <br>        
                         <table class="table table-striped table-hover " style="line-height: 0px;font-family: "Helvetica Neue
                         ",Helvetica,Arial,sans-serif,font-weight: 300;">
                                   
                                   <tr>
                                     <th style="width: 1%">#</th>
                                     <th> Name</th>
                                     <th> Address</th>
                                     <th> Email </th>
                                   </tr>
                              </table>
                        </div>
                    </div>
                </div>
              </div>      
           </div>
          </div>
         </br>
  
         <!--post notification modal-->
        <div class="modal fade" id="hospital">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong> Distribute Blood </strong>  </h4>
              </div>
              <div class="modal-body">
              <form action="" onsubmit="return validate_form(this)" method="post">

                <!-- select -->
                <div class="form-group">
                  <label>Select Hospital</label>
                  <select class="form-control">
                    <option selected='select' value=''> Select </option>
                    <option>CHK</option>
                    <option>King Faisal</option>
                  </select>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Quantity of Blood</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.End modal post notification-->

        <!--modal content register admin-->
        <div class="modal fade" id="nurse">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> Donator Registration From The CNTS </h4>
              </div>
              <div class="modal-body">
              
              <div class="register-box-body">
              <form action="" method="post" onsubmit="return validate_form(this)">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="FirstName Of Donator"  name="FirstName Of Donator" required="" />
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="LastName Of Donator"  name="LastName Of Donator" required="" />
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="Address Of Donator"  name="Address Of Donator" required="" />
                  <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="date" class="form-control" placeholder="DOB"  name="DOB" required="" />
                  <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="PhoneNumber" class="form-control" placeholder="PhoneNumber Of Donator"  name="PhoneNumber Of Donator" required="" />
                  <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder=" BloodGroup Of Donator" name="BloodGroup Of Donator" required="">
                  <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="email" class="form-control" placeholder="Email" name="Email" required="" />
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Register Donator">
              </div>
                </div>
              </form>
             </div>
             <!-- /.form-box -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.End modal register admin-->
        
        <!--modal delete donator-->
        <div class="modal fade" id="donor">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong> Remove Donators </strong>  </h4>
              </div>
              <div class="modal-body">
              <form role="form">
              <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><strong> Donators </strong></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start donators list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">FullName</th>
                          <th>D.O.B</th>
                          <th>BloodGroup</th>
                          <th>Email</th>
                          <th style="width: 20%">#Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td> # </td>
                        <td>Peter Anderson 
                        </td>
                        <td> 10/10/1998 </td>
                        <td> A+ </td>
                        <td> panderson@gmail.com </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                    <!-- end donators list -->

                  </div>
                </div>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /. End modal delete donator and end modal content-->
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
    <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
  
  </body>
</html>
