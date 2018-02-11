<?php
$ci =& get_instance();
$user_session = $ci->session->userdata('user_data');
$side_menu = helper_get_user_menu($user_session['role_id'],1);
?>
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Pharma</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $user_session['name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <?php foreach($side_menu as $menu_item) { ?>
                <ul class="nav side-menu">
                    <?php if(!empty($menu_item['sub_menu'])) { ?>
                        <li><a><i class="fa fa-circle"></i> <?php echo  $menu_item['menu_title']; ?> <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <?php foreach($menu_item['sub_menu'] as $sub_menu_item) { ?>
                                <li><a href="<?php echo base_url().$sub_menu_item['menu_link']; ?>"> <?php echo $sub_menu_item['menu_title']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url().$menu_item['menu_link']; ?>"><i class="fa fa-circle"></i> <?php echo $menu_item['menu_title']; ?> <span class=""></span></a>
                    
                    <?php } ?>
                </ul>
                
                <?php } ?>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>