<?php

/**
 * Class used to work with WordPress Nonces in an object orientated environment.
 */
namespace Pavlushenko;

class WPNonce {

    /**
     * Display "Are you sure you want to do this?" message to confirm the action being taken.
     *
     * If the action has the nonce explain message, then it will be displayed
     * along with the "Are you sure?" message.
     *
     * @param string $action required. The nonce action. Default: None
     *
     * @return This function does not return a value.
     */
    public function wp_nonce_ays_oop( $action ) {
        return wp_nonce_ays( $action );
    }

    /**
     * Retrieves or displays the nonce hidden form field.
     *
     * The nonce field is used to validate that the contents of the form request came from the current site
     * and not somewhere else. A nonce does not offer absolute protection, but should protect against most cases.
     * It is very important to use nonce fields in forms.
     *
     * The $action and $name arguments are optional, but if you want to have a better security, it is strongly
     * suggested to give those two arguments. It is easier to just call the function without any arguments,
     * because the nonce security method does not require them, but since crackers know what the default is,
     * it will not be difficult for them to find a way around your nonce and cause damage.
     *
     * The nonce field name will be whatever $name value you gave, and the field value will be the value created
     * using the wp_create_nonce() function.
     *
     * @param string  $action  optional. Action name. Should give the context to what is taking place.
     *                                   Optional but recommended. Default: -1.
     * @param string  $name    optional. Nonce name. This is the name of the nonce hidden form field to be created.
     *                                   Once the form is submitted, you can access the generated nonce via $_POST[$name].
     *                                   Default: '_wpnonce'.
     * @param boolean $referer optional. Whether also the referer hidden form field should be created with the
     *                                   wp_referer_field() function. Default: true.
     * @param boolean $echo    optional. Whether to display or return the nonce hidden form field, and also the referer
     *                                   hidden form field if the $referer argument is set to true. Default: true.
     * @return string The nonce hidden form field, optionally followed by the referer hidden form field if the 
     *                $referer argument is set to true.
     */
    public function wp_nonce_field_oop( $action=-1, $name='_wpnonce', $referer=true, $echo=true ) {
        return wp_nonce_field( $action, $name, $referer, $echo );
    }

    /**
     * Retrieve URL with nonce added to URL query.
     *
     * The returned result is escaped for display.
     *
     * @param string $actionurl required. URL to add nonce action. Default: None
     * @param string $action    optional. Nonce action name. Default: -1
     * @param string $name      optional. Nonce name. Default: '_wpnonce'
     *
     * @return string URL with nonce action added.
     */
    public function wp_nonce_url_oop( $actionurl, $action=-1, $name='_wpnonce' ) {
        return wp_nonce_url( $actionurl, $action, $name );
    }

    /**
     * Verify that a nonce is correct and unexpired with the respect to a specified action. The function is used to
     * verify the nonce sent in the current request usually accessed by the $_REQUEST PHP variable.
     *
     * Nonces should never be relied on for authentication or authorization, access control. Protect your functions
     * using current_user_can(), always assume Nonces can be compromised.
     *
     * @param string     $nonce  required. Nonce to verify. Default: None
     * @param string/int $action optional. Action name. Should give the context to what is taking place and be the same
     *                                     when the nonce was created. Default: -1
     *
     * @return boolean/integer Boolean false if the nonce is invalid. Otherwise, returns an integer with the value of:
     *                         1 – if the nonce has been generated in the past 12 hours or less.
     *                         2 – if the nonce was generated between 12 and 24 hours ago.
     */
    public function wp_verify_nonce_oop( $nonce, $action=-1 ) {
        return wp_verify_nonce( $nonce, $action );
    }

    /**
     * Generates and returns a nonce. The nonce is generated based on the current time, the $action argument, and
     * the current user ID.
     *
     * @param string/int $action optional. Action name. Should give the context to what is taking place.
     *                                     Optional but recommended. Default: -1
     *
     * @return string The one use form token.
     */
    public function wp_create_nonce_oop( $action=-1 ) {
        return wp_create_nonce( $action );
    }

    /**
     * Tests either if the current request carries a valid nonce, or if the current request was referred from
     * an administration screen; depending on whether the $action argument is given (which is prefered), or not,
     * respectively. On failure, the function dies after calling the wp_nonce_ays() function.
     *
     * Used to avoid CSRF security exploits. Nonces should never be relied on for authentication or authorization,
     * access control. Protect your functions using current_user_can(), always assume Nonces can be compromised.
     *
     * The now improper name of the function is kept for backward compatibility and has origin in previous WordPress
     * versions where the function only checked the referer. For details, see the Notes section below.
     *
     * @param string $action    optional. Action name. Should give the context to what is taking place. Default: -1
     * @param string $query_arg optional. Where to look for nonce in the $_REQUEST PHP variable. Default: '_wpnonce'
     *
     * @return To return boolean true, in the case of the obsolete usage, the current request must be referred from
     * an administration screen; in the case of the prefered usage, the nonce must be sent and valid. Otherwise the
     * function dies with an appropriate message ("Are you sure you want to do this?" by default).
     */
    public function check_admin_referer_oop( $action=-1, $query_arg='_wpnonce' ) {
        return check_admin_referer( $action, $query_arg );
    }

    /**
     * This function can be overridden by plugins. If no plugin redefines this function, then the standard functionality
     * will be used.
     *
     * The standard function verifies the AJAX request, to prevent any processing of requests which are passed in by
     * third-party sites or systems.
     *
     * Nonces should never be relied on for authentication, authorization or access control. Protect your functions
     * using current_user_can() and always assume that nonces can be compromised.
     *
     * @param string  $action    optional. Action nonce. Default: -1
     * @param string  $query_arg optional. Where to look for nonce in $_REQUEST. Default: false
     * @param boolean $die       optional. Whether to die if the nonce is invalid. Default: true
     *
     * @return boolean If parameter $die is set to false, this function will return a boolean of true if the check
     * passes or false if the check fails.
     */
    public function check_ajax_referer_oop( $action=-1, $query_arg=false, $die=true ) {
        return check_ajax_referer( $action, $query_arg, $die );
    }

    /**
     * Retrieves or displays the referer hidden form field.
     *
     * The referer field value will be the value of the 'REQUEST_URI' element of the $_SERVER PHP superglobal variable,
     * and the field name will be '_wp_http_referer' , in case you wanted to check manually.
     *
     * @param boolean $echo optional. Whether to display or return the referer hidden form field. Default: true
     *
     * @return string Referer field.
     */
    public function wp_referer_field_oop( $echo=true ) {
        return wp_referer_field( $echo );
    }
    
}