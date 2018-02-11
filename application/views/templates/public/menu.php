<?php
$ci =& get_instance();
$user_session = $ci->session->userdata('user_data');
$top_menu = helper_get_user_menu($user_session['role_id'],2);
?>
<ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $user_session['name']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <?php foreach($top_menu as $menu_item) { ?>
                      
                    <li><a href="<?php echo base_url().$menu_item['menu_link']; ?>"> <?php echo $menu_item['menu_title']; ?></a></li>
                   <!--
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                   <!-- <li><a href="javascript:;">Help</a></li> -->
                    <?php } ?>
                  </ul>
                </li>
              </ul>
 