<?php 
add_action('admin_init', 'your_function');
function your_function(){
    add_settings_field(
        'myprefix_setting-id',
        'This is the setting title',
        'myprefix_setting_callback_function',
        'general',
        'default',
        array( 'label_for' => 'myprefix_setting-id' )
    );
}
function myprefix_setting_callback_function(){
    ?>
    
    <?php 
}