<?php

use Pavlushenko\WPNonce;

class WPNonceTest extends \PHPUnit_Framework_TestCase
{
    public function test_wp_nonce_ays_oop($action='log-out') {
        $WPNonce = new WPNonce();
        $nonceAys = $WPNonce -> wp_nonce_ays_oop($action='log-out');
        $this->assertEquals(1, $nonceAys);
    }

    public function test_wp_nonce_field_oop() {
        $WPNonce = new WPNonce();
        $nonceField = $WPNonce -> wp_nonce_field_oop();
        $this->assertEquals(1, $nonceField);
    }

    public function test_wp_nonce_url_oop($actionurl='http://site.ru/url') {
        $WPNonce = new WPNonce();
        $nonceUrl = $WPNonce -> wp_nonce_url_oop($actionurl='http://site.ru/url');
        $this->assertEquals(1, $nonceUrl);
    }

    public function test_wp_verify_nonce_oop($nonce='my-nonce') {
        $WPNonce = new WPNonce();
        $nonceVerify = $WPNonce -> wp_verify_nonce_oop($nonce='my-nonce');
        $this->assertEquals(1, $nonceVerify);
    }

    public function test_wp_create_nonce_oop() {
        $WPNonce = new WPNonce();
        $nonceCreate = $WPNonce -> wp_create_nonce_oop();
        $this->assertEquals(1, $nonceCreate);
    }

    public function test_check_admin_referer_oop() {
        $WPNonce = new WPNonce();
        $checkAdminRefer = $WPNonce -> check_admin_referer_oop();
        $this->assertEquals(1, $checkAdminRefer);
    }

    public function test_check_ajax_referer_oop() {
        $WPNonce = new WPNonce();
        $checkAjaxRefer = $WPNonce -> check_ajax_referer_oop();
        $this->assertEquals(1, $checkAjaxRefer);
    }

    public function test_wp_referer_field_oop() {
        $WPNonce = new WPNonce();
        $wpReferField = $WPNonce -> wp_referer_field_oop();
        $this->assertEquals(1, $wpReferField);
    }

}

function wp_nonce_ays($action='log-out') {
    return 1;
}

function wp_nonce_field() {
    return 1;
}

function wp_nonce_url($actionurl='http://site.ru/url') {
    return 1;
}

function wp_verify_nonce($nonce='my-nonce') {
    return 1;
}

function wp_create_nonce() {
    return 1;
}

function check_admin_referer() {
    return 1;
}

function check_ajax_referer() {
    return 1;
}

function wp_referer_field() {
    return 1;
}