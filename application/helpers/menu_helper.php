<?php

if( !function_exists('helper_get_menu_items') ) {
    function helper_get_menu_items() {
        $ci = & get_instance();
        $user_session = $ci->session->userdata('user_data');
        if($user_session != null) {
            return helper_get_user_menu($user_session['role_id']);
        } else {
            return array( 
                'Login' => 'main/login',
                'Register' => 'main/register'
            );
        }
    }
}



if( !function_exists('helper_get_user_menu') ) {
    function helper_get_user_menu($user_role = null) {
            $ci =& get_instance();
            $ci->load->model('menu_model','menu');
            $ci->menu->role_id = $user_role;
            $menu_list = $ci->menu->get()->to_array();
            if($menu_list) {
                $menu_arr = array();
                foreach($menu_list as $menu_item) {
                    $menu_arr[$menu_item['menu_title']] = $menu_item['menu_link'];
                }
                return $menu_arr;
            } else {
                $ci->menu->role_id = DEFAULTS::$DEFAULT_GUEST_ROLE;
                $menu_list = $ci->menu->get()->to_array();
                $menu_arr = array();
                foreach($menu_list as $menu_item) {
                    $menu_arr[$menu_item['menu_title']] = $menu_item['menu_link'];
                }
                return $menu_arr;
            }
            
      //      die();
            
        }
}

