<?php

function is_administrator($name = 'Samuel', $value ='Clemens') {

    if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) {

        return true;

    } else {

        return false;

    }



} // End of is_administrator
if (!isset($logging_out)){

    $logging_out = false;

}

if(!isset($loggedin)){

    $loggedin = false;

}

