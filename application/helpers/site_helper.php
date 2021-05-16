<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * This function is used to print the content of any data
 */
if (!function_exists('pre')) {
    function pre($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }
}