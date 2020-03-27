<?php 
if(!function_exists('vnnative_login_api')) {
    function vnnative_login_api(){
        unset($_POST['action']);
        try {
            if(empty($_POST['vnnative_email_user']) || empty($_POST['vnnative_email_password'])) {
                throw new Exception("You need email and password");
            }
            /**
             * Security 
             */

            $auth = new vnnative_authen;
            $creds = array(
                'user_login'    => sanitize_text_field($_POST['vnnative_email_user']),
                'user_password' => $_POST['vnnative_email_password'],
                'remember'      => true
            );
            
            $user = wp_signon( $creds, false );
            if ( is_wp_error( $user ) ) {
                throw new Exception($user->get_error_message());
            }
            $auth->payload['data'] = $user->data;
            $auth->makeToken();
            wp_send_json(array(
                'token' => $auth->token,
                'data' => $auth->payload['data']
            )); 
        }catch(\Exception $e) {
            http_response_code(400);
            $message = __($e->getMessage(),VNNATIVE_FRAMEWORK_LOGIN_API_TEXT_DOMAIN);
            wp_send_json(array(
                'message' => $message
            )); 
        }
        wp_die();
    }
    add_action('wp_ajax_vnnative_login_api','vnnative_login_api');
    add_action( 'wp_ajax_nopriv_vnnative_login_api', 'vnnative_login_api' );
}
