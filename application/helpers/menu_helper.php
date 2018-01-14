<?php

if( !function_exists('helper_get_menu_items') ) {
    function helper_get_menu_items() {
        $ci = & get_instance();
        $user_session = $ci->session->userdata('user');
        if($user_session != null) {
            return helper_get_user_menu($user_role);
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
            if($user_role == null) {
                return array( 
                    'Login' => 'main/login',
                    'Register' => 'main/register'
                );
            }
            /*
             * TODO: Later get from DB
             */
           $menu = array();
            switch ($user_role) {
                case 1: // Guest
                    $menu = array( 
                        'Login' => 'main/login',
                        'Register' => 'main/register'
                    );
                    break;
                case 2: // Registered
                    $menu = array( 
                        'Profile' => 'user/profile',
                        'Logout' => 'main/logout'
                    );
                    break;
                case 3: // Admin
                    break;
                case 4: // Super Admin
                    break;
                default:
                     $menu = array( 
                        'Login' => 'main/login',
                        'Register' => 'main/register'
                    );
                    break;
                    
            }
            
            return $menu;
            
        }
}

