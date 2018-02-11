<?php
if( !function_exists('helper_get_user_menu') ) {
    function helper_get_user_menu($user_role = null,$menu_type = 0) {
            $ci =& get_instance();
            $ci->load->model('menu_model','menu');
            $ci->menu->role_id = $user_role;
            $ci->menu->menu_type = $menu_type;
            $menu_list = $ci->menu->get_top_level_menu()->to_array(array());
            $menu_array = array();
            $temp_ignore = array();
            foreach($menu_list as $menu_item) {
                $menu_item['sub_menu'] = array();
                //check if it has child 
                $ci->menu->menu_parent = $menu_item['id'];
                $menu_item['sub_menu'] = $ci->menu->get()->to_array(array());
                foreach($menu_item['sub_menu'] as $sub_menu_item) {
                    array_push($temp_ignore, $sub_menu_item['id']);
                }
                if(!in_array($menu_item['id'], $temp_ignore)) {
                    array_push($menu_array,$menu_item);
                }
            }
      //      die();
            return $menu_array;
        }
}

