<html lang="en">
    <head>
        <?php require_once 'templates/'.$access.'/head.php' ?>
    </head>
    <body class="nav-md">
        <div class="container body">
          <div class="main_container">
          <?php require_once 'templates/'.$access.'/side_menu.php' ?>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
                
                <!-- Top Navigation content -->
                <?php require_once 'templates/'.$access.'/menu.php' ?>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <!--
              Page content template
              -->
              <?php require_once 'templates/'.$access.'/content.php' ?>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
              <!--
              Right footer template
              -->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
          </div>
        </div>
        
        <!-- jQuery -->
    <script src="<?php echo base_url(); ?>www/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>www/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>www/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>www/vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url(); ?>www/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>www/vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>www/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>www/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>www/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>www/build/js/custom.min.js"></script>
        
    </body>
</html>