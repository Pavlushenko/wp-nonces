<?php
//require_once 'PHPUnit/Framework.php';
use PHPUnit\Framework\TestCase;
require_once '../src/class-wp-nonce-oop.php';

//class WP_Nonce_OOP_Test extends PHPUnit_Framework_TestCase {
class WP_Nonce_OOP_Test extends TestCase {

    public function test_wp_create_nonce_oop() {
        $nonceCreate = wp_create_nonce();
        $WP_Nonce_OOP = new WP_Nonce_OOP();
        $nonceCreateOop = $WP_Nonce_OOP -> wp_create_nonce_oop();
        $this->assertEquals($nonceCreate, $nonceCreateOop);
    }
}