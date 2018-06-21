<?php
    /**
     * PBKDF2 Password Hashing module for OliveWeb Framework
     * October 2014-June 2018
     * 
     * @author Luke Bullard
     * @version 1.1
     */
    
    //make sure we are included securely
    if (!defined("INPROCESS")) { header("HTTP/1.0 403 Forbidden"); exit(0); }
    
    /**
     * The main class for the PBKDF2 OliveWeb module
     */
    class MOD_pbkdf2
    {
        //constructor
        public function __construct()
        {
            //require in the PBKDF2 functions source file
            require_once(dirname(__FILE__) . "/thirdparty/PasswordHash.php");
        }
        
        /**
         * Creates a hash from a password or text.
         * 
         * @param String $a_password The password or text to hash.
         * @return String The hashed password/text.
         */
        public function createHash($a_password)
        {
            return create_hash($a_password);
        }
        
        /**
         * Validate that a password is correct against a hashed password.
         * 
         * @param String $a_password The plaintext password to test.
         * @param String $a_correctPassword The hashed password to test against.
         * @return Boolean True if the passwords match, false otherwise.
         */
        public function validatePassword($a_password, $a_correctPassword)
        {
            return validate_password($a_password, $a_correctPassword);
        }
    }
?>