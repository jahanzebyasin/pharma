<?php

if( !function_exists('is_user_logged_in') ) {
    function is_user_logged_in() {
        $ci = & get_instance();
        $user_session = $ci->session->userdata('user_data');
        if(isset($user_session) && $user_session != null && count($user_session) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
